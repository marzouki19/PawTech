#!/usr/bin/env python3
"""
Run dog detection + KNN health + PTZ follow for all cameras.

This script pulls camera info from the Symfony API and spawns one
ip_camera_dog_detector.py process per camera.
"""

from __future__ import annotations

import argparse
import json
import os
import signal
import subprocess
import sys
import time
import urllib.error
import urllib.request
from pathlib import Path
from typing import Any


DEFAULT_API_BASE = os.getenv("PAWTECH_ADMIN_URL", "http://127.0.0.1:8000")
DEFAULT_LIST_ENDPOINT = "/admin/cameras/api/list"


def fetch_camera_list(api_base: str, status: str | None, timeout: float) -> list[dict[str, Any]]:
    api_base = api_base.rstrip("/")
    endpoint = DEFAULT_LIST_ENDPOINT
    if status:
        url = f"{api_base}{endpoint}?status={status}"
    else:
        url = f"{api_base}{endpoint}"

    with urllib.request.urlopen(url, timeout=timeout) as response:
        payload = json.loads(response.read().decode("utf-8"))

    cameras = payload.get("cameras", [])
    if not isinstance(cameras, list):
        raise ValueError("Invalid response: 'cameras' is not a list.")
    return cameras


def build_detector_command(
    python_exec: str,
    detector_path: Path,
    camera: dict[str, Any],
    args: argparse.Namespace,
) -> list[str]:
    camera_id = camera.get("id")
    stream_url = camera.get("streamUrl")
    if not camera_id or not stream_url:
        raise ValueError(f"Missing camera id or streamUrl for camera entry: {camera}")

    cmd = [
        python_exec,
        str(detector_path),
        "--source",
        str(stream_url),
        "--camera-id",
        str(camera_id),
        "--health-knn-model",
        str(args.health_knn_model),
        "--conf",
        str(args.conf),
        "--iou",
        str(args.iou),
        "--imgsz",
        str(args.imgsz),
        "--device",
        str(args.device),
        "--frame-skip",
        str(args.frame_skip),
        "--rtsp-transport",
        str(args.rtsp_transport),
        "--reconnect-delay",
        str(args.reconnect_delay),
        "--live-json-interval",
        str(args.live_json_interval),
    ]

    if args.disable_health_classifier:
        cmd.append("--disable-health-classifier")
    if args.no_save:
        cmd.append("--no-save")
    else:
        save_dir = Path(args.save_dir) / f"camera_{camera_id}"
        cmd.extend(["--save-dir", str(save_dir)])
        cmd.extend(["--save-cooldown", str(args.save_cooldown)])
    if not args.display:
        cmd.append("--no-display")

    supports_ptz = bool(camera.get("supportsPtz"))
    ptz_url = camera.get("ptzControlUrl")
    if args.follow_dog and supports_ptz and ptz_url:
        cmd.extend(["--follow-dog", "--ptz-control-url", str(ptz_url)])
        cmd.extend(["--ptz-cooldown", str(args.ptz_cooldown)])
        cmd.extend(["--ptz-move-timeout", str(args.ptz_move_timeout)])
        cmd.extend(["--ptz-http-timeout", str(args.ptz_http_timeout)])
        cmd.extend(["--follow-x-threshold", str(args.follow_x_threshold)])
        cmd.extend(["--follow-y-threshold", str(args.follow_y_threshold)])
        cmd.extend(["--lost-stop-frames", str(args.lost_stop_frames)])

    return cmd


def terminate_processes(processes: list[subprocess.Popen]) -> None:
    for proc in processes:
        if proc.poll() is None:
            proc.terminate()
    deadline = time.time() + 5
    for proc in processes:
        while proc.poll() is None and time.time() < deadline:
            time.sleep(0.1)
    for proc in processes:
        if proc.poll() is None:
            proc.kill()


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description="Run dog detection + KNN health + PTZ follow for all cameras."
    )
    parser.add_argument(
        "--api-base",
        default=DEFAULT_API_BASE,
        help="Base URL of the Symfony admin app (default: http://127.0.0.1:8000).",
    )
    parser.add_argument(
        "--status",
        default="active",
        help="Filter cameras by status (default: active). Use empty string for all.",
    )
    parser.add_argument(
        "--api-timeout",
        type=float,
        default=5.0,
        help="Seconds before camera list request times out.",
    )
    parser.add_argument(
        "--display",
        action="store_true",
        help="Show OpenCV windows (default: headless for all cameras).",
    )
    parser.add_argument(
        "--follow-dog",
        action="store_true",
        help="Enable PTZ follow for cameras that support PTZ.",
    )
    parser.add_argument(
        "--health-knn-model",
        default=Path(__file__).resolve().parent / "models" / "dog_health_knn.joblib",
        type=Path,
        help="Path to trained KNN model.",
    )
    parser.add_argument("--conf", type=float, default=0.35)
    parser.add_argument("--iou", type=float, default=0.45)
    parser.add_argument("--imgsz", type=int, default=640)
    parser.add_argument("--device", default="cpu")
    parser.add_argument("--frame-skip", type=int, default=1)
    parser.add_argument("--rtsp-transport", choices=("tcp", "udp"), default="tcp")
    parser.add_argument("--reconnect-delay", type=float, default=2.0)
    parser.add_argument("--live-json-interval", type=float, default=0.25)
    parser.add_argument("--disable-health-classifier", action="store_true")
    parser.add_argument("--no-save", action="store_true")
    parser.add_argument(
        "--save-dir",
        default=Path(__file__).resolve().parent / "detections",
        type=Path,
    )
    parser.add_argument("--save-cooldown", type=float, default=1.0)
    parser.add_argument("--ptz-cooldown", type=float, default=0.8)
    parser.add_argument("--ptz-move-timeout", type=int, default=1)
    parser.add_argument("--ptz-http-timeout", type=float, default=3.0)
    parser.add_argument("--follow-x-threshold", type=float, default=0.18)
    parser.add_argument("--follow-y-threshold", type=float, default=0.20)
    parser.add_argument("--lost-stop-frames", type=int, default=12)
    return parser.parse_args()


def main() -> int:
    args = parse_args()
    status = args.status.strip() or None
    detector_path = Path(__file__).resolve().parent / "ip_camera_dog_detector.py"

    try:
        cameras = fetch_camera_list(args.api_base, status, args.api_timeout)
    except (urllib.error.URLError, ValueError) as exc:
        print(f"Failed to fetch camera list: {exc}", file=sys.stderr)
        print("Is the Symfony server running and reachable?", file=sys.stderr)
        return 1

    if not cameras:
        print("No cameras found for the requested status.")
        return 0

    python_exec = sys.executable
    processes: list[subprocess.Popen] = []
    errors = 0

    def handle_shutdown(_sig: int, _frame: Any) -> None:
        print("\nStopping all camera processes...")
        terminate_processes(processes)
        sys.exit(0)

    signal.signal(signal.SIGINT, handle_shutdown)
    signal.signal(signal.SIGTERM, handle_shutdown)

    for camera in cameras:
        try:
            cmd = build_detector_command(python_exec, detector_path, camera, args)
        except ValueError as exc:
            print(f"Skipping camera: {exc}", file=sys.stderr)
            errors += 1
            continue

        print(f"Starting camera {camera.get('id')}: {camera.get('name')}")
        processes.append(subprocess.Popen(cmd))
        time.sleep(0.2)

    if not processes:
        print("No camera processes started.")
        return 1

    try:
        while True:
            time.sleep(1.0)
            alive = [p for p in processes if p.poll() is None]
            if not alive:
                break
    except KeyboardInterrupt:
        print("\nStopping all camera processes...")
    finally:
        terminate_processes(processes)

    return 1 if errors else 0


if __name__ == "__main__":
    raise SystemExit(main())
