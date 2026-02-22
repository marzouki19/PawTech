#!/usr/bin/env python3
"""Train a simple KNN model for dog health classification (healthy vs ill)."""

from __future__ import annotations

import argparse
import json
from collections import Counter
from dataclasses import dataclass
from pathlib import Path
import numpy as np
from PIL import Image


SUPPORTED_EXTENSIONS = {".jpg", ".jpeg", ".png", ".bmp", ".webp"}


@dataclass(frozen=True)
class SplitData:
    x: np.ndarray
    y: np.ndarray
    paths: list[str]


def list_images(folder: Path) -> list[Path]:
    files: list[Path] = []
    for path in sorted(folder.rglob("*")):
        if path.is_file() and path.suffix.lower() in SUPPORTED_EXTENSIONS:
            files.append(path)
    return files


def image_to_vector(path: Path, image_size: int) -> np.ndarray:
    with Image.open(path) as image:
        image = image.convert("L")
        image = image.resize((image_size, image_size), Image.BILINEAR)
        array = np.asarray(image, dtype=np.float32) / 255.0
    return array.reshape(-1)


def load_split(split_dir: Path, class_names: list[str], image_size: int) -> SplitData:
    vectors: list[np.ndarray] = []
    labels: list[int] = []
    paths: list[str] = []

    for class_index, class_name in enumerate(class_names):
        class_dir = split_dir / class_name
        if not class_dir.is_dir():
            continue

        for image_path in list_images(class_dir):
            try:
                vector = image_to_vector(image_path, image_size)
            except Exception:
                continue
            vectors.append(vector)
            labels.append(class_index)
            paths.append(str(image_path))

    if vectors:
        x = np.stack(vectors, axis=0)
        y = np.asarray(labels, dtype=np.int64)
    else:
        x = np.zeros((0, image_size * image_size), dtype=np.float32)
        y = np.zeros((0,), dtype=np.int64)

    return SplitData(x=x, y=y, paths=paths)


def compute_normalization(x_train: np.ndarray) -> tuple[np.ndarray, np.ndarray]:
    mean = x_train.mean(axis=0, keepdims=True)
    std = x_train.std(axis=0, keepdims=True)
    std = np.where(std < 1e-6, 1.0, std)
    return mean, std


def apply_normalization(x: np.ndarray, mean: np.ndarray, std: np.ndarray) -> np.ndarray:
    return (x - mean) / std


def vote_majority(neighbor_labels: np.ndarray, neighbor_distances: np.ndarray, num_classes: int) -> int:
    counts = np.bincount(neighbor_labels, minlength=num_classes)
    winners = np.flatnonzero(counts == counts.max())
    if len(winners) == 1:
        return int(winners[0])

    # Tie-break: choose class with lower average distance among tied classes.
    best_class = int(winners[0])
    best_distance = float("inf")
    for class_idx in winners:
        mask = neighbor_labels == class_idx
        class_distance = float(neighbor_distances[mask].mean())
        if class_distance < best_distance:
            best_distance = class_distance
            best_class = int(class_idx)
    return best_class


def predict_knn(
    x_train: np.ndarray,
    y_train: np.ndarray,
    x_query: np.ndarray,
    k: int,
    num_classes: int,
    batch_size: int = 128,
) -> np.ndarray:
    if len(x_query) == 0:
        return np.zeros((0,), dtype=np.int64)
    if len(x_train) == 0:
        raise ValueError("Training set is empty.")

    k = max(1, min(k, len(x_train)))
    predictions: list[int] = []

    for start in range(0, len(x_query), batch_size):
        end = min(start + batch_size, len(x_query))
        batch = x_query[start:end]  # [B, F]
        # Squared L2 distance between each query and each train sample.
        distances = ((batch[:, None, :] - x_train[None, :, :]) ** 2).sum(axis=2)  # [B, N]
        neighbor_indices = np.argpartition(distances, kth=k - 1, axis=1)[:, :k]

        row_indices = np.arange(neighbor_indices.shape[0])[:, None]
        neighbor_distances = distances[row_indices, neighbor_indices]
        neighbor_labels = y_train[neighbor_indices]

        for i in range(neighbor_labels.shape[0]):
            predictions.append(
                vote_majority(
                    neighbor_labels=neighbor_labels[i],
                    neighbor_distances=neighbor_distances[i],
                    num_classes=num_classes,
                )
            )

    return np.asarray(predictions, dtype=np.int64)


def accuracy(y_true: np.ndarray, y_pred: np.ndarray) -> float:
    if len(y_true) == 0:
        return 0.0
    return float((y_true == y_pred).mean())


def confusion_matrix(y_true: np.ndarray, y_pred: np.ndarray, num_classes: int) -> list[list[int]]:
    matrix = np.zeros((num_classes, num_classes), dtype=np.int64)
    for true_idx, pred_idx in zip(y_true, y_pred):
        matrix[int(true_idx), int(pred_idx)] += 1
    return matrix.tolist()


def count_labels(y: np.ndarray, class_names: list[str]) -> dict[str, int]:
    result = {name: 0 for name in class_names}
    counts = Counter(y.tolist())
    for class_index, class_name in enumerate(class_names):
        result[class_name] = int(counts.get(class_index, 0))
    return result


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(description="Train KNN model for dog health classification.")
    parser.add_argument("--dataset-root", default="python/data/health_dataset")
    parser.add_argument("--image-size", type=int, default=64, help="Resize images to image-size x image-size.")
    parser.add_argument("--k", type=int, default=5, help="Number of nearest neighbors.")
    parser.add_argument("--model-out", default="python/models/knn_dog_health.npz")
    parser.add_argument("--report-out", default="python/models/knn_dog_health_report.json")
    parser.add_argument("--include-val-in-train", action="store_true")
    return parser.parse_args()


def main() -> int:
    args = parse_args()
    dataset_root = Path(args.dataset_root).resolve()
    train_dir = dataset_root / "train"
    val_dir = dataset_root / "val"
    test_dir = dataset_root / "test"

    if args.image_size < 16:
        raise SystemExit("image-size must be >= 16")
    if args.k < 1:
        raise SystemExit("k must be >= 1")
    if not train_dir.is_dir():
        raise SystemExit(f"train split not found: {train_dir}")

    class_names = sorted([path.name for path in train_dir.iterdir() if path.is_dir()])
    if not class_names:
        raise SystemExit(f"No class folders found in {train_dir}")

    train_data = load_split(train_dir, class_names, args.image_size)
    val_data = load_split(val_dir, class_names, args.image_size)
    test_data = load_split(test_dir, class_names, args.image_size)

    if len(train_data.x) == 0:
        raise SystemExit("No training images found.")

    x_train = train_data.x
    y_train = train_data.y
    if args.include_val_in_train and len(val_data.x) > 0:
        x_train = np.concatenate([x_train, val_data.x], axis=0)
        y_train = np.concatenate([y_train, val_data.y], axis=0)

    mean, std = compute_normalization(x_train)
    x_train_norm = apply_normalization(x_train, mean, std)
    x_val_norm = apply_normalization(val_data.x, mean, std)
    x_test_norm = apply_normalization(test_data.x, mean, std)

    y_val_pred = predict_knn(x_train_norm, y_train, x_val_norm, args.k, num_classes=len(class_names))
    y_test_pred = predict_knn(x_train_norm, y_train, x_test_norm, args.k, num_classes=len(class_names))

    val_accuracy = accuracy(val_data.y, y_val_pred)
    test_accuracy = accuracy(test_data.y, y_test_pred)

    model_out = Path(args.model_out).resolve()
    model_out.parent.mkdir(parents=True, exist_ok=True)
    np.savez_compressed(
        model_out,
        x_train=x_train_norm.astype(np.float32),
        y_train=y_train.astype(np.int64),
        class_names=np.asarray(class_names),
        image_size=np.asarray([args.image_size], dtype=np.int64),
        k=np.asarray([args.k], dtype=np.int64),
        mean=mean.astype(np.float32),
        std=std.astype(np.float32),
    )

    report = {
        "dataset_root": str(dataset_root),
        "class_names": class_names,
        "image_size": args.image_size,
        "k": args.k,
        "include_val_in_train": bool(args.include_val_in_train),
        "counts": {
            "train": count_labels(train_data.y, class_names),
            "val": count_labels(val_data.y, class_names),
            "test": count_labels(test_data.y, class_names),
        },
        "metrics": {
            "val_accuracy": val_accuracy,
            "test_accuracy": test_accuracy,
            "val_confusion_matrix": confusion_matrix(val_data.y, y_val_pred, len(class_names)),
            "test_confusion_matrix": confusion_matrix(test_data.y, y_test_pred, len(class_names)),
        },
        "model_path": str(model_out),
    }

    report_out = Path(args.report_out).resolve()
    report_out.parent.mkdir(parents=True, exist_ok=True)
    report_out.write_text(json.dumps(report, indent=2), encoding="utf-8")

    print("KNN training complete")
    print(json.dumps(report, indent=2))
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
