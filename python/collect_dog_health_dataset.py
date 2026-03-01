#!/usr/bin/env python3
"""
Collect a labeled/unlabeled dog-health dataset from an IP camera stream.

This script detects dogs, extracts health features, and writes one CSV row per sample
with the cropped dog image path.
"""

from __future__ import annotations

import argparse
import csv
import os
import sys
import time
from datetime import datetime
from pathlib import Path
from typing import Optional

import numpy as np

try:
    import cv2
except ImportError:
    print("Missing dependency: opencv-python", file=sys.stderr)
    print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)

try:
    from ultralytics import YOLO
except ImportError:
    print("Missing dependency: ultralytics", file=sys.stderr)
    print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)

from ip_camera_dog_detector import (
    configure_rtsp_transport,
    extract_dog_targets,
    extract_health_features,
    open_capture,
)


CSV_HEADERS = [
    "sample_id",
    "timestamp",
    "image_path",
    "label",
    "dog_confidence",
    "foam_ratio",
    "red_eye_ratio",
    "motion_ratio",
    "edge_ratio",
    "mean_saturation",
    "symptoms",
    "bbox_x1",
    "bbox_y1",
    "bbox_x2",
    "bbox_y2",
    "source",
]


def parse_args() -> argparse.Namespace:
    root_dir = Path(__file__).resolve().parent / "data" / "health_dataset"
    parser = argparse.ArgumentParser(description="Collect dog-health dataset samples from video stream.")
    parser.add_argument(
        "--source",
        default=os.getenv("IP_CAMERA_URL"),
        help="IP camera stream URL (RTSP/HTTP). You can also set IP_CAMERA_URL.",
    )
    parser.add_argument(
        "--csv",
        type=Path,
        default=root_dir / "samples.csv",
        help="CSV file to store dataset metadata.",
    )
    parser.add_argument(
        "--images-dir",
        type=Path,
        default=root_dir / "images",
        help="Directory to store cropped dog images.",
    )
    parser.add_argument(
        "--model",
        default="yolov8n.pt",
        help="YOLO model path/name for dog detection.",
    )
    parser.add_argument("--conf", type=float, default=0.20, help="Detection confidence threshold.")
    parser.add_argument("--iou", type=float, default=0.45, help="NMS IOU threshold.")
    parser.add_argument("--imgsz", type=int, default=640, help="Inference image size.")
    parser.add_argument("--device", default="cpu", help="Inference device (cpu/mps/cuda:0).")
    parser.add_argument("--frame-skip", type=int, default=3, help="Process one frame every N frames.")
    parser.add_argument(
        "--sample-cooldown",
        type=float,
        default=1.0,
        help="Minimum seconds between saved samples.",
    )
    parser.add_argument(
        "--max-samples",
        type=int,
        default=0,
        help="Stop after this many newly collected samples (0 means unlimited).",
    )
    parser.add_argument(
        "--label-mode",
        choices=("unknown", "interactive"),
        default="unknown",
        help="unknown: save unlabeled rows; interactive: label each sample with keyboard.",
    )
    parser.add_argument(
        "--save-all-dogs",
        action="store_true",
        help="Save all detected dogs per frame (default saves only the primary dog).",
    )
    parser.add_argument(
        "--rtsp-transport",
        choices=("tcp", "udp"),
        default="tcp",
        help="RTSP transport for OpenCV FFmpeg backend.",
    )
    parser.add_argument(
        "--symptom-foam-threshold",
        type=float,
        default=0.22,
        help="Foam ratio threshold for symptom flags.",
    )
    parser.add_argument(
        "--symptom-red-eye-threshold",
        type=float,
        default=0.09,
        help="Red-eye ratio threshold for symptom flags.",
    )
    parser.add_argument(
        "--symptom-motion-threshold",
        type=float,
        default=0.12,
        help="Motion ratio threshold for symptom flags.",
    )
    parser.add_argument(
        "--reconnect-delay",
        type=float,
        default=2.0,
        help="Seconds before reconnect attempt when stream fails.",
    )
    parser.add_argument(
        "--stats-interval",
        type=float,
        default=5.0,
        help="Seconds between progress logs (default: 5.0).",
    )
    parser.add_argument(
        "--warmup-frames",
        type=int,
        default=20,
        help="Initial frames to skip after each connection (default: 20).",
    )
    return parser.parse_args()


def clamp_box(frame_w: int, frame_h: int, x1: int, y1: int, x2: int, y2: int) -> tuple[int, int, int, int]:
    x1 = max(0, min(frame_w - 1, x1))
    y1 = max(0, min(frame_h - 1, y1))
    x2 = max(1, min(frame_w, x2))
    y2 = max(1, min(frame_h, y2))
    if x2 <= x1:
        x2 = min(frame_w, x1 + 1)
    if y2 <= y1:
        y2 = min(frame_h, y1 + 1)
    return x1, y1, x2, y2


def ensure_csv(csv_path: Path) -> int:
    csv_path.parent.mkdir(parents=True, exist_ok=True)
    if not csv_path.exists() or csv_path.stat().st_size == 0:
        with csv_path.open("w", newline="", encoding="utf-8") as f:
            writer = csv.DictWriter(f, fieldnames=CSV_HEADERS)
            writer.writeheader()
        return 0

    with csv_path.open("r", newline="", encoding="utf-8") as f:
        reader = csv.DictReader(f)
        if reader.fieldnames != CSV_HEADERS:
            raise ValueError(
                f"CSV header mismatch in {csv_path}. Expected {CSV_HEADERS}, got {reader.fieldnames}"
            )
        return sum(1 for _ in reader)


def interactive_label(sample_view: np.ndarray) -> Optional[str]:
    title = "Label Dog Sample (h=healthy, i=ill, s=skip, q=quit)"
    cv2.imshow(title, sample_view)
    while True:
        key = cv2.waitKey(0) & 0xFF
        if key in (ord("h"), ord("H")):
            cv2.destroyWindow(title)
            return "healthy"
        if key in (ord("i"), ord("I")):
            cv2.destroyWindow(title)
            return "ill"
        if key in (ord("s"), ord("S")):
            cv2.destroyWindow(title)
            return None
        if key in (ord("q"), ord("Q"), 27):
            cv2.destroyWindow(title)
            return "QUIT"


def make_overlay(crop: np.ndarray, symptoms: list[str], dog_conf: float) -> np.ndarray:
    overlay = crop.copy()
    info_lines = [
        f"dog_conf={dog_conf:.2f}",
        f"symptoms={','.join(symptoms) if symptoms else 'none'}",
        "h=healthy | i=ill | s=skip | q=quit",
    ]
    y = 22
    for line in info_lines:
        cv2.putText(
            overlay,
            line,
            (8, y),
            cv2.FONT_HERSHEY_SIMPLEX,
            0.55,
            (255, 255, 255),
            2,
            cv2.LINE_AA,
        )
        y += 24
    return overlay


def save_sample_row(csv_path: Path, row: dict[str, str]) -> None:
    with csv_path.open("a", newline="", encoding="utf-8") as f:
        writer = csv.DictWriter(f, fieldnames=CSV_HEADERS)
        writer.writerow(row)


def main() -> int:
    args = parse_args()
    if not args.source:
        print("No camera source provided. Use --source or set IP_CAMERA_URL.", file=sys.stderr)
        return 2
    if args.frame_skip < 1:
        print("--frame-skip must be >= 1", file=sys.stderr)
        return 2

    configure_rtsp_transport(args.source, args.rtsp_transport)

    try:
        existing_rows = ensure_csv(args.csv)
    except Exception as exc:
        print(f"CSV error: {exc}", file=sys.stderr)
        return 2

    args.images_dir.mkdir(parents=True, exist_ok=True)

    print(f"Loading detector model: {args.model}")
    model = YOLO(args.model)

    next_sample_id = existing_rows + 1
    new_samples = 0
    frame_idx = 0
    processed_frames = 0
    detection_frames = 0
    last_stats_at = time.time()
    last_detection_at = 0.0
    last_save_at = 0.0
    prev_gray: Optional[np.ndarray] = None
    cap: Optional[cv2.VideoCapture] = None
    warmup_left = 0
    no_detection_hint_printed = False

    print(f"Collecting dataset from source: {args.source}")
    print(f"CSV: {args.csv}")
    print(f"Images: {args.images_dir}")
    if args.label_mode == "interactive":
        print("Interactive labeling enabled.")

    try:
        while True:
            if cap is None or not cap.isOpened():
                cap = open_capture(args.source)
                if cap is None:
                    print(f"Unable to open stream. Retrying in {args.reconnect_delay:.1f}s...")
                    time.sleep(args.reconnect_delay)
                    continue
                print("Stream connected.")
                warmup_left = max(0, args.warmup_frames)
                no_detection_hint_printed = False

            ok, frame = cap.read()
            if not ok or frame is None:
                print("Stream disconnected. Reconnecting...")
                cap.release()
                cap = None
                prev_gray = None
                warmup_left = 0
                time.sleep(args.reconnect_delay)
                continue

            frame_idx += 1
            gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

            if warmup_left > 0:
                warmup_left -= 1
                prev_gray = gray
                cv2.imshow("Dataset Collection", frame)
                key = cv2.waitKey(1) & 0xFF
                if key in (ord("q"), 27):
                    break
                continue

            if frame_idx % args.frame_skip != 0:
                prev_gray = gray
                cv2.imshow("Dataset Collection", frame)
                key = cv2.waitKey(1) & 0xFF
                if key in (ord("q"), 27):
                    break
                continue

            processed_frames += 1
            prediction = model.predict(
                source=frame,
                conf=args.conf,
                iou=args.iou,
                imgsz=args.imgsz,
                device=args.device,
                verbose=False,
            )[0]
            dog_targets = extract_dog_targets(prediction)
            if dog_targets:
                detection_frames += 1
                last_detection_at = time.time()
                dog_targets = sorted(dog_targets, key=lambda t: (t.area(), t.confidence), reverse=True)
                if not args.save_all_dogs:
                    dog_targets = dog_targets[:1]

            annotated = frame.copy()
            for target in dog_targets:
                cv2.rectangle(annotated, (target.x1, target.y1), (target.x2, target.y2), (0, 200, 0), 2)

            if dog_targets and (time.time() - last_save_at >= args.sample_cooldown):
                for target in dog_targets:
                    frame_h, frame_w = frame.shape[:2]
                    x1, y1, x2, y2 = clamp_box(frame_w, frame_h, target.x1, target.y1, target.x2, target.y2)
                    crop = frame[y1:y2, x1:x2]
                    if crop.size == 0:
                        continue

                    features, symptoms = extract_health_features(
                        frame=frame,
                        gray_frame=gray,
                        prev_gray=prev_gray,
                        target=target,
                        foam_threshold=args.symptom_foam_threshold,
                        red_eye_threshold=args.symptom_red_eye_threshold,
                        motion_threshold=args.symptom_motion_threshold,
                    )

                    label = "unknown"
                    if args.label_mode == "interactive":
                        preview = make_overlay(crop, symptoms, target.confidence)
                        label = interactive_label(preview)
                        if label == "QUIT":
                            raise KeyboardInterrupt
                        if label is None:
                            continue

                    sample_name = f"sample_{next_sample_id:06d}.jpg"
                    image_path = args.images_dir / sample_name
                    cv2.imwrite(str(image_path), crop)

                    row = {
                        "sample_id": str(next_sample_id),
                        "timestamp": datetime.now().isoformat(timespec="seconds"),
                        "image_path": os.path.relpath(image_path, args.csv.parent),
                        "label": label,
                        "dog_confidence": f"{target.confidence:.5f}",
                        "foam_ratio": f"{features.foam_ratio:.6f}",
                        "red_eye_ratio": f"{features.red_eye_ratio:.6f}",
                        "motion_ratio": f"{features.motion_ratio:.6f}",
                        "edge_ratio": f"{features.edge_ratio:.6f}",
                        "mean_saturation": f"{features.mean_saturation:.6f}",
                        "symptoms": ";".join(symptoms),
                        "bbox_x1": str(x1),
                        "bbox_y1": str(y1),
                        "bbox_x2": str(x2),
                        "bbox_y2": str(y2),
                        "source": args.source,
                    }
                    save_sample_row(args.csv, row)
                    print(f"Saved sample #{next_sample_id} label={label} symptoms={row['symptoms'] or 'none'}")

                    next_sample_id += 1
                    new_samples += 1
                    last_save_at = time.time()

                    if args.max_samples > 0 and new_samples >= args.max_samples:
                        print(f"Reached max samples: {args.max_samples}")
                        raise KeyboardInterrupt

            now = time.time()
            if now - last_stats_at >= max(0.5, args.stats_interval):
                print(
                    "Stats | "
                    f"frames={frame_idx} processed={processed_frames} "
                    f"dog_frames={detection_frames} saved={new_samples}"
                )
                last_stats_at = now
                if last_detection_at == 0.0 and (frame_idx > 120) and not no_detection_hint_printed:
                    print(
                        "No dogs detected yet. Try: "
                        "--rtsp-transport udp --conf 0.15 --frame-skip 1"
                    )
                    no_detection_hint_printed = True

            cv2.imshow("Dataset Collection", annotated)
            key = cv2.waitKey(1) & 0xFF
            if key in (ord("q"), 27):
                break

            prev_gray = gray
    except KeyboardInterrupt:
        print("\nStopping dataset collection...")
    finally:
        if cap is not None:
            cap.release()
        cv2.destroyAllWindows()

    print(f"New samples collected: {new_samples}")
    print(f"Dataset CSV: {args.csv}")
    return 0


if __name__ == "__main__":
    sys.exit(main())
