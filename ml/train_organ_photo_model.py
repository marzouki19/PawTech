import argparse
import os
from typing import Dict, List, Tuple

import joblib
import numpy as np
from PIL import Image
from sklearn.model_selection import train_test_split
from sklearn.neighbors import KNeighborsClassifier
from sklearn.preprocessing import LabelEncoder


VALID_EXT = (".jpg", ".jpeg", ".png", ".webp", ".bmp")


def extract_features(path: str, target_size: Tuple[int, int] = (128, 128)) -> np.ndarray:
    img = Image.open(path).convert("RGB").resize(target_size)
    arr_rgb = np.asarray(img, dtype=np.float32)

    img_hsv = img.convert("HSV")
    arr_hsv = np.asarray(img_hsv, dtype=np.float32)
    h = arr_hsv[:, :, 0].ravel()
    s = arr_hsv[:, :, 1].ravel()
    v = arr_hsv[:, :, 2].ravel()
    hist_hsv, _ = np.histogramdd(
        np.stack([h, s, v], axis=1),
        bins=(16, 8, 8),
        range=((0, 255), (0, 255), (0, 255)),
        density=True,
    )
    hist_hsv = hist_hsv.flatten()

    gray = np.asarray(img.convert("L"), dtype=np.float32)
    gx = np.abs(np.diff(gray, axis=1))
    gy = np.abs(np.diff(gray, axis=0))
    edge_mean = float((gx.mean() + gy.mean()) / 2.0)
    edge_std = float((gx.std() + gy.std()) / 2.0)

    color_std = np.std(arr_rgb.reshape(-1, 3), axis=0)
    color_mean = np.mean(arr_rgb.reshape(-1, 3), axis=0)

    extra = np.array(
        [
            float(gray.mean()),
            float(gray.std()),
            edge_mean,
            edge_std,
            float(color_mean[0]),
            float(color_mean[1]),
            float(color_mean[2]),
            float(color_std[0]),
            float(color_std[1]),
            float(color_std[2]),
        ],
        dtype=np.float32,
    )

    vec = np.concatenate([hist_hsv.astype(np.float32), extra], axis=0)
    norm = float(np.linalg.norm(vec))
    if norm > 0:
        vec = vec / norm
    return vec


def load_dataset(dataset_dir: str) -> Tuple[np.ndarray, List[str], Dict[str, int]]:
    x_rows: List[np.ndarray] = []
    y_labels: List[str] = []
    counts: Dict[str, int] = {}

    for organ in sorted(os.listdir(dataset_dir)):
        organ_dir = os.path.join(dataset_dir, organ)
        if not os.path.isdir(organ_dir):
            continue

        for filename in os.listdir(organ_dir):
            if not filename.lower().endswith(VALID_EXT):
                continue
            path = os.path.join(organ_dir, filename)
            try:
                x_rows.append(extract_features(path))
                y_labels.append(organ.lower())
                counts[organ.lower()] = counts.get(organ.lower(), 0) + 1
            except Exception:
                continue

    if not x_rows:
        raise RuntimeError(f"No valid images found in {dataset_dir}")

    return np.vstack(x_rows), y_labels, counts


def main() -> None:
    parser = argparse.ArgumentParser(description="Train dog-organ clinical photo classifier.")
    parser.add_argument("--dataset-dir", default=os.path.join("ml", "data", "organ_photo_dataset"))
    parser.add_argument("--output", default=os.path.join("var", "ml", "organ_photo_model.joblib"))
    parser.add_argument("--neighbors", type=int, default=7)
    args = parser.parse_args()

    x, y_raw, counts = load_dataset(args.dataset_dir)
    encoder = LabelEncoder()
    y = encoder.fit_transform(y_raw)

    unique_classes = len(set(y_raw))
    if unique_classes < 2:
        raise RuntimeError("Need at least 2 organ classes to train a classifier.")

    n_neighbors = max(1, min(args.neighbors, len(y_raw)))
    model = KNeighborsClassifier(n_neighbors=n_neighbors, weights="distance", metric="cosine")

    can_eval = min(counts.values()) >= 2 and len(y_raw) >= 20
    accuracy = None
    if can_eval:
        x_train, x_test, y_train, y_test = train_test_split(
            x, y, test_size=0.2, random_state=42, stratify=y
        )
        model.fit(x_train, y_train)
        accuracy = float(model.score(x_test, y_test))
    else:
        model.fit(x, y)

    os.makedirs(os.path.dirname(args.output), exist_ok=True)
    bundle = {
        "model": model,
        "label_encoder": encoder,
        "class_counts": counts,
        "feature_version": "organ_photo_v1",
        "neighbors": n_neighbors,
        "accuracy": accuracy,
    }
    joblib.dump(bundle, args.output)

    print(f"Model saved to: {args.output}")
    print(f"Classes: {', '.join(sorted(counts.keys()))}")
    print(f"Samples: {len(y_raw)}")
    print(f"Neighbors: {n_neighbors}")
    if accuracy is not None:
        print(f"Validation accuracy: {accuracy:.3f}")
    else:
        print("Validation accuracy: skipped (not enough balanced samples).")


if __name__ == "__main__":
    main()
