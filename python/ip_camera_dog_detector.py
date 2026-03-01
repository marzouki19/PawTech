#!/usr/bin/env python3
"""
Dog-only object detection from an IP camera stream.

Example:
python python/ip_camera_dog_detector.py \
  --source "rtsp://admin:admin@192.168.1.162:554/stream"
"""

from __future__ import annotations

import argparse
import json
import os
import sys
import time
from dataclasses import dataclass
from datetime import datetime
from pathlib import Path
from typing import Any, Optional

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

try:
    import requests
except ImportError:
    requests = None

try:
    import joblib
except ImportError:
    joblib = None


TARGET_CLASS = "dog"
WINDOW_TITLE = "IP Camera Dog Detector"
STATUS_FRAME_SHAPE = (720, 1280, 3)
DEFAULT_SAVE_DIR = Path(__file__).resolve().parent / "detections"
DEFAULT_HEALTH_MODEL_PATH = Path(__file__).resolve().parent / "models" / "dog_health_knn.joblib"
HEALTH_FEATURE_COLUMNS = [
    "foam_ratio",
    "red_eye_ratio",
    "motion_ratio",
    "edge_ratio",
    "mean_saturation",
]


def normalize_health_label(value: Any) -> str:
    text = str(value).strip().lower()
    if text in {"1", "1.0", "ill", "sick", "unhealthy", "diseased", "true"}:
        return "ill"
    if text in {"0", "0.0", "healthy", "normal", "false"}:
        return "healthy"
    return "ill" if "ill" in text or "sick" in text else "healthy"


@dataclass
class DogTarget:
    x1: int
    y1: int
    x2: int
    y2: int
    confidence: float

    def center(self) -> tuple[float, float]:
        return ((self.x1 + self.x2) / 2.0, (self.y1 + self.y2) / 2.0)

    def area(self) -> int:
        return max(0, self.x2 - self.x1) * max(0, self.y2 - self.y1)


class PTZFollower:
    def __init__(
        self,
        control_url: str,
        cooldown: float,
        x_threshold: float,
        y_threshold: float,
        lost_stop_frames: int,
        move_timeout: int,
        http_timeout: float,
        basic_user: Optional[str] = None,
        basic_pass: Optional[str] = None,
        bearer_token: Optional[str] = None,
    ) -> None:
        self.control_url = control_url
        self.cooldown = cooldown
        self.x_threshold = x_threshold
        self.y_threshold = y_threshold
        self.lost_stop_frames = max(1, lost_stop_frames)
        self.move_timeout = max(1, move_timeout)
        self.http_timeout = max(0.5, http_timeout)
        self.basic_user = basic_user
        self.basic_pass = basic_pass or ""
        self.bearer_token = bearer_token

        self.last_sent_at = 0.0
        self.last_sent_action = "ptz_stop"
        self.lost_frames = 0
        self.smoothed_x: Optional[float] = None
        self.smoothed_y: Optional[float] = None
        # Track consecutive same-direction movements to detect stuck camera
        self.consecutive_down_moves = 0
        self.consecutive_up_moves = 0
        self.max_consecutive_moves = 5  # After this many moves in same direction, stop and recalibrate

    def _send_action(self, action: str) -> bool:
        if requests is None:
            return False

        headers = {"Content-Type": "application/json"}
        if self.bearer_token:
            headers["Authorization"] = f"Bearer {self.bearer_token}"

        payload: dict[str, Any] = {"action": action}
        if action != "ptz_stop":
            payload["timeout"] = self.move_timeout

        auth = None
        if self.basic_user:
            auth = (self.basic_user, self.basic_pass)

        try:
            response = requests.post(
                self.control_url,
                json=payload,
                headers=headers,
                auth=auth,
                timeout=self.http_timeout,
            )
            if not response.ok:
                snippet = response.text.strip().replace("\n", " ")[:220]
                print(
                    f"PTZ HTTP {response.status_code} for {action}: "
                    f"{snippet if snippet else 'empty response body'}"
                )
                return False
            try:
                body = response.json()
            except ValueError:
                snippet = response.text.strip().replace("\n", " ")[:220]
                print(
                    f"PTZ response is not JSON for {action}. "
                    f"Body: {snippet if snippet else 'empty'}"
                )
                return False
            if isinstance(body, dict) and body.get("success") is False:
                message = str(body.get("message") or body.get("error") or "unknown error")
                status_code = body.get("status_code")
                detail = body.get("details")
                extra = f" (status_code={status_code})" if status_code is not None else ""
                print(f"PTZ command rejected by endpoint: {action} -> {message}{extra}")
                if detail is not None:
                    print(f"PTZ details: {str(detail)[:220]}")
                return False
            print(f"PTZ action: {action}")
            return True
        except Exception as exc:
            print(f"PTZ request error: {exc}")
            return False

    def maybe_send(self, action: str) -> bool:
        now = time.time()
        if now - self.last_sent_at < self.cooldown:
            return False
        if action == "ptz_stop" and self.last_sent_action == "ptz_stop":
            return False

        sent = self._send_action(action)
        if sent:
            self.last_sent_action = action
            self.last_sent_at = now
        return sent

    def update(self, target: Optional[DogTarget], frame_w: int, frame_h: int) -> str:
        # If no target, increment lost frames and stop if needed
        if target is None:
            self.lost_frames += 1
            # Reset consecutive move counters when target is lost
            self.consecutive_down_moves = 0
            self.consecutive_up_moves = 0
            if self.lost_frames >= self.lost_stop_frames:
                self.maybe_send("ptz_stop")
            return "ptz_stop"

        self.lost_frames = 0

        # Get the center of the detected dog
        cx, cy = target.center()
        
        # Initialize smoothed coordinates on first detection or after loss
        if self.smoothed_x is None or self.smoothed_y is None:
            self.smoothed_x = cx
            self.smoothed_y = cy
        else:
            # Use a moderate alpha for smooth tracking
            alpha = 0.35
            self.smoothed_x = alpha * cx + (1.0 - alpha) * self.smoothed_x
            self.smoothed_y = alpha * cy + (1.0 - alpha) * self.smoothed_y

        # Calculate center of frame
        center_x = frame_w / 2.0
        center_y = frame_h / 2.0
        
        # Calculate error from center (normalized to -1 to 1)
        # error_x > 0: target is right of center
        # error_y > 0: target is below center (in lower half of frame)
        error_x = (self.smoothed_x - center_x) / center_x
        error_y = (self.smoothed_y - center_y) / center_y

        # Calculate deadzone thresholds (in normalized coordinates)
        deadzone_x = self.x_threshold
        deadzone_y = self.y_threshold
        
        # Check if target is within deadzone on BOTH axes
        in_deadzone_x = abs(error_x) <= deadzone_x
        in_deadzone_y = abs(error_y) <= deadzone_y
        
        # If target is well-centered on both axes, stop
        if in_deadzone_x and in_deadzone_y:
            self.consecutive_down_moves = 0
            self.consecutive_up_moves = 0
            self.maybe_send("ptz_stop")
            return "ptz_stop"

        # Determine action - move in the direction of larger error
        action = "ptz_stop"
        
        # Use absolute error to determine which axis needs more movement
        if abs(error_x) > deadzone_x or abs(error_y) > deadzone_y:
            # Determine primary direction based on which error is larger
            if abs(error_x) >= abs(error_y):
                # Horizontal movement is primary
                if abs(error_x) > deadzone_x:
                    action = "ptz_right" if error_x > 0 else "ptz_left"
            else:
                # Vertical movement is primary
                if abs(error_y) > deadzone_y:
                    action = "ptz_down" if error_y > 0 else "ptz_up"

        # If no action selected (target slightly outside deadzone but not enough), stop
        if action == "ptz_stop":
            self.consecutive_down_moves = 0
            self.consecutive_up_moves = 0
            self.maybe_send("ptz_stop")
            return action

        # Track consecutive movements to detect stuck camera
        if action == "ptz_down":
            self.consecutive_down_moves += 1
            self.consecutive_up_moves = 0
            # After max consecutive moves, check if we should stop
            if self.consecutive_down_moves >= self.max_consecutive_moves:
                self.consecutive_down_moves = 0
                self.maybe_send("ptz_stop")
                return "ptz_stop"
        elif action == "ptz_up":
            self.consecutive_up_moves += 1
            self.consecutive_down_moves = 0
            if self.consecutive_up_moves >= self.max_consecutive_moves:
                self.consecutive_up_moves = 0
                self.maybe_send("ptz_stop")
                return "ptz_stop"
        else:
            # Reset counters for horizontal movements
            self.consecutive_down_moves = 0
            self.consecutive_up_moves = 0

        self.maybe_send(action)
        return action

    def stop(self) -> None:
        self._send_action("ptz_stop")
        self.last_sent_action = "ptz_stop"
        self.last_sent_at = time.time()
        # Reset all tracking state
        self.smoothed_x = None
        self.smoothed_y = None
        self.lost_frames = 0
        self.consecutive_down_moves = 0
        self.consecutive_up_moves = 0


@dataclass
class HealthFeatures:
    foam_ratio: float
    red_eye_ratio: float
    motion_ratio: float
    edge_ratio: float
    mean_saturation: float

    def vector(self) -> list[float]:
        return [
            self.foam_ratio,
            self.red_eye_ratio,
            self.motion_ratio,
            self.edge_ratio,
            self.mean_saturation,
        ]


@dataclass
class HealthPrediction:
    label: str
    confidence: float
    symptoms: list[str]


class DogHealthKNN:
    def __init__(self, model_path: Path) -> None:
        self.model_path = model_path
        self.model: Any = None
        self.feature_columns: list[str] = list(HEALTH_FEATURE_COLUMNS)
        self.label_order: list[str] = ["healthy", "ill"]
        self.enabled = False
        self.using_heuristic_fallback = True

    def load(self) -> bool:
        if joblib is None:
            print("KNN health model disabled: joblib is not installed.")
            return False

        if not self.model_path.exists():
            print(f"KNN health model not found: {self.model_path}")
            print("Using symptom-based fallback until you train the KNN model.")
            return False

        try:
            loaded = joblib.load(self.model_path)
            if isinstance(loaded, dict) and "model" in loaded:
                self.model = loaded["model"]
                feature_columns = loaded.get("feature_columns")
                if isinstance(feature_columns, list) and all(isinstance(item, str) for item in feature_columns):
                    self.feature_columns = feature_columns
                labels = loaded.get("labels")
                if isinstance(labels, list) and len(labels) >= 2 and all(isinstance(item, str) for item in labels):
                    self.label_order = [normalize_health_label(item) for item in labels]
            else:
                self.model = loaded

            if not hasattr(self.model, "predict"):
                raise TypeError("Loaded model does not implement predict().")

            self.enabled = True
            self.using_heuristic_fallback = False
            print(f"KNN health model loaded: {self.model_path}")
            return True
        except Exception as exc:
            print(f"Failed to load KNN health model ({self.model_path}): {exc}")
            print("Using symptom-based fallback.")
            return False

    def _fallback_predict(self, symptoms: list[str]) -> HealthPrediction:
        if symptoms:
            return HealthPrediction(label="ill", confidence=0.70, symptoms=symptoms)
        return HealthPrediction(label="healthy", confidence=0.75, symptoms=symptoms)

    def predict(self, features: HealthFeatures, symptoms: list[str]) -> HealthPrediction:
        if not self.enabled or self.model is None:
            return self._fallback_predict(symptoms)

        try:
            x = np.array([features.vector()], dtype=np.float32)
            raw_label = self.model.predict(x)[0]
            label = normalize_health_label(raw_label)

            confidence = 0.60
            if hasattr(self.model, "predict_proba"):
                probabilities = self.model.predict_proba(x)[0]
                classes = getattr(self.model, "classes_", None)
                if classes is not None and len(classes) == len(probabilities):
                    ill_probability = 0.0
                    for class_value, class_probability in zip(classes, probabilities):
                        if normalize_health_label(class_value) == "ill":
                            ill_probability = max(ill_probability, float(class_probability))
                    if ill_probability <= 0.0:
                        confidence = float(np.max(probabilities))
                    else:
                        confidence = ill_probability if label == "ill" else (1.0 - ill_probability)
                else:
                    confidence = float(np.max(probabilities))

            if symptoms and label == "healthy" and confidence < 0.60:
                label = "ill"
                confidence = 0.60

            confidence = max(0.50, min(1.0, confidence))
            return HealthPrediction(label=label, confidence=confidence, symptoms=symptoms)
        except Exception as exc:
            print(f"KNN prediction error: {exc}")
            return self._fallback_predict(symptoms)


def env_int_or_none(name: str) -> Optional[int]:
    raw = os.getenv(name)
    if raw is None:
        return None
    value = raw.strip()
    if value == "":
        return None
    try:
        parsed = int(value)
    except ValueError:
        return None
    return parsed if parsed > 0 else None


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(
        description="Read an IP camera stream and detect only dogs."
    )
    parser.add_argument(
        "--source",
        default=os.getenv("IP_CAMERA_URL"),
        help="IP camera stream URL (RTSP/HTTP). You can also set IP_CAMERA_URL.",
    )
    parser.add_argument(
        "--model",
        default="yolov8n.pt",
        help="YOLO model path or model name (default: yolov8n.pt).",
    )
    parser.add_argument(
        "--conf",
        type=float,
        default=0.35,
        help="Confidence threshold (default: 0.35).",
    )
    parser.add_argument(
        "--iou",
        type=float,
        default=0.45,
        help="IOU threshold for NMS (default: 0.45).",
    )
    parser.add_argument(
        "--imgsz",
        type=int,
        default=640,
        help="Inference image size (default: 640).",
    )
    parser.add_argument(
        "--device",
        default="cpu",
        help="Inference device: cpu, cuda:0, mps, etc. (default: cpu).",
    )
    parser.add_argument(
        "--frame-skip",
        type=int,
        default=1,
        help="Process 1 out of N frames to reduce CPU load (default: 1).",
    )
    parser.add_argument(
        "--reconnect-delay",
        type=float,
        default=2.0,
        help="Seconds to wait before reconnecting after stream failure (default: 2.0).",
    )
    parser.add_argument(
        "--no-display",
        action="store_true",
        help="Run without opening a display window (headless mode).",
    )
    parser.add_argument(
        "--rtsp-transport",
        choices=("tcp", "udp"),
        default="tcp",
        help="RTSP transport for OpenCV FFmpeg backend (default: tcp).",
    )
    parser.add_argument(
        "--save-dir",
        default=DEFAULT_SAVE_DIR,
        type=Path,
        help="Directory to save detection snapshots (default: python/detections).",
    )
    parser.add_argument(
        "--save-cooldown",
        type=float,
        default=1.0,
        help="Minimum seconds between saved detection frames (default: 1.0).",
    )
    parser.add_argument(
        "--no-save",
        action="store_true",
        help="Disable snapshot saving when dogs are detected.",
    )
    parser.add_argument(
        "--health-knn-model",
        default=DEFAULT_HEALTH_MODEL_PATH,
        type=Path,
        help="Path to trained KNN health model file.",
    )
    parser.add_argument(
        "--disable-health-classifier",
        action="store_true",
        help="Disable illness/healthy classification and symptom analysis.",
    )
    parser.add_argument(
        "--camera-id",
        type=int,
        default=env_int_or_none("CAMERA_ID"),
        help="Camera ID used for web integration (optional).",
    )
    parser.add_argument(
        "--live-json-path",
        type=Path,
        help="Optional path to write live detection JSON for the web UI.",
    )
    parser.add_argument(
        "--live-json-interval",
        type=float,
        default=0.25,
        help="Minimum seconds between live JSON writes (default: 0.25).",
    )
    parser.add_argument(
        "--disable-live-json",
        action="store_true",
        help="Disable live JSON export for web UI integration.",
    )
    parser.add_argument(
        "--symptom-foam-threshold",
        type=float,
        default=0.22,
        help="Foam ratio threshold for symptom flagging (default: 0.22).",
    )
    parser.add_argument(
        "--symptom-red-eye-threshold",
        type=float,
        default=0.09,
        help="Red-eye ratio threshold for symptom flagging (default: 0.09).",
    )
    parser.add_argument(
        "--symptom-motion-threshold",
        type=float,
        default=0.12,
        help="Motion ratio threshold for symptom flagging (default: 0.12).",
    )
    parser.add_argument(
        "--follow-dog",
        action="store_true",
        help="Auto-follow the dog with PTZ commands.",
    )
    parser.add_argument(
        "--ptz-control-url",
        help=(
            "HTTP endpoint to receive PTZ commands as JSON. "
            "Example: http://127.0.0.1:8000/admin/stations/cameras/1/control"
        ),
    )
    parser.add_argument(
        "--ptz-cooldown",
        type=float,
        default=0.8,
        help="Seconds between PTZ commands (default: 0.8).",
    )
    parser.add_argument(
        "--ptz-move-timeout",
        type=int,
        default=1,
        help="Movement timeout sent with PTZ move commands (default: 1).",
    )
    parser.add_argument(
        "--ptz-http-timeout",
        type=float,
        default=3.0,
        help="HTTP timeout for PTZ requests in seconds (default: 3.0).",
    )
    parser.add_argument(
        "--follow-x-threshold",
        type=float,
        default=0.15,
        help="Horizontal dead-zone threshold for follow logic (default: 0.15).",
    )
    parser.add_argument(
        "--follow-y-threshold",
        type=float,
        default=0.18,
        help="Vertical dead-zone threshold for follow logic (default: 0.18).",
    )
    parser.add_argument(
        "--lost-stop-frames",
        type=int,
        default=10,
        help="Frames without dog before sending PTZ stop (default: 10).",
    )
    parser.add_argument(
        "--ptz-basic-user",
        default=os.getenv("PTZ_BASIC_USER"),
        help="Optional basic-auth username for PTZ endpoint.",
    )
    parser.add_argument(
        "--ptz-basic-pass",
        default=os.getenv("PTZ_BASIC_PASS"),
        help="Optional basic-auth password for PTZ endpoint.",
    )
    parser.add_argument(
        "--ptz-bearer-token",
        default=os.getenv("PTZ_BEARER_TOKEN"),
        help="Optional bearer token for PTZ endpoint.",
    )
    return parser.parse_args()


def resolve_live_json_path(args: argparse.Namespace) -> Optional[Path]:
    if args.disable_live_json:
        return None
    if args.live_json_path is not None:
        return args.live_json_path
    if args.camera_id is not None:
        return Path(f"/tmp/pawtech_live_detections_camera_{args.camera_id}.json")
    return None


def write_live_json(path: Path, payload: dict[str, Any]) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    tmp_path = path.with_suffix(path.suffix + ".tmp")
    tmp_path.write_text(json.dumps(payload), encoding="utf-8")
    tmp_path.replace(path)


def configure_rtsp_transport(source: str, transport: str) -> None:
    if not source.lower().startswith("rtsp://"):
        return
    # Required by OpenCV FFmpeg backend: key;value pairs.
    os.environ.setdefault("OPENCV_FFMPEG_CAPTURE_OPTIONS", f"rtsp_transport;{transport}")


def open_capture(source: str) -> Optional[cv2.VideoCapture]:
    cap = cv2.VideoCapture(source, cv2.CAP_FFMPEG)
    if cap.isOpened():
        return cap
    cap.release()

    cap = cv2.VideoCapture(source)
    if cap.isOpened():
        return cap
    cap.release()
    return None


def ensure_window() -> None:
    cv2.namedWindow(WINDOW_TITLE, cv2.WINDOW_NORMAL)
    cv2.resizeWindow(WINDOW_TITLE, 1280, 720)


def show_status_frame(message: str) -> int:
    frame = np.zeros(STATUS_FRAME_SHAPE, dtype=np.uint8)
    cv2.putText(
        frame,
        message,
        (60, 120),
        cv2.FONT_HERSHEY_SIMPLEX,
        1.0,
        (255, 255, 255),
        2,
        cv2.LINE_AA,
    )
    cv2.imshow(WINDOW_TITLE, frame)
    return cv2.waitKey(1) & 0xFF


def lookup_label(names: Any, class_id: int) -> str:
    if isinstance(names, dict):
        return str(names.get(class_id, class_id))
    if isinstance(names, list) and 0 <= class_id < len(names):
        return str(names[class_id])
    return str(class_id)


def extract_dog_targets(result: Any) -> list[DogTarget]:
    dog_targets: list[DogTarget] = []
    for box in result.boxes:
        class_id = int(box.cls[0].item())
        label = lookup_label(result.names, class_id).lower()
        if label != TARGET_CLASS:
            continue
        x1, y1, x2, y2 = [int(v) for v in box.xyxy[0].tolist()]
        confidence = float(box.conf[0].item())
        dog_targets.append(DogTarget(x1=x1, y1=y1, x2=x2, y2=y2, confidence=confidence))
    return dog_targets


def draw_dog_box(frame: Any, target: DogTarget) -> None:
    x1, y1, x2, y2 = target.x1, target.y1, target.x2, target.y2

    cv2.rectangle(frame, (x1, y1), (x2, y2), (0, 200, 0), 2)
    cv2.putText(
        frame,
        f"dog {target.confidence:.2f}",
        (x1, max(20, y1 - 8)),
        cv2.FONT_HERSHEY_SIMPLEX,
        0.6,
        (0, 200, 0),
        2,
        cv2.LINE_AA,
    )


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


def crop_frame(frame: np.ndarray, x1: int, y1: int, x2: int, y2: int) -> np.ndarray:
    return frame[y1:y2, x1:x2]


def region_from_ratio(target: DogTarget, fx1: float, fy1: float, fx2: float, fy2: float) -> tuple[int, int, int, int]:
    w = max(1, target.x2 - target.x1)
    h = max(1, target.y2 - target.y1)
    x1 = target.x1 + int(w * fx1)
    y1 = target.y1 + int(h * fy1)
    x2 = target.x1 + int(w * fx2)
    y2 = target.y1 + int(h * fy2)
    return x1, y1, x2, y2


def safe_ratio(mask_count: int, total: int) -> float:
    if total <= 0:
        return 0.0
    return float(mask_count) / float(total)


def compute_foam_ratio(frame: np.ndarray, target: DogTarget) -> float:
    h, w = frame.shape[:2]
    x1, y1, x2, y2 = region_from_ratio(target, 0.30, 0.62, 0.70, 0.93)
    x1, y1, x2, y2 = clamp_box(w, h, x1, y1, x2, y2)
    roi = crop_frame(frame, x1, y1, x2, y2)
    if roi.size == 0:
        return 0.0

    hsv = cv2.cvtColor(roi, cv2.COLOR_BGR2HSV)
    foam_mask = cv2.inRange(hsv, np.array([0, 0, 180]), np.array([180, 80, 255]))
    return safe_ratio(int(np.count_nonzero(foam_mask)), int(foam_mask.size))


def compute_red_eye_ratio(frame: np.ndarray, target: DogTarget) -> float:
    h, w = frame.shape[:2]
    eye_regions = [
        region_from_ratio(target, 0.10, 0.18, 0.35, 0.42),
        region_from_ratio(target, 0.65, 0.18, 0.90, 0.42),
    ]
    max_ratio = 0.0
    for rx1, ry1, rx2, ry2 in eye_regions:
        rx1, ry1, rx2, ry2 = clamp_box(w, h, rx1, ry1, rx2, ry2)
        roi = crop_frame(frame, rx1, ry1, rx2, ry2)
        if roi.size == 0:
            continue
        hsv = cv2.cvtColor(roi, cv2.COLOR_BGR2HSV)
        mask_1 = cv2.inRange(hsv, np.array([0, 70, 45]), np.array([12, 255, 255]))
        mask_2 = cv2.inRange(hsv, np.array([168, 70, 45]), np.array([180, 255, 255]))
        red_mask = cv2.bitwise_or(mask_1, mask_2)
        ratio = safe_ratio(int(np.count_nonzero(red_mask)), int(red_mask.size))
        max_ratio = max(max_ratio, ratio)
    return max_ratio


def compute_motion_ratio(gray_frame: np.ndarray, prev_gray: Optional[np.ndarray], target: DogTarget) -> float:
    if prev_gray is None:
        return 0.0
    if gray_frame.shape != prev_gray.shape:
        return 0.0

    h, w = gray_frame.shape[:2]
    x1, y1, x2, y2 = clamp_box(w, h, target.x1, target.y1, target.x2, target.y2)
    curr_roi = gray_frame[y1:y2, x1:x2]
    prev_roi = prev_gray[y1:y2, x1:x2]
    if curr_roi.size == 0 or prev_roi.size == 0:
        return 0.0

    diff = cv2.absdiff(curr_roi, prev_roi)
    _, motion_mask = cv2.threshold(diff, 25, 255, cv2.THRESH_BINARY)
    return safe_ratio(int(np.count_nonzero(motion_mask)), int(motion_mask.size))


def compute_edge_ratio(frame: np.ndarray, target: DogTarget) -> float:
    h, w = frame.shape[:2]
    x1, y1, x2, y2 = clamp_box(w, h, target.x1, target.y1, target.x2, target.y2)
    roi = crop_frame(frame, x1, y1, x2, y2)
    if roi.size == 0:
        return 0.0

    gray = cv2.cvtColor(roi, cv2.COLOR_BGR2GRAY)
    edges = cv2.Canny(gray, 70, 150)
    return safe_ratio(int(np.count_nonzero(edges)), int(edges.size))


def compute_mean_saturation(frame: np.ndarray, target: DogTarget) -> float:
    h, w = frame.shape[:2]
    x1, y1, x2, y2 = clamp_box(w, h, target.x1, target.y1, target.x2, target.y2)
    roi = crop_frame(frame, x1, y1, x2, y2)
    if roi.size == 0:
        return 0.0
    hsv = cv2.cvtColor(roi, cv2.COLOR_BGR2HSV)
    return float(np.mean(hsv[:, :, 1])) / 255.0


def extract_health_features(
    frame: np.ndarray,
    gray_frame: np.ndarray,
    prev_gray: Optional[np.ndarray],
    target: DogTarget,
    foam_threshold: float,
    red_eye_threshold: float,
    motion_threshold: float,
) -> tuple[HealthFeatures, list[str]]:
    foam_ratio = compute_foam_ratio(frame, target)
    red_eye_ratio = compute_red_eye_ratio(frame, target)
    motion_ratio = compute_motion_ratio(gray_frame, prev_gray, target)
    edge_ratio = compute_edge_ratio(frame, target)
    mean_saturation = compute_mean_saturation(frame, target)

    symptoms: list[str] = []
    if foam_ratio >= foam_threshold:
        symptoms.append("mouth_foam")
    if red_eye_ratio >= red_eye_threshold:
        symptoms.append("red_eyes")
    if motion_ratio >= motion_threshold:
        symptoms.append("abnormal_motion")

    features = HealthFeatures(
        foam_ratio=foam_ratio,
        red_eye_ratio=red_eye_ratio,
        motion_ratio=motion_ratio,
        edge_ratio=edge_ratio,
        mean_saturation=mean_saturation,
    )
    return features, symptoms


def draw_health_overlay(frame: Any, target: DogTarget, prediction: HealthPrediction) -> None:
    color = (40, 210, 40) if prediction.label == "healthy" else (0, 70, 255)
    status = f"{prediction.label.upper()} {prediction.confidence:.2f}"
    cv2.putText(
        frame,
        status,
        (target.x1, min(frame.shape[0] - 10, target.y2 + 22)),
        cv2.FONT_HERSHEY_SIMPLEX,
        0.58,
        color,
        2,
        cv2.LINE_AA,
    )
    if prediction.symptoms:
        symptom_text = ",".join(prediction.symptoms[:3])
        cv2.putText(
            frame,
            symptom_text,
            (target.x1, min(frame.shape[0] - 10, target.y2 + 44)),
            cv2.FONT_HERSHEY_SIMPLEX,
            0.48,
            color,
            1,
            cv2.LINE_AA,
        )


def draw_follow_overlay(
    frame: Any,
    x_threshold: float,
    y_threshold: float,
    target: Optional[DogTarget],
    action: str,
) -> None:
    frame_h, frame_w = frame.shape[:2]
    cx, cy = frame_w // 2, frame_h // 2

    dead_x = int((frame_w / 2.0) * x_threshold)
    dead_y = int((frame_h / 2.0) * y_threshold)
    cv2.rectangle(
        frame,
        (cx - dead_x, cy - dead_y),
        (cx + dead_x, cy + dead_y),
        (255, 255, 0),
        1,
    )
    cv2.drawMarker(frame, (cx, cy), (255, 255, 0), cv2.MARKER_CROSS, 22, 2)

    if target is not None:
        tx, ty = target.center()
        tx_i, ty_i = int(tx), int(ty)
        cv2.circle(frame, (tx_i, ty_i), 4, (0, 255, 255), -1)
        cv2.line(frame, (cx, cy), (tx_i, ty_i), (0, 255, 255), 1)

    action_color = (0, 255, 0) if action == "ptz_stop" else (0, 180, 255)
    cv2.putText(
        frame,
        f"PTZ follow: {action}",
        (20, 30),
        cv2.FONT_HERSHEY_SIMPLEX,
        0.7,
        action_color,
        2,
        cv2.LINE_AA,
    )


def maybe_save_frame(frame: Any, save_dir: Path, last_save: float, cooldown: float) -> float:
    now = time.time()
    if now - last_save < cooldown:
        return last_save

    save_dir.mkdir(parents=True, exist_ok=True)
    stamp = datetime.now().strftime("%Y%m%d_%H%M%S_%f")
    output_file = save_dir / f"dog_{stamp}.jpg"
    cv2.imwrite(str(output_file), frame)
    print(f"Saved detection frame: {output_file}")
    return now


def run_detector(args: argparse.Namespace) -> int:
    if not args.source:
        print(
            "No camera source provided. Use --source or set IP_CAMERA_URL.",
            file=sys.stderr,
        )
        return 2

    if args.frame_skip < 1:
        print("--frame-skip must be >= 1", file=sys.stderr)
        return 2

    ptz_follower: Optional[PTZFollower] = None
    if args.follow_dog:
        if requests is None:
            print("Missing dependency for PTZ follow: requests", file=sys.stderr)
            print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
            return 2
        if not args.ptz_control_url and args.camera_id is not None:
            args.ptz_control_url = (
                f"http://127.0.0.1:8000/admin/stations/cameras/{args.camera_id}/control"
            )
            print(f"Using default PTZ control URL: {args.ptz_control_url}")
        if not args.ptz_control_url:
            print("--ptz-control-url is required when --follow-dog is enabled.", file=sys.stderr)
            return 2
        ptz_follower = PTZFollower(
            control_url=args.ptz_control_url,
            cooldown=args.ptz_cooldown,
            x_threshold=args.follow_x_threshold,
            y_threshold=args.follow_y_threshold,
            lost_stop_frames=args.lost_stop_frames,
            move_timeout=args.ptz_move_timeout,
            http_timeout=args.ptz_http_timeout,
            basic_user=args.ptz_basic_user,
            basic_pass=args.ptz_basic_pass,
            bearer_token=args.ptz_bearer_token,
        )

    health_classifier: Optional[DogHealthKNN] = None
    if not args.disable_health_classifier:
        health_classifier = DogHealthKNN(args.health_knn_model)
        health_classifier.load()
    else:
        print("Health classification disabled.")

    live_json_path = resolve_live_json_path(args)
    last_live_json_write = 0.0
    if live_json_path is not None:
        print(f"Live detection export enabled: {live_json_path}")

    configure_rtsp_transport(args.source, args.rtsp_transport)

    print(f"Loading model: {args.model}")
    model = YOLO(args.model)

    cap: Optional[cv2.VideoCapture] = None
    frame_index = 0
    last_save = 0.0
    prev_gray: Optional[np.ndarray] = None

    print(f"Connecting to camera source: {args.source}")
    print("Press 'q' or ESC to quit.")
    if ptz_follower:
        print(f"PTZ auto-follow enabled via: {args.ptz_control_url}")

    if not args.no_display:
        ensure_window()

    try:
        while True:
            if cap is None or not cap.isOpened():
                cap = open_capture(args.source)
                if cap is None:
                    print(f"Unable to open stream. Retrying in {args.reconnect_delay:.1f}s...")
                    if not args.no_display:
                        key = show_status_frame("Connecting to camera... retrying")
                        if key in (ord("q"), 27):
                            break
                    time.sleep(args.reconnect_delay)
                    continue
                print("Stream connected.")

            ok, frame = cap.read()
            if not ok or frame is None:
                print("Stream disconnected. Reconnecting...")
                cap.release()
                cap = None
                prev_gray = None
                if not args.no_display:
                    key = show_status_frame("Stream disconnected... reconnecting")
                    if key in (ord("q"), 27):
                        break
                time.sleep(args.reconnect_delay)
                continue

            gray_frame = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
            frame_index += 1
            if args.frame_skip > 1 and frame_index % args.frame_skip != 0:
                if not args.no_display:
                    cv2.imshow(WINDOW_TITLE, frame)
                    key = cv2.waitKey(1) & 0xFF
                    if key in (ord("q"), 27):
                        break
                prev_gray = gray_frame
                continue

            result = model.predict(
                source=frame,
                conf=args.conf,
                iou=args.iou,
                imgsz=args.imgsz,
                device=args.device,
                verbose=False,
            )[0]

            annotated = frame.copy()
            dog_targets = extract_dog_targets(result)
            for target in dog_targets:
                draw_dog_box(annotated, target)

            health_predictions: list[HealthPrediction] = []
            if not args.disable_health_classifier:
                for target in dog_targets:
                    features, symptoms = extract_health_features(
                        frame=frame,
                        gray_frame=gray_frame,
                        prev_gray=prev_gray,
                        target=target,
                        foam_threshold=args.symptom_foam_threshold,
                        red_eye_threshold=args.symptom_red_eye_threshold,
                        motion_threshold=args.symptom_motion_threshold,
                    )
                    if health_classifier is None:
                        prediction = HealthPrediction(
                            label="ill" if symptoms else "healthy",
                            confidence=0.6 if symptoms else 0.7,
                            symptoms=symptoms,
                        )
                    else:
                        prediction = health_classifier.predict(features, symptoms)
                    health_predictions.append(prediction)
                    draw_health_overlay(annotated, target, prediction)

            dog_count = len(dog_targets)
            best_target = max(dog_targets, key=lambda t: (t.area(), t.confidence)) if dog_targets else None
            ptz_action = "ptz_stop"
            if ptz_follower:
                frame_h, frame_w = frame.shape[:2]
                ptz_action = ptz_follower.update(best_target, frame_w, frame_h)
                draw_follow_overlay(
                    annotated,
                    args.follow_x_threshold,
                    args.follow_y_threshold,
                    best_target,
                    ptz_action,
                )

            if dog_count > 0:
                stamp = datetime.now().strftime("%Y-%m-%d %H:%M:%S")
                if health_predictions:
                    ill_count = sum(1 for item in health_predictions if item.label == "ill")
                    healthy_count = dog_count - ill_count
                    print(
                        f"[{stamp}] Dogs detected: {dog_count} | healthy: {healthy_count} | ill: {ill_count}"
                    )
                    symptoms_union = sorted(
                        {symptom for item in health_predictions for symptom in item.symptoms}
                    )
                    if symptoms_union:
                        print(f"Symptoms detected: {', '.join(symptoms_union)}")
                else:
                    print(f"[{stamp}] Dogs detected: {dog_count}")
                if args.save_dir and not args.no_save:
                    last_save = maybe_save_frame(
                        annotated, args.save_dir, last_save, args.save_cooldown
                    )

            now = time.time()
            if live_json_path is not None and (now - last_live_json_write >= max(0.05, args.live_json_interval)):
                detections_payload: list[dict[str, Any]] = []
                for idx, target in enumerate(dog_targets):
                    prediction = health_predictions[idx] if idx < len(health_predictions) else None
                    det_conf = float(target.confidence)
                    detections_payload.append(
                        {
                            "bbox": {
                                "x1": int(target.x1),
                                "y1": int(target.y1),
                                "x2": int(target.x2),
                                "y2": int(target.y2),
                            },
                            "confidence": det_conf,
                            "health_label": prediction.label if prediction else "unknown",
                            "health_confidence": float(prediction.confidence) if prediction else det_conf,
                            "symptoms": prediction.symptoms if prediction else [],
                        }
                    )

                frame_h, frame_w = frame.shape[:2]
                payload = {
                    "camera_id": args.camera_id,
                    "timestamp": datetime.now().isoformat(),
                    "frame_width": int(frame_w),
                    "frame_height": int(frame_h),
                    "dog_count": int(dog_count),
                    "ptz_action": ptz_action if ptz_follower else None,
                    "detections": detections_payload,
                }
                try:
                    write_live_json(live_json_path, payload)
                    last_live_json_write = now
                except Exception as exc:
                    print(f"Failed to write live detection JSON: {exc}")

            if not args.no_display:
                cv2.imshow(WINDOW_TITLE, annotated)
                key = cv2.waitKey(1) & 0xFF
                if key in (ord("q"), 27):
                    break
            prev_gray = gray_frame
    except KeyboardInterrupt:
        print("\nStopping detector...")
    finally:
        if live_json_path is not None:
            try:
                write_live_json(
                    live_json_path,
                    {
                        "camera_id": args.camera_id,
                        "timestamp": datetime.now().isoformat(),
                        "frame_width": None,
                        "frame_height": None,
                        "dog_count": 0,
                        "ptz_action": "ptz_stop",
                        "detections": [],
                        "status": "stopped",
                    },
                )
            except Exception:
                pass
        if ptz_follower is not None:
            ptz_follower.stop()
        if cap is not None:
            cap.release()
        if not args.no_display:
            cv2.destroyAllWindows()

    return 0


if __name__ == "__main__":
    sys.exit(run_detector(parse_args()))
