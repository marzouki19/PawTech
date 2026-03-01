#!/usr/bin/env python3
"""
Minimal dataset cleaner for dog-health CSV.

What it does:
- Normalizes labels.
- Validates numeric feature values and clamps them to [0, 1].
- Regenerates symptom tags from thresholds.
- Optionally infers unknown labels.
"""

from __future__ import annotations

import argparse
import csv
import math
import sys
from pathlib import Path


REQUIRED_COLUMNS = [
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

FEATURE_COLUMNS = [
    "dog_confidence",
    "foam_ratio",
    "red_eye_ratio",
    "motion_ratio",
    "edge_ratio",
    "mean_saturation",
]

UNKNOWN_LABELS = {"", "unknown", "unlabeled", "none", "na"}


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(description="Clean dog-health dataset CSV.")
    parser.add_argument("--csv", required=True, type=Path, help="Input CSV path.")
    parser.add_argument("--output", type=Path, help="Output CSV path (default: samples_clean.csv).")
    parser.add_argument("--infer-unknown", action="store_true", help="Infer unknown labels from simple score.")
    parser.add_argument("--drop-unknown", action="store_true", help="Drop unknown labels instead of keeping.")
    parser.add_argument("--foam-threshold", type=float, default=0.22)
    parser.add_argument("--red-eye-threshold", type=float, default=0.09)
    parser.add_argument("--motion-threshold", type=float, default=0.12)
    return parser.parse_args()


def clamp01(value: float) -> float:
    return max(0.0, min(1.0, float(value)))


def to_float(raw: str) -> float:
    value = float(str(raw).strip())
    if math.isnan(value) or math.isinf(value):
        raise ValueError("invalid number")
    return value


def format_float(value: float, digits: int = 6) -> str:
    return f"{value:.{digits}f}"


def normalize_label(raw: str) -> str:
    value = raw.strip().lower()
    if value in {"healthy", "0", "0.0", "normal"}:
        return "healthy"
    if value in {"ill", "1", "1.0", "sick", "unhealthy", "diseased"}:
        return "ill"
    return value


def infer_label(foam: float, red_eye: float, motion: float) -> str:
    # Simple weighted score for unknown rows.
    score = 0.0
    score += 0.45 if red_eye >= 0.09 else 0.0
    score += 0.35 if foam >= 0.22 else 0.0
    score += 0.20 if motion >= 0.12 else 0.0
    return "ill" if score >= 0.45 else "healthy"


def build_symptoms(
    foam: float,
    red_eye: float,
    motion: float,
    foam_threshold: float,
    red_eye_threshold: float,
    motion_threshold: float,
) -> str:
    symptoms: list[str] = []
    if foam >= foam_threshold:
        symptoms.append("mouth_foam")
    if red_eye >= red_eye_threshold:
        symptoms.append("red_eyes")
    if motion >= motion_threshold:
        symptoms.append("abnormal_motion")
    return ";".join(symptoms)


def main() -> int:
    args = parse_args()
    if not args.csv.exists():
        print(f"CSV not found: {args.csv}", file=sys.stderr)
        return 2

    output = args.output or args.csv.with_name("samples_clean.csv")

    with args.csv.open("r", newline="", encoding="utf-8") as f:
        reader = csv.DictReader(f)
        headers = list(reader.fieldnames or [])
        if not headers:
            print("CSV has no headers.", file=sys.stderr)
            return 2
        missing = [col for col in REQUIRED_COLUMNS if col not in headers]
        if missing:
            print(f"Missing required columns: {', '.join(missing)}", file=sys.stderr)
            return 2
        rows = [dict(row) for row in reader]

    cleaned: list[dict[str, str]] = []
    dropped_invalid = 0
    dropped_unknown = 0
    inferred_unknown = 0

    for row in rows:
        current = dict(row)
        try:
            for col in FEATURE_COLUMNS:
                value = clamp01(to_float(current[col]))
                digits = 5 if col == "dog_confidence" else 6
                current[col] = format_float(value, digits=digits)
        except Exception:
            dropped_invalid += 1
            continue

        foam = float(current["foam_ratio"])
        red_eye = float(current["red_eye_ratio"])
        motion = float(current["motion_ratio"])

        label = normalize_label(str(current.get("label", "")))
        if label in UNKNOWN_LABELS:
            if args.infer_unknown:
                label = infer_label(foam, red_eye, motion)
                inferred_unknown += 1
            elif args.drop_unknown:
                dropped_unknown += 1
                continue
            else:
                label = "unknown"
        current["label"] = label

        current["symptoms"] = build_symptoms(
            foam=foam,
            red_eye=red_eye,
            motion=motion,
            foam_threshold=args.foam_threshold,
            red_eye_threshold=args.red_eye_threshold,
            motion_threshold=args.motion_threshold,
        )

        cleaned.append(current)

    output.parent.mkdir(parents=True, exist_ok=True)
    with output.open("w", newline="", encoding="utf-8") as f:
        writer = csv.DictWriter(f, fieldnames=headers)
        writer.writeheader()
        writer.writerows(cleaned)

    print(f"Input rows: {len(rows)}")
    print(f"Output rows: {len(cleaned)}")
    print(f"Dropped invalid rows: {dropped_invalid}")
    print(f"Dropped unknown rows: {dropped_unknown}")
    print(f"Inferred unknown rows: {inferred_unknown}")
    print(f"Clean CSV saved to: {output}")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
