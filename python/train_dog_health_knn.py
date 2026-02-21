#!/usr/bin/env python3
"""
Train and tune a KNN model for dog illness classification.

Expected CSV columns:
- foam_ratio
- red_eye_ratio
- motion_ratio
- edge_ratio
- mean_saturation
- label (healthy/ill or aliases)
"""

from __future__ import annotations

import argparse
import csv
import json
import math
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
    print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
    sys.exit(1)

try:
    from sklearn.metrics import (
        accuracy_score,
        balanced_accuracy_score,
        classification_report,
        confusion_matrix,
        f1_score,
    )
    from sklearn.model_selection import GridSearchCV, StratifiedKFold, train_test_split
    from sklearn.neighbors import KNeighborsClassifier
    from sklearn.pipeline import Pipeline
    from sklearn.preprocessing import StandardScaler
except ImportError:
    print("Missing dependency: scikit-learn", file=sys.stderr)
    print("Install with: pip install -r python/requirements-dog-detector.txt", file=sys.stderr)
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
MODEL_LABEL_ORDER = ["healthy", "ill"]
LABEL_TO_ID = {"healthy": 0, "ill": 1}
ID_TO_LABEL = {0: "healthy", 1: "ill"}


def parse_args() -> argparse.Namespace:
    default_output = Path(__file__).resolve().parent / "models" / "dog_health_knn.joblib"
    parser = argparse.ArgumentParser(description="Train and tune KNN dog-health model.")
    parser.add_argument("--csv", required=True, type=Path, help="Path to dataset CSV.")
    parser.add_argument(
        "--output",
        type=Path,
        default=default_output,
        help="Path to save trained model payload.",
    )
    parser.add_argument(
        "--report-json",
        type=Path,
        help="Path to save training report JSON (default: <output>.metrics.json).",
    )
    parser.add_argument("--test-size", type=float, default=0.2, help="Hold-out test ratio (default: 0.2).")
    parser.add_argument("--seed", type=int, default=42, help="Random seed.")
    parser.add_argument("--min-per-class", type=int, default=8, help="Minimum samples required per class.")
    parser.add_argument(
        "--drop-unknown",
        action="store_true",
        help="Drop rows with unknown labels instead of failing.",
    )

    parser.add_argument("--neighbors", type=int, default=5, help="K for fixed KNN mode.")
    parser.add_argument(
        "--weights",
        choices=("uniform", "distance"),
        default="distance",
        help="KNN weights when not tuning.",
    )
    parser.add_argument(
        "--metric",
        choices=("euclidean", "manhattan", "minkowski"),
        default="euclidean",
        help="KNN distance metric when not tuning.",
    )
    parser.add_argument("--minkowski-p", type=int, default=2, help="Minkowski p (if metric=minkowski).")

    parser.add_argument(
        "--tune",
        action="store_true",
        help="Enable hyperparameter search with cross-validation.",
    )
    parser.add_argument("--cv-folds", type=int, default=5, help="CV folds for tuning.")
    parser.add_argument(
        "--scoring",
        default="f1_macro",
        help="Scoring metric for tuning (default: f1_macro).",
    )
    parser.add_argument(
        "--n-jobs",
        type=int,
        default=1,
        help="Parallel jobs for grid search (default: 1).",
    )
    return parser.parse_args()


def normalize_label(label: str) -> str:
    value = label.strip().lower()
    if value in {"sick", "unhealthy", "1", "diseased"}:
        return "ill"
    if value in {"healthy", "0", "normal"}:
        return "healthy"
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
            raise ValueError("CSV is empty or missing headers.")

        missing = [col for col in FEATURE_COLUMNS + [LABEL_COLUMN] if col not in reader.fieldnames]
        if missing:
            raise ValueError(f"Missing columns in CSV: {', '.join(missing)}")

        for line_idx, row in enumerate(reader, start=2):
            try:
                features = [float(row[col]) for col in FEATURE_COLUMNS]
            except Exception as exc:
                raise ValueError(f"Invalid numeric value at line {line_idx}: {exc}") from exc

            raw_label = str(row.get(LABEL_COLUMN, ""))
            label = normalize_label(raw_label)
            if label in UNKNOWN_LABELS:
                if drop_unknown:
                    skipped_unknown += 1
                    continue
                raise ValueError(
                    f"Unknown label at line {line_idx}. Use --drop-unknown to ignore unknown rows."
                )

            if label not in VALID_LABELS:
                raise ValueError(
                    f"Invalid label '{raw_label}' at line {line_idx}. Valid labels: healthy, ill."
                )

            rows.append(features)
            labels.append(label)

    if not rows:
        raise ValueError("No usable labeled rows found in dataset.")

    x = np.array(rows, dtype=np.float32)
    y = np.array(labels)
    return x, y, {"skipped_unknown_rows": skipped_unknown}


def build_pipeline(
    neighbors: int,
    weights: str,
    metric: str,
    minkowski_p: int,
) -> Pipeline:
    kwargs: dict[str, Any] = {
        "n_neighbors": max(1, neighbors),
        "weights": weights,
        "metric": metric,
    }
    if metric == "minkowski":
        kwargs["p"] = max(1, minkowski_p)

    return Pipeline(
        steps=[
            ("scaler", StandardScaler()),
            ("knn", KNeighborsClassifier(**kwargs)),
        ]
    )


def fit_with_optional_tuning(
    x_train: np.ndarray,
    y_train: np.ndarray,
    args: argparse.Namespace,
) -> tuple[Pipeline, dict[str, Any]]:
    if not args.tune:
        neighbors = min(max(1, args.neighbors), max(1, len(x_train)))
        model = build_pipeline(
            neighbors=neighbors,
            weights=args.weights,
            metric=args.metric,
            minkowski_p=args.minkowski_p,
        )
        model.fit(x_train, y_train)
        return model, {
            "mode": "fixed",
            "params": model.named_steps["knn"].get_params(),
            "note": None if neighbors == args.neighbors else f"neighbors clamped from {args.neighbors} to {neighbors}",
        }

    class_counts = Counter(y_train.tolist())
    min_class = min(class_counts.values())
    cv_folds = max(2, min(args.cv_folds, min_class))
    cv = StratifiedKFold(n_splits=cv_folds, shuffle=True, random_state=args.seed)

    min_train_fold_size = len(x_train) - math.ceil(len(x_train) / cv_folds)
    max_valid_neighbors = max(1, min(13, min_train_fold_size))
    neighbor_candidates = [k for k in [1, 3, 5, 7, 9, 11, 13] if k <= max_valid_neighbors]
    if not neighbor_candidates:
        neighbor_candidates = [1]

    model = Pipeline(
        steps=[
            ("scaler", StandardScaler()),
            ("knn", KNeighborsClassifier()),
        ]
    )
    grid = {
        "knn__n_neighbors": neighbor_candidates,
        "knn__weights": ["uniform", "distance"],
        "knn__metric": ["euclidean", "manhattan", "minkowski"],
        "knn__p": [1, 2],
    }
    search = GridSearchCV(
        estimator=model,
        param_grid=grid,
        scoring=args.scoring,
        cv=cv,
        n_jobs=args.n_jobs,
        refit=True,
    )
    search.fit(x_train, y_train)
    tuning = {
        "mode": "grid_search",
        "best_score_cv": float(search.best_score_),
        "best_params": search.best_params_,
        "cv_folds": cv_folds,
        "scoring": args.scoring,
        "neighbor_candidates": neighbor_candidates,
    }
    return search.best_estimator_, tuning


def evaluate_model(
    model: Pipeline,
    x_test: np.ndarray,
    y_test: np.ndarray,
) -> dict[str, Any]:
    y_pred = np.asarray(model.predict(x_test), dtype=np.int32)
    report_text = classification_report(
        y_test,
        y_pred,
        labels=[0, 1],
        target_names=MODEL_LABEL_ORDER,
        digits=4,
        zero_division=0,
    )
    report_dict = classification_report(
        y_test,
        y_pred,
        labels=[0, 1],
        target_names=MODEL_LABEL_ORDER,
        output_dict=True,
        digits=4,
        zero_division=0,
    )
    confusion = confusion_matrix(y_test, y_pred, labels=[0, 1])

    return {
        "accuracy": float(accuracy_score(y_test, y_pred)),
        "balanced_accuracy": float(balanced_accuracy_score(y_test, y_pred)),
        "f1_macro": float(f1_score(y_test, y_pred, average="macro")),
        "classification_report_text": report_text,
        "classification_report": report_dict,
        "confusion_matrix": confusion.tolist(),
        "label_order": MODEL_LABEL_ORDER,
    }


def validate_class_counts(y: np.ndarray, min_per_class: int) -> None:
    counts = Counter(y.tolist())
    missing = [label for label in MODEL_LABEL_ORDER if label not in counts]
    if missing:
        raise ValueError(f"Missing class(es) in dataset: {', '.join(missing)}")
    too_small = [label for label, count in counts.items() if count < min_per_class]
    if too_small:
        details = ", ".join(f"{label}={counts[label]}" for label in too_small)
        raise ValueError(
            f"Not enough samples per class ({details}). "
            f"Need at least {min_per_class} each."
        )


def save_outputs(
    output_path: Path,
    report_path: Path,
    model: Pipeline,
    metrics: dict[str, Any],
    tuning_info: dict[str, Any],
    dataset_stats: dict[str, Any],
) -> None:
    output_path.parent.mkdir(parents=True, exist_ok=True)
    payload = {
        "model": model,
        "feature_columns": FEATURE_COLUMNS,
        "labels": MODEL_LABEL_ORDER,
        "metadata": {
            "trained_at_utc": datetime.now(timezone.utc).isoformat(),
            "metrics": {
                "accuracy": metrics["accuracy"],
                "balanced_accuracy": metrics["balanced_accuracy"],
                "f1_macro": metrics["f1_macro"],
            },
            "tuning": tuning_info,
            "dataset": dataset_stats,
        },
    }
    joblib.dump(payload, output_path)

    report = {
        "trained_at_utc": datetime.now(timezone.utc).isoformat(),
        "output_model": str(output_path),
        "dataset": dataset_stats,
        "tuning": tuning_info,
        "metrics": {
            "accuracy": metrics["accuracy"],
            "balanced_accuracy": metrics["balanced_accuracy"],
            "f1_macro": metrics["f1_macro"],
            "confusion_matrix": metrics["confusion_matrix"],
            "label_order": metrics["label_order"],
            "classification_report": metrics["classification_report"],
        },
    }
    report_path.parent.mkdir(parents=True, exist_ok=True)
    report_path.write_text(json.dumps(report, indent=2), encoding="utf-8")


def main() -> int:
    args = parse_args()
    report_path = args.report_json or args.output.with_suffix(".metrics.json")

    try:
        x, y_labels, loader_stats = load_dataset(args.csv, drop_unknown=args.drop_unknown)
        validate_class_counts(y_labels, min_per_class=max(2, args.min_per_class))
    except Exception as exc:
        print(f"Dataset error: {exc}", file=sys.stderr)
        return 2

    y = np.array([LABEL_TO_ID[label] for label in y_labels], dtype=np.int32)

    x_train, x_test, y_train, y_test = train_test_split(
        x,
        y,
        test_size=min(max(args.test_size, 0.05), 0.5),
        random_state=args.seed,
        stratify=y,
    )

    try:
        model, tuning_info = fit_with_optional_tuning(x_train=x_train, y_train=y_train, args=args)
        metrics = evaluate_model(model, x_test=x_test, y_test=y_test)
    except Exception as exc:
        print(f"Training error: {exc}", file=sys.stderr)
        return 2

    dataset_stats = {
        "csv": str(args.csv),
        "feature_columns": FEATURE_COLUMNS,
        "total_rows_used": int(len(y_labels)),
        "class_distribution": dict(Counter(y_labels.tolist())),
        "train_rows": int(len(y_train)),
        "test_rows": int(len(y_test)),
        "dropped_unknown_rows": int(loader_stats.get("skipped_unknown_rows", 0)),
    }

    try:
        save_outputs(
            output_path=args.output,
            report_path=report_path,
            model=model,
            metrics=metrics,
            tuning_info=tuning_info,
            dataset_stats=dataset_stats,
        )
    except Exception as exc:
        print(f"Output error: {exc}", file=sys.stderr)
        return 2

    print(f"Model saved to: {args.output}")
    print(f"Metrics report saved to: {report_path}")
    print(f"Accuracy: {metrics['accuracy']:.4f}")
    print(f"Balanced accuracy: {metrics['balanced_accuracy']:.4f}")
    print(f"F1 macro: {metrics['f1_macro']:.4f}")
    print(f"Class distribution: {dataset_stats['class_distribution']}")
    if args.tune:
        print(f"Best CV score ({tuning_info['scoring']}): {tuning_info['best_score_cv']:.4f}")
        print(f"Best params: {tuning_info['best_params']}")
    print(metrics["classification_report_text"])
    return 0


if __name__ == "__main__":
    sys.exit(main())
