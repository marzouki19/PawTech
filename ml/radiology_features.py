import os
from typing import Dict, Tuple

import numpy as np
from PIL import Image


def edge_density(gray: np.ndarray) -> float:
    gy = np.abs(np.diff(gray, axis=0))
    gx = np.abs(np.diff(gray, axis=1))
    g = np.zeros_like(gray)
    g[:-1, :-1] = (gx[:-1, :] + gy[:, :-1]) / 2.0
    threshold = np.percentile(g, 85)
    return float(np.mean(g > threshold))


def entropy(gray: np.ndarray) -> float:
    hist, _ = np.histogram(gray, bins=256, range=(0, 255), density=True)
    hist = hist[hist > 0]
    return float(-(hist * np.log2(hist)).sum())


def load_gray_image(path: str, target_size: Tuple[int, int] = (256, 256)) -> np.ndarray:
    if not os.path.exists(path):
        raise FileNotFoundError(f"Image not found: {path}")
    image = Image.open(path).convert("L").resize(target_size)
    return np.asarray(image, dtype=np.float32)


def extract_radiology_features(path: str) -> Tuple[np.ndarray, Dict[str, float]]:
    gray = load_gray_image(path)
    h, w = gray.shape

    top = gray[: h // 3, :]
    mid = gray[h // 3 : (2 * h) // 3, :]
    bottom = gray[(2 * h) // 3 :, :]
    center = gray[h // 4 : (3 * h) // 4, w // 4 : (3 * w) // 4]
    left = gray[:, : w // 2]
    right = gray[:, w // 2 :]

    ent = entropy(gray)
    edges = edge_density(gray)
    low_light = float(np.mean(gray < 40))
    high_light = float(np.mean(gray > 220))

    hist_16, _ = np.histogram(gray, bins=16, range=(0, 255), density=True)

    feats = [
        float(gray.mean()),
        float(gray.std()),
        ent,
        edges,
        low_light,
        high_light,
        float(top.mean()),
        float(top.std()),
        float(mid.mean()),
        float(mid.std()),
        float(bottom.mean()),
        float(bottom.std()),
        float(center.mean()),
        float(center.std()),
        float(left.mean()),
        float(left.std()),
        float(right.mean()),
        float(right.std()),
        float(np.mean(center > 210)),
        float(np.mean(bottom > 210)),
        float(np.mean(mid > 210)),
        float(np.mean(center < 45)),
    ]

    feats.extend([float(v) for v in hist_16.tolist()])
    vector = np.array(feats, dtype=np.float32)

    debug = {
        "mean": float(gray.mean()),
        "std": float(gray.std()),
        "entropy": ent,
        "edges": edges,
        "low_light": low_light,
        "high_light": high_light,
    }
    return vector, debug

