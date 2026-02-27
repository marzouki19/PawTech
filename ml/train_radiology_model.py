import argparse
import csv
import os
from typing import List, Dict, Tuple

import joblib
import numpy as np
from sklearn.ensemble import RandomForestClassifier
from sklearn.model_selection import train_test_split
from sklearn.preprocessing import LabelEncoder

from radiology_features import extract_radiology_features


def read_dataset(path: str) -> List[Dict[str, str]]:
    rows: List[Dict[str, str]] = []
    with open(path, "r", encoding="utf-8") as f:
        reader = csv.DictReader(f, delimiter=";")
        for row in reader:
            rows.append(row)
    if not rows:
        raise ValueError("Radiology dataset is empty.")
    return rows


def resolve_image_path(project_dir: str, raw_path: str) -> str:
    p = (raw_path or "").strip()
    if p == "":
        return ""
    if os.path.isabs(p):
        return p
    return os.path.join(project_dir, p)


def build_training_set(rows: List[Dict[str, str]], project_dir: str) -> Tuple[np.ndarray, List[str], List[str], int]:
    x_list: List[np.ndarray] = []
    y_organ: List[str] = []
    y_severity: List[str] = []
    skipped = 0

    for row in rows:
        image_path = resolve_image_path(project_dir, row.get("image_path", ""))
        organ = (row.get("organ_label", "") or "").strip().lower()
        severity = (row.get("severity_label", "") or "").strip().lower()

        if image_path == "" or organ == "" or severity == "":
            skipped += 1
            continue
        if not os.path.exists(image_path):
            skipped += 1
            continue

        try:
            features, _ = extract_radiology_features(image_path)
            x_list.append(features)
            y_organ.append(organ)
            y_severity.append(severity)
        except Exception:
            skipped += 1

    if not x_list:
        raise ValueError("No valid radiology samples found. Check image paths and labels.")

    x = np.vstack(x_list)
    return x, y_organ, y_severity, skipped


def main() -> None:
    parser = argparse.ArgumentParser(description="Train radiology organ/severity model from annotated dataset.")
    parser.add_argument(
        "--dataset",
        default=os.path.join("ml", "data", "radiology_annotated_dataset.csv"),
        help="Semicolon-separated CSV with columns: image_path;organ_label;severity_label",
    )
    parser.add_argument(
        "--output",
        default=os.path.join("var", "ml", "radiology_model.joblib"),
        help="Output trained model bundle path.",
    )
    parser.add_argument("--n-estimators", type=int, default=300, help="RandomForest tree count")
    args = parser.parse_args()

    project_dir = os.getcwd()
    rows = read_dataset(args.dataset)
    x, y_organ_raw, y_severity_raw, skipped = build_training_set(rows, project_dir)

    organ_encoder = LabelEncoder()
    severity_encoder = LabelEncoder()
    y_organ = organ_encoder.fit_transform(y_organ_raw)
    y_severity = severity_encoder.fit_transform(y_severity_raw)

    stratify = y_severity if len(np.unique(y_severity)) > 1 and len(y_severity) >= 8 else None
    x_train, x_test, yo_train, yo_test, ys_train, ys_test = train_test_split(
        x, y_organ, y_severity, test_size=0.2, random_state=42, stratify=stratify
    )

    organ_model = RandomForestClassifier(
        n_estimators=max(100, int(args.n_estimators)),
        random_state=42,
        class_weight="balanced_subsample",
    )
    severity_model = RandomForestClassifier(
        n_estimators=max(100, int(args.n_estimators)),
        random_state=42,
        class_weight="balanced_subsample",
    )
    organ_model.fit(x_train, yo_train)
    severity_model.fit(x_train, ys_train)

    organ_acc = organ_model.score(x_test, yo_test) if len(x_test) > 0 else 1.0
    severity_acc = severity_model.score(x_test, ys_test) if len(x_test) > 0 else 1.0

    # Final fit on full data for runtime.
    organ_model.fit(x, y_organ)
    severity_model.fit(x, y_severity)

    bundle = {
        "model_type": "radiology_rf_v1",
        "feature_version": 1,
        "organ_model": organ_model,
        "severity_model": severity_model,
        "organ_encoder": organ_encoder,
        "severity_encoder": severity_encoder,
    }

    os.makedirs(os.path.dirname(args.output), exist_ok=True)
    joblib.dump(bundle, args.output)

    print(f"Radiology model saved to: {args.output}")
    print(f"Samples used: {len(x)}")
    print(f"Rows skipped: {skipped}")
    print(f"Organ accuracy: {organ_acc:.3f}")
    print(f"Severity accuracy: {severity_acc:.3f}")


if __name__ == "__main__":
    main()

