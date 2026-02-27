#!/usr/bin/env python3
"""
Interactive labeling utility for dog health dataset rows.
"""

from __future__ import annotations

import argparse
import csv
import shutil
import sys
from pathlib import Path

try:
    import cv2
except ImportError:
    print("Missing dependency: opencv-python", file=sys.stderr)
    print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)


UNKNOWN_LABELS = {"", "unknown", "unlabeled", "none", "na"}


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(description="Label dog health dataset samples interactively.")
    parser.add_argument(
        "--csv",
        required=True,
        type=Path,
        help="Dataset CSV path.",
    )
    parser.add_argument(
        "--label-all",
        action="store_true",
        help="Review all rows instead of only unknown labels.",
    )
    parser.add_argument(
        "--backup",
        action="store_true",
        help="Create a .bak backup before writing updates.",
    )
    return parser.parse_args()


def read_rows(csv_path: Path) -> tuple[list[str], list[dict[str, str]]]:
    with csv_path.open("r", newline="", encoding="utf-8") as f:
        reader = csv.DictReader(f)
        if not reader.fieldnames:
            raise ValueError("CSV has no header.")
        rows = [dict(row) for row in reader]
        return list(reader.fieldnames), rows


def write_rows(csv_path: Path, headers: list[str], rows: list[dict[str, str]]) -> None:
    with csv_path.open("w", newline="", encoding="utf-8") as f:
        writer = csv.DictWriter(f, fieldnames=headers)
        writer.writeheader()
        writer.writerows(rows)


def resolve_image(csv_path: Path, row: dict[str, str]) -> Path:
    image_path = Path(row.get("image_path", ""))
    if image_path.is_absolute():
        return image_path
    return csv_path.parent / image_path


def draw_overlay(image, row: dict[str, str]):
    canvas = image.copy()
    features = [
        f"id={row.get('sample_id', '')}",
        f"label={row.get('label', '') or 'unknown'}",
        f"foam={row.get('foam_ratio', '')}",
        f"red_eye={row.get('red_eye_ratio', '')}",
        f"motion={row.get('motion_ratio', '')}",
        f"symptoms={row.get('symptoms', '') or 'none'}",
        "h=healthy | i=ill | u=unknown | s=skip | q=quit",
    ]
    y = 24
    for line in features:
        cv2.putText(
            canvas,
            line,
            (8, y),
            cv2.FONT_HERSHEY_SIMPLEX,
            0.56,
            (255, 255, 255),
            2,
            cv2.LINE_AA,
        )
        y += 24
    return canvas


def normalize_label(value: str) -> str:
    return value.strip().lower()


def is_unknown(value: str) -> bool:
    return normalize_label(value) in UNKNOWN_LABELS


def main() -> int:
    args = parse_args()
    if not args.csv.exists():
        print(f"CSV not found: {args.csv}", file=sys.stderr)
        return 2

    try:
        headers, rows = read_rows(args.csv)
    except Exception as exc:
        print(f"Failed to read CSV: {exc}", file=sys.stderr)
        return 2

    if args.backup:
        backup_path = args.csv.with_suffix(args.csv.suffix + ".bak")
        shutil.copy2(args.csv, backup_path)
        print(f"Backup created: {backup_path}")

    labeled = 0
    skipped = 0
    reviewed = 0

    for idx, row in enumerate(rows):
        current = row.get("label", "")
        if not args.label_all and not is_unknown(current):
            continue

        image_path = resolve_image(args.csv, row)
        if not image_path.exists():
            print(f"Missing image for sample_id={row.get('sample_id')}: {image_path}")
            skipped += 1
            continue

        image = cv2.imread(str(image_path))
        if image is None:
            print(f"Unreadable image for sample_id={row.get('sample_id')}: {image_path}")
            skipped += 1
            continue

        display = draw_overlay(image, row)
        cv2.imshow("Label Dog Health Dataset", display)

        while True:
            key = cv2.waitKey(0) & 0xFF
            if key in (ord("h"), ord("H")):
                rows[idx]["label"] = "healthy"
                labeled += 1
                reviewed += 1
                break
            if key in (ord("i"), ord("I")):
                rows[idx]["label"] = "ill"
                labeled += 1
                reviewed += 1
                break
            if key in (ord("u"), ord("U")):
                rows[idx]["label"] = "unknown"
                reviewed += 1
                break
            if key in (ord("s"), ord("S")):
                reviewed += 1
                break
            if key in (ord("q"), ord("Q"), 27):
                write_rows(args.csv, headers, rows)
                cv2.destroyAllWindows()
                print(f"Stopped. reviewed={reviewed} labeled={labeled} skipped={skipped}")
                print(f"Updated CSV: {args.csv}")
                return 0

    write_rows(args.csv, headers, rows)
    cv2.destroyAllWindows()
    print(f"Completed. reviewed={reviewed} labeled={labeled} skipped={skipped}")
    print(f"Updated CSV: {args.csv}")
    return 0


if __name__ == "__main__":
    sys.exit(main())
