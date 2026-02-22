#!/usr/bin/env python3
"""Detect dogs from latest frame and optionally auto-follow with high-precision PTZ pulses."""

from __future__ import annotations

import argparse
import json
import os
import signal
import sys
import time
from dataclasses import dataclass
from datetime import datetime, timezone
from pathlib import Path
from typing import Any, Optional

import numpy as np
import requests
from PIL import Image
from ultralytics import YOLO


DOG_CLASS_ID = 16  # COCO "dog"
_running = True


def _on_signal(_signum: int, _frame: Any) -> None:
    global _running
    _running = False


def utc_now_iso() -> str:
    return datetime.now(timezone.utc).isoformat()


def write_json_atomic(path: Path, payload: dict[str, Any]) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    tmp = path.with_name(f"{path.name}.{os.getpid()}.{time.time_ns()}.tmp")
    try:
        tmp.write_text(json.dumps(payload, ensure_ascii=True), encoding="utf-8")
        tmp.replace(path)
    finally:
        if tmp.exists():
            tmp.unlink(missing_ok=True)


def make_base_payload(camera_id: int, status: str, frame_width: int, frame_height: int) -> dict[str, Any]:
    return {
        "camera_id": camera_id,
        "timestamp": utc_now_iso(),
        "status": status,
        "dog_count": 0,
        "frame_width": frame_width,
        "frame_height": frame_height,
        "ptz_action": None,
        "follow_dx": 0.0,
        "follow_dy": 0.0,
        "follow_pred_dx": 0.0,
        "follow_pred_dy": 0.0,
        "follow_error": 0.0,
        "ptz_pulse": 0.0,
        "ill_count": 0,
        "healthy_count": 0,
        "unknown_health_count": 0,
        "health_status": "unknown",
        "ill_report_sent": False,
        "detections": [],
    }


def clamp(value: float, minimum: float, maximum: float) -> float:
    return max(minimum, min(maximum, value))


def bbox_area(bbox: dict[str, Any]) -> float:
    x1 = float(bbox.get("x1", 0.0))
    y1 = float(bbox.get("y1", 0.0))
    x2 = float(bbox.get("x2", 0.0))
    y2 = float(bbox.get("y2", 0.0))
    return max(0.0, x2 - x1) * max(0.0, y2 - y1)


def bbox_iou(bbox_a: Optional[dict[str, Any]], bbox_b: Optional[dict[str, Any]]) -> float:
    if not bbox_a or not bbox_b:
        return 0.0

    ax1 = float(bbox_a.get("x1", 0.0))
    ay1 = float(bbox_a.get("y1", 0.0))
    ax2 = float(bbox_a.get("x2", 0.0))
    ay2 = float(bbox_a.get("y2", 0.0))
    bx1 = float(bbox_b.get("x1", 0.0))
    by1 = float(bbox_b.get("y1", 0.0))
    bx2 = float(bbox_b.get("x2", 0.0))
    by2 = float(bbox_b.get("y2", 0.0))

    inter_x1 = max(ax1, bx1)
    inter_y1 = max(ay1, by1)
    inter_x2 = min(ax2, bx2)
    inter_y2 = min(ay2, by2)
    inter_w = max(0.0, inter_x2 - inter_x1)
    inter_h = max(0.0, inter_y2 - inter_y1)
    inter_area = inter_w * inter_h
    if inter_area <= 0:
        return 0.0

    union = bbox_area(bbox_a) + bbox_area(bbox_b) - inter_area
    if union <= 0:
        return 0.0
    return inter_area / union


def choose_primary_detection(
    detections: list[dict[str, Any]],
    previous_bbox: Optional[dict[str, Any]],
    track_iou_boost: float,
) -> Optional[dict[str, Any]]:
    if not detections:
        return None

    best: Optional[dict[str, Any]] = None
    best_score = -1.0
    for detection in detections:
        bbox = detection.get("bbox", {})
        conf = max(0.05, float(detection.get("confidence", 0.0)))
        score = bbox_area(bbox) * conf
        if previous_bbox is not None:
            score *= 1.0 + (track_iou_boost * bbox_iou(previous_bbox, bbox))
        if score > best_score:
            best = detection
            best_score = score
    return best


def compute_offsets(primary: dict[str, Any], frame_width: int, frame_height: int) -> tuple[float, float]:
    bbox = primary.get("bbox", {})
    x1 = float(bbox.get("x1", 0.0))
    y1 = float(bbox.get("y1", 0.0))
    x2 = float(bbox.get("x2", 0.0))
    y2 = float(bbox.get("y2", 0.0))
    center_x = (x1 + x2) / 2.0
    center_y = (y1 + y2) / 2.0
    half_w = max(1.0, frame_width / 2.0)
    half_h = max(1.0, frame_height / 2.0)
    dx = (center_x - half_w) / half_w  # right positive
    dy = (center_y - half_h) / half_h  # down positive
    return dx, dy


def choose_action(dx: float, dy: float, deadzone_x: float, deadzone_y: float, axis_bias: float) -> str:
    if abs(dx) <= deadzone_x and abs(dy) <= deadzone_y:
        return "ptz_stop"

    if abs(dx) >= abs(dy) * axis_bias:
        return "ptz_right" if dx > 0 else "ptz_left"
    return "ptz_down" if dy > 0 else "ptz_up"


def action_axis_error(action: str, dx: float, dy: float) -> float:
    if action in ("ptz_left", "ptz_right"):
        return abs(dx)
    if action in ("ptz_up", "ptz_down"):
        return abs(dy)
    return max(abs(dx), abs(dy))


def action_deadzone(action: str, deadzone_x: float, deadzone_y: float) -> float:
    if action in ("ptz_left", "ptz_right"):
        return deadzone_x
    if action in ("ptz_up", "ptz_down"):
        return deadzone_y
    return max(deadzone_x, deadzone_y)


def compute_dynamic_pulse(
    action: str,
    error: float,
    deadzone_x: float,
    deadzone_y: float,
    min_pulse_seconds: float,
    max_pulse_seconds: float,
    pulse_curve: float,
) -> float:
    if action == "ptz_stop":
        return 0.0
    dz = action_deadzone(action, deadzone_x, deadzone_y)
    span = max(1e-6, 1.0 - dz)
    normalized = clamp((error - dz) / span, 0.0, 1.0)
    scaled = normalized**pulse_curve
    return min_pulse_seconds + ((max_pulse_seconds - min_pulse_seconds) * scaled)


def compute_dynamic_refresh(
    action: str,
    error: float,
    deadzone_x: float,
    deadzone_y: float,
    min_refresh_seconds: float,
    max_refresh_seconds: float,
    refresh_curve: float,
) -> float:
    if action == "ptz_stop":
        return max_refresh_seconds
    dz = action_deadzone(action, deadzone_x, deadzone_y)
    span = max(1e-6, 1.0 - dz)
    normalized = clamp((error - dz) / span, 0.0, 1.0)
    scaled = normalized**refresh_curve
    return max_refresh_seconds - ((max_refresh_seconds - min_refresh_seconds) * scaled)


def sanitize_health_label(label: str) -> str:
    normalized = label.strip().lower()
    if normalized in ("healthy", "ok", "normal"):
        return "healthy"
    if normalized in ("ill", "sick", "contagious", "infected", "disease"):
        return "ill"
    return "unknown"


def load_frame_rgb(frame_path: Path) -> Optional[np.ndarray]:
    try:
        with Image.open(frame_path) as image:
            rgb = image.convert("RGB")
            return np.asarray(rgb, dtype=np.uint8)
    except Exception:
        return None


def crop_from_bbox(frame_rgb: np.ndarray, bbox: dict[str, Any]) -> Optional[np.ndarray]:
    if frame_rgb.ndim != 3 or frame_rgb.shape[2] != 3:
        return None
    frame_h, frame_w = frame_rgb.shape[:2]
    x1 = int(clamp(float(bbox.get("x1", 0.0)), 0.0, float(max(0, frame_w - 1))))
    y1 = int(clamp(float(bbox.get("y1", 0.0)), 0.0, float(max(0, frame_h - 1))))
    x2 = int(clamp(float(bbox.get("x2", 0.0)), 0.0, float(frame_w)))
    y2 = int(clamp(float(bbox.get("y2", 0.0)), 0.0, float(frame_h)))
    if x2 <= x1 or y2 <= y1:
        return None
    crop = frame_rgb[y1:y2, x1:x2]
    if crop.size == 0:
        return None
    return crop


def average_hash(crop_rgb: np.ndarray, hash_size: int = 8) -> str:
    if crop_rgb.size == 0:
        return ""
    image = Image.fromarray(crop_rgb).convert("L").resize((hash_size, hash_size), Image.BILINEAR)
    pixels = np.asarray(image, dtype=np.float32)
    threshold = float(pixels.mean())
    bits = (pixels > threshold).astype(np.uint8).flatten()
    value = 0
    for bit in bits:
        value = (value << 1) | int(bit)
    width = (hash_size * hash_size) // 4
    return f"{value:0{width}x}"


class KNNHealthClassifier:
    def __init__(
        self,
        model_path: str,
        k_override: int,
        min_crop_size: int,
        default_label: str = "unknown",
        verbose: bool = False,
    ) -> None:
        self.model_path = model_path.strip()
        self.k_override = k_override
        self.min_crop_size = min_crop_size
        self.default_label = sanitize_health_label(default_label)
        self.verbose = verbose

        self.enabled = False
        self.image_size = 64
        self.k = max(1, k_override) if k_override > 0 else 5
        self.class_names: list[str] = []
        self.x_train = np.zeros((0, 1), dtype=np.float32)
        self.y_train = np.zeros((0,), dtype=np.int64)
        self.mean = np.zeros((1, 1), dtype=np.float32)
        self.std = np.ones((1, 1), dtype=np.float32)

        if self.model_path == "":
            return

        try:
            path = Path(self.model_path).resolve()
            if not path.is_file():
                if self.verbose:
                    print(f"[health] model not found: {path}")
                return

            model_data = np.load(path, allow_pickle=True)
            self.x_train = np.asarray(model_data["x_train"], dtype=np.float32)
            self.y_train = np.asarray(model_data["y_train"], dtype=np.int64)
            self.class_names = [sanitize_health_label(str(name)) for name in model_data["class_names"].tolist()]

            model_k = int(np.asarray(model_data.get("k", np.asarray([5], dtype=np.int64))).reshape(-1)[0])
            self.k = max(1, self.k_override if self.k_override > 0 else model_k)

            model_image_size = int(
                np.asarray(model_data.get("image_size", np.asarray([64], dtype=np.int64))).reshape(-1)[0]
            )
            self.image_size = max(16, model_image_size)

            feature_count = self.image_size * self.image_size
            self.mean = np.asarray(model_data.get("mean", np.zeros((1, feature_count), dtype=np.float32)), dtype=np.float32)
            self.std = np.asarray(model_data.get("std", np.ones((1, feature_count), dtype=np.float32)), dtype=np.float32)
            self.std = np.where(self.std < 1e-6, 1.0, self.std)

            if self.x_train.ndim != 2 or self.y_train.ndim != 1:
                raise ValueError("Invalid model array dimensions")
            if len(self.x_train) == 0 or len(self.class_names) == 0:
                raise ValueError("Model has no training samples/classes")
            if self.mean.shape[-1] != self.x_train.shape[1] or self.std.shape[-1] != self.x_train.shape[1]:
                raise ValueError("Mean/std feature size mismatch")

            self.enabled = True
            if self.verbose:
                print(
                    f"[health] loaded model samples={len(self.x_train)} classes={self.class_names} "
                    f"image_size={self.image_size} k={self.k}"
                )
        except Exception as exc:
            self.enabled = False
            if self.verbose:
                print(f"[health] failed to load model '{self.model_path}': {exc}")

    def classify(self, frame_rgb: Optional[np.ndarray], bbox: dict[str, Any]) -> tuple[str, float, str]:
        if frame_rgb is None:
            return self.default_label, 0.0, ""

        crop = crop_from_bbox(frame_rgb, bbox)
        if crop is None:
            return self.default_label, 0.0, ""

        appearance = average_hash(crop)
        if min(crop.shape[0], crop.shape[1]) < self.min_crop_size:
            return self.default_label, 0.0, appearance
        if not self.enabled:
            return self.default_label, 0.0, appearance

        gray = Image.fromarray(crop).convert("L").resize((self.image_size, self.image_size), Image.BILINEAR)
        vector = np.asarray(gray, dtype=np.float32).reshape(1, -1) / 255.0
        normalized = (vector - self.mean) / self.std

        k = max(1, min(self.k, len(self.x_train)))
        distances = ((self.x_train - normalized) ** 2).sum(axis=1)
        neighbor_idx = np.argpartition(distances, kth=k - 1)[:k]
        neighbor_labels = self.y_train[neighbor_idx]
        counts = np.bincount(neighbor_labels, minlength=len(self.class_names))
        class_idx = int(np.argmax(counts))

        confidence = float(counts[class_idx] / k) if k > 0 else 0.0
        label = self.class_names[class_idx] if 0 <= class_idx < len(self.class_names) else self.default_label
        return sanitize_health_label(label), confidence, appearance


class IllDetectionReporter:
    def __init__(
        self,
        report_url: str,
        http_timeout: float,
        local_cooldown_seconds: float,
        remote_report_cooldown_seconds: int,
        remote_alert_cooldown_seconds: int,
        report_hash_max_distance: int,
        min_ill_confidence: float,
        verbose: bool = False,
    ) -> None:
        self.report_url = report_url.strip()
        self.http_timeout = http_timeout
        self.local_cooldown_seconds = local_cooldown_seconds
        self.remote_report_cooldown_seconds = remote_report_cooldown_seconds
        self.remote_alert_cooldown_seconds = remote_alert_cooldown_seconds
        self.report_hash_max_distance = report_hash_max_distance
        self.min_ill_confidence = min_ill_confidence
        self.verbose = verbose
        self.session = requests.Session()
        self.last_sent_at = 0.0
        self.enabled = self.report_url != ""
        self.last_reason = "not_attempted"

    def maybe_report(
        self,
        camera_id: int,
        ill_detection: Optional[dict[str, Any]],
    ) -> bool:
        if not self.enabled or ill_detection is None:
            self.last_reason = "disabled_or_no_ill"
            return False

        health_confidence = float(ill_detection.get("health_confidence", 0.0))
        if health_confidence < self.min_ill_confidence:
            self.last_reason = "below_min_ill_confidence"
            return False

        now = time.monotonic()
        if self.local_cooldown_seconds > 0 and (now - self.last_sent_at) < self.local_cooldown_seconds:
            self.last_reason = "local_cooldown"
            return False

        payload = {
            "camera_id": camera_id,
            "health_condition": "ill",
            "severity": "serious",
            "behavior_type": "unknown",
            "detected_object": "dog",
            "confidence": float(ill_detection.get("confidence", 0.0)),
            "bounding_box": ill_detection.get("bbox", {}),
            "health_symptoms": [],
            "metadata": {
                "source": "python_knn",
                "health_label": "ill",
                "health_confidence": health_confidence,
                "appearance_hash": ill_detection.get("appearance_hash", ""),
                "bbox": ill_detection.get("bbox", {}),
            },
            "description": "Dog health classifier predicted ill",
            "report_cooldown_seconds": self.remote_report_cooldown_seconds,
            "alert_cooldown_seconds": self.remote_alert_cooldown_seconds,
            "report_hash_max_distance": self.report_hash_max_distance,
        }

        try:
            response = self.session.post(self.report_url, json=payload, timeout=self.http_timeout)
            if not response.ok:
                self.last_reason = f"http_status_{response.status_code}"
                if self.verbose:
                    print(f"[health-report] status={response.status_code} body={response.text[:200]}")
                return False

            try:
                data = response.json()
            except ValueError:
                self.last_reason = "invalid_json_response"
                if self.verbose:
                    print(f"[health-report] non-json body={response.text[:200]}")
                return False

            if self.verbose:
                print(
                    "[health-report] "
                    f"success={bool(data.get('success', False))} "
                    f"alertCreated={bool(data.get('alertCreated', False))} "
                    f"duplicateSuppressed={bool(data.get('duplicateSuppressed', False))}"
                )

            success = bool(data.get("success", False))
            if success:
                self.last_sent_at = now
                if bool(data.get("duplicateSuppressed", False)):
                    self.last_reason = "duplicate_suppressed"
                elif bool(data.get("alertCreated", False)):
                    self.last_reason = "alert_created"
                else:
                    self.last_reason = "accepted_no_alert"
            else:
                self.last_reason = "api_success_false"

            return success
        except Exception as exc:  # pragma: no cover
            self.last_reason = "request_exception"
            if self.verbose:
                print(f"[health-report] error={exc}")
            return False


class PtzClient:
    """PTZ client using Symfony endpoint /admin/stations/cameras/{id}/control."""

    def __init__(self, url: str, http_timeout: float, verbose: bool = False) -> None:
        self.url = url
        self.http_timeout = http_timeout
        self.verbose = verbose
        self.session = requests.Session()

    def _send_once(self, action: str) -> bool:
        payload = {"action": action, "timeout": 1}
        try:
            response = self.session.post(self.url, json=payload, timeout=self.http_timeout)
            if not response.ok:
                if self.verbose:
                    print(f"[ptz] action={action} status={response.status_code} body={response.text[:180]}")
                return False
            data = response.json()
            ok = bool(data.get("success", False))
            if self.verbose:
                print(f"[ptz] action={action} success={ok} message={data.get('message', '')}")
            return ok
        except Exception as exc:  # pragma: no cover
            if self.verbose:
                print(f"[ptz] action={action} error={exc}")
            return False

    def pulse_move(self, action: str, pulse_seconds: float = 0.0) -> bool:
        if action == "ptz_stop":
            stop_ok = self._send_once("ptz_stop")
            if not stop_ok:
                # One fast retry improves stop reliability on flaky RTSP/PTZ setups.
                time.sleep(0.03)
                stop_ok = self._send_once("ptz_stop")
            return stop_ok
        move_ok = self._send_once(action)
        time.sleep(max(0.0, pulse_seconds))
        stop_ok = self._send_once("ptz_stop")
        return move_ok and stop_ok


@dataclass
class FollowState:
    enabled: bool
    last_action: str = "ptz_stop"
    last_command_at: float = 0.0
    last_seen_at: float = 0.0
    last_measure_at: float = 0.0
    smooth_dx: float = 0.0
    smooth_dy: float = 0.0
    velocity_dx: float = 0.0
    velocity_dy: float = 0.0
    pred_dx: float = 0.0
    pred_dy: float = 0.0
    track_bbox: Optional[dict[str, Any]] = None
    candidate_action: str = "ptz_stop"
    candidate_count: int = 0


def run(args: argparse.Namespace) -> int:
    output_path = Path(args.output_json).resolve()
    frame_path = Path(args.frame_path).resolve()

    model = YOLO(args.model)
    ptz = PtzClient(args.ptz_url, args.ptz_http_timeout, args.verbose_ptz) if args.follow else None
    follow = FollowState(enabled=args.follow)
    health_classifier = KNNHealthClassifier(
        model_path=args.health_model,
        k_override=args.health_k,
        min_crop_size=args.health_min_crop_size,
        default_label=args.health_default_label,
        verbose=args.verbose_health,
    )
    reporter = IllDetectionReporter(
        report_url=args.report_url,
        http_timeout=args.report_http_timeout,
        local_cooldown_seconds=args.report_cooldown_seconds,
        remote_report_cooldown_seconds=args.report_duplicate_cooldown_seconds,
        remote_alert_cooldown_seconds=args.report_alert_cooldown_seconds,
        report_hash_max_distance=args.report_hash_max_distance,
        min_ill_confidence=args.report_min_ill_confidence,
        verbose=args.verbose_report,
    )

    last_mtime_ns = -1
    last_payload = make_base_payload(args.camera_id, "booting", 0, 0)

    while _running:
        if not frame_path.is_file():
            payload = make_base_payload(args.camera_id, "no_frame", 0, 0)
            payload["ptz_action"] = follow.last_action
            payload["follow_dx"] = round(follow.smooth_dx, 4)
            payload["follow_dy"] = round(follow.smooth_dy, 4)
            payload["follow_pred_dx"] = round(follow.pred_dx, 4)
            payload["follow_pred_dy"] = round(follow.pred_dy, 4)
            write_json_atomic(output_path, payload)
            last_payload = payload
            time.sleep(args.interval)
            continue

        try:
            stat = frame_path.stat()
        except OSError:
            time.sleep(args.interval)
            continue

        if stat.st_mtime_ns == last_mtime_ns:
            payload = dict(last_payload)
            payload["timestamp"] = utc_now_iso()
            payload["status"] = "online"
            payload["ptz_action"] = follow.last_action
            payload["follow_dx"] = round(follow.smooth_dx, 4)
            payload["follow_dy"] = round(follow.smooth_dy, 4)
            payload["follow_pred_dx"] = round(follow.pred_dx, 4)
            payload["follow_pred_dy"] = round(follow.pred_dy, 4)
            write_json_atomic(output_path, payload)
            time.sleep(args.interval)
            continue

        last_mtime_ns = stat.st_mtime_ns

        try:
            results = model.predict(
                source=str(frame_path),
                conf=args.conf,
                imgsz=args.imgsz,
                classes=[DOG_CLASS_ID],
                verbose=False,
            )
            result = results[0] if results else None
            orig_h, orig_w = (0, 0)
            detections: list[dict[str, Any]] = []
            if result is not None:
                if hasattr(result, "orig_shape") and result.orig_shape is not None:
                    orig_h = int(result.orig_shape[0])
                    orig_w = int(result.orig_shape[1])

                if result.boxes is not None:
                    for box in result.boxes:
                        xyxy = box.xyxy[0].tolist()
                        detections.append(
                            {
                                "bbox": {
                                    "x1": int(xyxy[0]),
                                    "y1": int(xyxy[1]),
                                    "x2": int(xyxy[2]),
                                    "y2": int(xyxy[3]),
                                },
                                "confidence": float(box.conf[0]),
                                "class_name": "dog",
                                "health_label": "unknown",
                            }
                        )

            frame_rgb: Optional[np.ndarray] = None
            if detections and (health_classifier.enabled or reporter.enabled or args.health_model.strip() != ""):
                frame_rgb = load_frame_rgb(frame_path)

            ill_detections: list[dict[str, Any]] = []
            healthy_count = 0
            unknown_count = 0
            for detection in detections:
                label, label_confidence, appearance_hash = health_classifier.classify(frame_rgb, detection.get("bbox", {}))
                detection["health_label"] = label
                detection["health_confidence"] = round(label_confidence, 4)
                if appearance_hash != "":
                    detection["appearance_hash"] = appearance_hash

                if label == "ill":
                    ill_detections.append(detection)
                elif label == "healthy":
                    healthy_count += 1
                else:
                    unknown_count += 1

            report_sent = False
            if reporter.enabled and ill_detections:
                target_ill = max(
                    ill_detections,
                    key=lambda d: (float(d.get("health_confidence", 0.0)), float(d.get("confidence", 0.0))),
                )
                report_sent = reporter.maybe_report(args.camera_id, target_ill)

            now = time.monotonic()
            action = "ptz_stop"
            follow_error = 0.0
            pulse_seconds = 0.0
            refresh_interval = args.follow_refresh

            follow_candidates = detections
            if args.min_box_area_ratio > 0 and orig_w > 0 and orig_h > 0:
                min_area_pixels = float(orig_w * orig_h) * args.min_box_area_ratio
                follow_candidates = [d for d in detections if bbox_area(d.get("bbox", {})) >= min_area_pixels]

            primary = choose_primary_detection(follow_candidates, follow.track_bbox, args.track_iou_boost)
            if follow.enabled and primary is not None and orig_w > 0 and orig_h > 0:
                raw_dx, raw_dy = compute_offsets(primary, orig_w, orig_h)

                prev_smooth_dx = follow.smooth_dx
                prev_smooth_dy = follow.smooth_dy
                follow.smooth_dx = (args.smoothing_alpha * raw_dx) + ((1.0 - args.smoothing_alpha) * follow.smooth_dx)
                follow.smooth_dy = (args.smoothing_alpha * raw_dy) + ((1.0 - args.smoothing_alpha) * follow.smooth_dy)

                if follow.last_measure_at > 0:
                    dt = max(1e-3, now - follow.last_measure_at)
                    inst_vx = (follow.smooth_dx - prev_smooth_dx) / dt
                    inst_vy = (follow.smooth_dy - prev_smooth_dy) / dt
                    follow.velocity_dx = (args.velocity_alpha * inst_vx) + ((1.0 - args.velocity_alpha) * follow.velocity_dx)
                    follow.velocity_dy = (args.velocity_alpha * inst_vy) + ((1.0 - args.velocity_alpha) * follow.velocity_dy)
                follow.last_measure_at = now

                follow.pred_dx = clamp(follow.smooth_dx + (follow.velocity_dx * args.lead_seconds), -1.0, 1.0)
                follow.pred_dy = clamp(follow.smooth_dy + (follow.velocity_dy * args.lead_seconds), -1.0, 1.0)

                candidate_action = choose_action(
                    follow.pred_dx,
                    follow.pred_dy,
                    args.deadzone_x,
                    args.deadzone_y,
                    args.axis_bias,
                )
                if candidate_action == follow.candidate_action:
                    follow.candidate_count += 1
                else:
                    follow.candidate_action = candidate_action
                    follow.candidate_count = 1

                candidate_error = action_axis_error(candidate_action, follow.pred_dx, follow.pred_dy)
                if candidate_action == "ptz_stop":
                    action = "ptz_stop"
                elif candidate_error >= args.force_move_error:
                    action = candidate_action
                elif follow.candidate_count >= args.action_confirm_frames:
                    action = candidate_action
                else:
                    action = "ptz_stop"

                follow.last_seen_at = now
                follow.track_bbox = dict(primary.get("bbox", {}))
            elif follow.enabled:
                follow.track_bbox = None
                follow.candidate_action = "ptz_stop"
                follow.candidate_count = 0

                # Keep prior motion briefly, but decay it quickly to avoid overshoot.
                if (now - follow.last_seen_at) <= args.lost_grace and follow.last_action != "ptz_stop":
                    follow.smooth_dx *= args.lost_decay
                    follow.smooth_dy *= args.lost_decay
                    follow.velocity_dx *= args.lost_decay
                    follow.velocity_dy *= args.lost_decay
                    follow.pred_dx = follow.smooth_dx
                    follow.pred_dy = follow.smooth_dy
                    action = follow.last_action
                else:
                    follow.smooth_dx = 0.0
                    follow.smooth_dy = 0.0
                    follow.velocity_dx = 0.0
                    follow.velocity_dy = 0.0
                    follow.pred_dx = 0.0
                    follow.pred_dy = 0.0
                    action = "ptz_stop"

            if follow.enabled:
                follow_error = action_axis_error(action, follow.pred_dx, follow.pred_dy)
                pulse_seconds = compute_dynamic_pulse(
                    action,
                    follow_error,
                    args.deadzone_x,
                    args.deadzone_y,
                    args.min_pulse_seconds,
                    args.pulse_seconds,
                    args.pulse_curve,
                )
                refresh_interval = compute_dynamic_refresh(
                    action,
                    follow_error,
                    args.deadzone_x,
                    args.deadzone_y,
                    args.follow_refresh_min,
                    args.follow_refresh,
                    args.refresh_curve,
                )

            if follow.enabled and ptz is not None:
                elapsed = now - follow.last_command_at
                should_send = False
                if action != follow.last_action:
                    should_send = True
                elif action != "ptz_stop" and elapsed >= refresh_interval:
                    should_send = True
                elif action == "ptz_stop" and args.stop_refresh > 0 and elapsed >= args.stop_refresh:
                    should_send = True

                if should_send:
                    ptz.pulse_move(action, pulse_seconds)
                    follow.last_action = action
                    follow.last_command_at = time.monotonic()

            payload = make_base_payload(args.camera_id, "online", orig_w, orig_h)
            payload["dog_count"] = len(detections)
            payload["detections"] = detections
            payload["ptz_action"] = follow.last_action
            payload["follow_dx"] = round(follow.smooth_dx, 4)
            payload["follow_dy"] = round(follow.smooth_dy, 4)
            payload["follow_pred_dx"] = round(follow.pred_dx, 4)
            payload["follow_pred_dy"] = round(follow.pred_dy, 4)
            payload["follow_error"] = round(follow_error, 4)
            payload["ptz_pulse"] = round(pulse_seconds, 4)
            payload["ill_count"] = len(ill_detections)
            payload["healthy_count"] = healthy_count
            payload["unknown_health_count"] = unknown_count
            payload["health_status"] = "ill" if len(ill_detections) > 0 else ("healthy" if healthy_count > 0 else "unknown")
            payload["ill_report_sent"] = report_sent
            if ill_detections:
                payload["ill_report_reason"] = reporter.last_reason if reporter.enabled else "reporter_disabled"
            else:
                payload["ill_report_reason"] = "no_ill_detection"
            write_json_atomic(output_path, payload)
            last_payload = payload
        except Exception as exc:  # pragma: no cover - runtime diagnostics
            payload = make_base_payload(args.camera_id, "error", 0, 0)
            payload["error"] = str(exc)[:240]
            payload["ptz_action"] = follow.last_action
            write_json_atomic(output_path, payload)
            last_payload = payload

        time.sleep(args.interval)

    if follow.enabled and ptz is not None:
        ptz.pulse_move("ptz_stop")

    stopped = make_base_payload(args.camera_id, "stopped", 0, 0)
    stopped["ptz_action"] = "ptz_stop"
    write_json_atomic(output_path, stopped)
    return 0


def build_parser() -> argparse.ArgumentParser:
    parser = argparse.ArgumentParser(description="Dog detection loop for one camera frame file.")
    parser.add_argument("--camera-id", type=int, required=True)
    parser.add_argument("--frame-path", required=True, help="Path to latest frame image (JPEG).")
    parser.add_argument("--output-json", required=True, help="Output JSON path for live detections.")
    parser.add_argument("--model", required=True, help="YOLO model path.")
    parser.add_argument("--conf", type=float, default=0.25)
    parser.add_argument("--imgsz", type=int, default=640)
    parser.add_argument("--interval", type=float, default=0.08, help="Loop sleep interval in seconds.")
    parser.add_argument("--health-model", default="", help="KNN health model path (.npz).")
    parser.add_argument("--health-k", type=int, default=0, help="Override K used by health model (0 = model default).")
    parser.add_argument("--health-min-crop-size", type=int, default=24, help="Minimum dog crop size for classification.")
    parser.add_argument("--health-default-label", default="unknown", help="Fallback health label when model unavailable.")
    parser.add_argument("--verbose-health", action="store_true")
    parser.add_argument("--report-url", default="", help="POST ill detections to Symfony API endpoint.")
    parser.add_argument("--report-http-timeout", type=float, default=1.2, help="HTTP timeout for detection report.")
    parser.add_argument("--report-cooldown-seconds", type=float, default=8.0, help="Local cooldown between ill reports.")
    parser.add_argument(
        "--report-duplicate-cooldown-seconds",
        type=int,
        default=20,
        help="Remote duplicate suppression window passed to API.",
    )
    parser.add_argument(
        "--report-alert-cooldown-seconds",
        type=int,
        default=8,
        help="Remote alert cooldown window passed to API.",
    )
    parser.add_argument("--report-hash-max-distance", type=int, default=10)
    parser.add_argument("--report-min-ill-confidence", type=float, default=0.4)
    parser.add_argument("--verbose-report", action="store_true")

    parser.add_argument("--follow", action="store_true", help="Enable high-precision PTZ auto-follow.")
    parser.add_argument("--ptz-url", default="", help="Symfony PTZ endpoint URL.")
    parser.add_argument("--ptz-http-timeout", type=float, default=0.8, help="HTTP timeout for PTZ call.")
    parser.add_argument("--pulse-seconds", type=float, default=0.16, help="Maximum pulse duration before stop.")
    parser.add_argument("--min-pulse-seconds", type=float, default=0.045, help="Minimum pulse duration near center.")
    parser.add_argument("--pulse-curve", type=float, default=1.6, help="Higher makes micro-corrections finer.")
    parser.add_argument("--follow-refresh", type=float, default=0.35, help="Maximum refresh interval while moving.")
    parser.add_argument("--follow-refresh-min", type=float, default=0.16, help="Minimum refresh interval while moving.")
    parser.add_argument("--refresh-curve", type=float, default=1.2, help="Refresh scaling curve by target error.")
    parser.add_argument("--stop-refresh", type=float, default=0.0, help="Optional periodic stop refresh (0 disables).")
    parser.add_argument("--lost-grace", type=float, default=0.55, help="Keep last motion this long after target lost.")
    parser.add_argument("--lost-decay", type=float, default=0.86, help="Decay applied while target is temporarily lost.")
    parser.add_argument("--deadzone-x", type=float, default=0.14)
    parser.add_argument("--deadzone-y", type=float, default=0.12)
    parser.add_argument("--smoothing-alpha", type=float, default=0.55)
    parser.add_argument("--velocity-alpha", type=float, default=0.48, help="Smoothing for target velocity estimate.")
    parser.add_argument("--lead-seconds", type=float, default=0.12, help="Prediction lead to compensate latency.")
    parser.add_argument("--axis-bias", type=float, default=1.10, help="Higher prefers pan over tilt.")
    parser.add_argument("--track-iou-boost", type=float, default=2.2, help="Stabilize lock on the same dog.")
    parser.add_argument("--action-confirm-frames", type=int, default=2, help="Frames required before committing move.")
    parser.add_argument("--force-move-error", type=float, default=0.45, help="Bypass confirmation on large errors.")
    parser.add_argument(
        "--min-box-area-ratio",
        type=float,
        default=0.0015,
        help="Ignore very tiny detections for follow (ratio of frame area).",
    )
    parser.add_argument("--verbose-ptz", action="store_true")
    return parser


def main() -> int:
    signal.signal(signal.SIGINT, _on_signal)
    signal.signal(signal.SIGTERM, _on_signal)

    args = build_parser().parse_args()
    if args.camera_id <= 0:
        print("camera-id must be > 0", file=sys.stderr)
        return 2
    if args.interval <= 0:
        print("interval must be > 0", file=sys.stderr)
        return 2
    if not (0 < args.conf <= 1):
        print("conf must be in (0,1]", file=sys.stderr)
        return 2
    if args.imgsz < 160:
        print("imgsz must be >= 160", file=sys.stderr)
        return 2
    if args.health_k < 0:
        print("health-k must be >= 0", file=sys.stderr)
        return 2
    if args.health_min_crop_size < 8:
        print("health-min-crop-size must be >= 8", file=sys.stderr)
        return 2
    if args.report_http_timeout <= 0:
        print("report-http-timeout must be > 0", file=sys.stderr)
        return 2
    if args.report_cooldown_seconds < 0:
        print("report-cooldown-seconds must be >= 0", file=sys.stderr)
        return 2
    if args.report_duplicate_cooldown_seconds < 0:
        print("report-duplicate-cooldown-seconds must be >= 0", file=sys.stderr)
        return 2
    if args.report_alert_cooldown_seconds < 0:
        print("report-alert-cooldown-seconds must be >= 0", file=sys.stderr)
        return 2
    if args.report_hash_max_distance < 0:
        print("report-hash-max-distance must be >= 0", file=sys.stderr)
        return 2
    if not (0 <= args.report_min_ill_confidence <= 1):
        print("report-min-ill-confidence must be in [0,1]", file=sys.stderr)
        return 2
    if args.follow and args.ptz_url.strip() == "":
        print("--ptz-url is required when --follow is enabled", file=sys.stderr)
        return 2
    if args.pulse_seconds <= 0:
        print("pulse-seconds must be > 0", file=sys.stderr)
        return 2
    if args.min_pulse_seconds <= 0:
        print("min-pulse-seconds must be > 0", file=sys.stderr)
        return 2
    if args.min_pulse_seconds > args.pulse_seconds:
        print("min-pulse-seconds must be <= pulse-seconds", file=sys.stderr)
        return 2
    if args.pulse_curve <= 0:
        print("pulse-curve must be > 0", file=sys.stderr)
        return 2
    if args.follow_refresh <= 0:
        print("follow-refresh must be > 0", file=sys.stderr)
        return 2
    if args.follow_refresh_min <= 0:
        print("follow-refresh-min must be > 0", file=sys.stderr)
        return 2
    if args.follow_refresh_min > args.follow_refresh:
        print("follow-refresh-min must be <= follow-refresh", file=sys.stderr)
        return 2
    if args.refresh_curve <= 0:
        print("refresh-curve must be > 0", file=sys.stderr)
        return 2
    if args.stop_refresh < 0:
        print("stop-refresh must be >= 0", file=sys.stderr)
        return 2
    if args.ptz_http_timeout <= 0:
        print("ptz-http-timeout must be > 0", file=sys.stderr)
        return 2
    if not (0 <= args.deadzone_x <= 0.45 and 0 <= args.deadzone_y <= 0.45):
        print("deadzone-x and deadzone-y must be in [0,0.45]", file=sys.stderr)
        return 2
    if not (0 <= args.smoothing_alpha <= 1):
        print("smoothing-alpha must be in [0,1]", file=sys.stderr)
        return 2
    if not (0 <= args.velocity_alpha <= 1):
        print("velocity-alpha must be in [0,1]", file=sys.stderr)
        return 2
    if args.lead_seconds < 0:
        print("lead-seconds must be >= 0", file=sys.stderr)
        return 2
    if args.track_iou_boost < 0:
        print("track-iou-boost must be >= 0", file=sys.stderr)
        return 2
    if args.axis_bias < 0.5:
        print("axis-bias must be >= 0.5", file=sys.stderr)
        return 2
    if args.action_confirm_frames < 1:
        print("action-confirm-frames must be >= 1", file=sys.stderr)
        return 2
    if args.force_move_error < 0:
        print("force-move-error must be >= 0", file=sys.stderr)
        return 2
    if not (0 <= args.min_box_area_ratio < 0.5):
        print("min-box-area-ratio must be in [0,0.5)", file=sys.stderr)
        return 2
    if not (0 <= args.lost_decay <= 1):
        print("lost-decay must be in [0,1]", file=sys.stderr)
        return 2

    return run(args)


if __name__ == "__main__":
    raise SystemExit(main())
