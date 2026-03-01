#!/usr/bin/env python3
"""
Minimal KNN trainer for dog health classification.

Input CSV columns:
- foam_ratio
- red_eye_ratio
- motion_ratio
- edge_ratio
- mean_saturation
- label (healthy / ill)
"""

from __future__ import annotations

import argparse
import csv
import json
import sys
from collections import Counter
from datetime import datetime, timezone
from pathlib import Path
from typing import Any

import numpy as np

try:
    import joblib
except ImportError:
    print("Missing dependency: joblib", file=sys.stderr)
    print("Install with: ./venv/bin/pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)

try:
    from sklearn.metrics import accuracy_score, classification_report, confusion_matrix, f1_score
    from sklearn.model_selection import train_test_split
    from sklearn.neighbors import KNeighborsClassifier
    from sklearn.pipeline import Pipeline
    from sklearn.preprocessing import StandardScaler
except ImportError:
    print("Missing dependency: scikit-learn", file=sys.stderr)
    print("Install with: ./venv/bin/pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)


FEATURE_COLUMNS = [
    "foam_ratio",
    "red_eye_ratio",
    "motion_ratio",
    "edge_ratio",
    "mean_saturation",
]
LABEL_COLUMN = "label"
VALID_LABELS = {"healthy", "ill"}
UNKNOWN_LABELS = {"", "unknown", "unlabeled", "none", "na"}


def parse_args() -> argparse.Namespace:
    default_output = Path(__file__).resolve().parent / "models" / "dog_health_knn.joblib"
    parser = argparse.ArgumentParser(description="Train a minimal KNN dog-health model.")
    parser.add_argument("--csv", required=True, type=Path, help="Path to dataset CSV.")
    parser.add_argument("--output", type=Path, default=default_output, help="Output model path.")
    parser.add_argument("--report-json", type=Path, help="Output metrics JSON path.")
    parser.add_argument("--drop-unknown", action="store_true", help="Drop rows with unknown label.")
    parser.add_argument("--test-size", type=float, default=0.2, help="Test split ratio (default: 0.2).")
    parser.add_argument("--seed", type=int, default=42, help="Random seed.")
    parser.add_argument("--neighbors", type=int, default=5, help="K neighbors (default: 5).")
    parser.add_argument("--min-per-class", type=int, default=5, help="Minimum samples per class.")
    # Legacy flags kept as no-op for compatibility with older commands.
    parser.add_argument("--tune", action="store_true", help=argparse.SUPPRESS)
    parser.add_argument("--cv-folds", type=int, default=5, help=argparse.SUPPRESS)
    parser.add_argument("--scoring", default="f1_macro", help=argparse.SUPPRESS)
    parser.add_argument("--n-jobs", type=int, default=1, help=argparse.SUPPRESS)
    parser.add_argument("--weights", default="distance", help=argparse.SUPPRESS)
    parser.add_argument("--metric", default="euclidean", help=argparse.SUPPRESS)
    parser.add_argument("--minkowski-p", type=int, default=2, help=argparse.SUPPRESS)
    return parser.parse_args()


def normalize_label(raw: str) -> str:
    value = raw.strip().lower()
    if value in {"healthy", "0", "0.0", "normal"}:
        return "healthy"
    if value in {"ill", "1", "1.0", "sick", "unhealthy", "diseased"}:
        return "ill"
    return value


def load_dataset(csv_path: Path, drop_unknown: bool) -> tuple[np.ndarray, np.ndarray, dict[str, int]]:
    if not csv_path.exists():
        raise FileNotFoundError(f"CSV not found: {csv_path}")

    rows: list[list[float]] = []
    labels: list[str] = []
    skipped_unknown = 0

    with csv_path.open("r", newline="", encoding="utf-8") as f:
        reader = csv.DictReader(f)
        if not reader.fieldnames:
            raise ValueError("CSV has no headers.")

        missing = [col for col in FEATURE_COLUMNS + [LABEL_COLUMN] if col not in reader.fieldnames]
        if missing:
            raise ValueError(f"Missing columns in CSV: {', '.join(missing)}")

        for line_no, row in enumerate(reader, start=2):
            try:
                features = [float(row[col]) for col in FEATURE_COLUMNS]
            except Exception as exc:
                raise ValueError(f"Invalid numeric value at line {line_no}: {exc}") from exc

            label = normalize_label(str(row.get(LABEL_COLUMN, "")))
            if label in UNKNOWN_LABELS:
                if drop_unknown:
                    skipped_unknown += 1
                    continue
                raise ValueError(f"Unknown label at line {line_no}. Use --drop-unknown.")
            if label not in VALID_LABELS:
                raise ValueError(f"Invalid label '{row.get(LABEL_COLUMN)}' at line {line_no}.")

            rows.append(features)
            labels.append(label)

    if not rows:
        raise ValueError("No usable rows found.")

    return np.array(rows, dtype=np.float32), np.array(labels), {"dropped_unknown_rows": skipped_unknown}


def validate_class_counts(labels: np.ndarray, min_per_class: int) -> None:
    counts = Counter(labels.tolist())
    for cls in ("healthy", "ill"):
        if counts.get(cls, 0) < min_per_class:
            raise ValueError(f"Not enough samples for '{cls}': {counts.get(cls, 0)} (min={min_per_class})")


def build_model(neighbors: int, train_size: int) -> Pipeline:
    k = max(1, min(int(neighbors), max(1, train_size)))
    return Pipeline(
        steps=[
            ("scaler", StandardScaler()),
            ("knn", KNeighborsClassifier(n_neighbors=k, weights="distance", metric="euclidean")),
        ]
    )


def evaluate(model: Pipeline, x_test: np.ndarray, y_test: np.ndarray) -> dict[str, Any]:
    y_pred = model.predict(x_test)
    return {
        "accuracy": float(accuracy_score(y_test, y_pred)),
        "f1_macro": float(f1_score(y_test, y_pred, average="macro")),
        "confusion_matrix": confusion_matrix(y_test, y_pred, labels=["healthy", "ill"]).tolist(),
        "classification_report": classification_report(
            y_test,
            y_pred,
            labels=["healthy", "ill"],
            output_dict=True,
            zero_division=0,
        ),
    }


def save_outputs(
    output_model: Path,
    output_report: Path,
    model: Pipeline,
    metrics: dict[str, Any],
    dataset_info: dict[str, Any],
) -> None:
    output_model.parent.mkdir(parents=True, exist_ok=True)
    payload = {
        "model": model,
        "feature_columns": FEATURE_COLUMNS,
        "labels": ["healthy", "ill"],
        "metadata": {
            "trained_at_utc": datetime.now(timezone.utc).isoformat(),
            "metrics": {
                "accuracy": metrics["accuracy"],
                "f1_macro": metrics["f1_macro"],
            },
            "dataset": dataset_info,
        },
    }
    joblib.dump(payload, output_model)

    report = {
        "trained_at_utc": datetime.now(timezone.utc).isoformat(),
        "output_model": str(output_model),
        "dataset": dataset_info,
        "metrics": metrics,
    }
    output_report.parent.mkdir(parents=True, exist_ok=True)
    output_report.write_text(json.dumps(report, indent=2), encoding="utf-8")


def main() -> int:
    args = parse_args()
    report_json = args.report_json or args.output.with_suffix(".metrics.json")

    if args.tune:
        print("Note: --tune is ignored in minimal mode.")

    try:
        x, y, loader_stats = load_dataset(args.csv, drop_unknown=args.drop_unknown)
        validate_class_counts(y, min_per_class=max(2, int(args.min_per_class)))
    except Exception as exc:
        print(f"Dataset error: {exc}", file=sys.stderr)
        return 2

    x_train, x_test, y_train, y_test = train_test_split(
        x,
        y,
        test_size=min(max(float(args.test_size), 0.05), 0.5),
        random_state=int(args.seed),
        stratify=y,
    )

    model = build_model(args.neighbors, len(x_train))
    model.fit(x_train, y_train)
    metrics = evaluate(model, x_test, y_test)

    dataset_info = {
        "csv": str(args.csv),
        "rows_used": int(len(y)),
        "class_distribution": dict(Counter(y.tolist())),
        "train_rows": int(len(y_train)),
        "test_rows": int(len(y_test)),
        "dropped_unknown_rows": int(loader_stats.get("dropped_unknown_rows", 0)),
    }

    try:
        save_outputs(args.output, report_json, model, metrics, dataset_info)
    except Exception as exc:
        print(f"Output error: {exc}", file=sys.stderr)
        return 2

    print(f"Model saved to: {args.output}")
    print(f"Metrics saved to: {report_json}")
    print(f"Accuracy: {metrics['accuracy']:.4f}")
    print(f"F1 macro: {metrics['f1_macro']:.4f}")
    print(f"Class distribution: {dataset_info['class_distribution']}")
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
