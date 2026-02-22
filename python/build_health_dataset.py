#!/usr/bin/env python3
"""Build a clean labeled dataset (healthy vs ill) from local dog image folders."""

from __future__ import annotations

import argparse
import csv
import hashlib
import json
import os
import random
import shutil
from collections import Counter, defaultdict
from dataclasses import dataclass
from pathlib import Path
from typing import Optional

from PIL import Image, UnidentifiedImageError


DEFAULT_CLASS_MAP = {
    "healthy_stray_dogs": "healthy",
    "contagious_stray_dogs": "ill",
}

SUPPORTED_EXTENSIONS = {".jpg", ".jpeg", ".png", ".bmp", ".webp"}


@dataclass(frozen=True)
class RawSample:
    source_path: Path
    source_folder: str
    label: str
    sha256: str
    width: int
    height: int
    image_format: str


@dataclass(frozen=True)
class DatasetSample:
    source_path: Path
    source_folder: str
    label: str
    sha256: str
    width: int
    height: int
    image_format: str
    split: str
    dataset_path: Path


def parse_class_map(values: list[str]) -> dict[str, str]:
    if not values:
        return dict(DEFAULT_CLASS_MAP)

    mapping: dict[str, str] = {}
    for item in values:
        if "=" not in item:
            raise ValueError(f"Invalid --class-map entry '{item}'. Expected format folder=label.")
        folder, label = item.split("=", 1)
        folder = folder.strip()
        label = label.strip().lower()
        if not folder or not label:
            raise ValueError(f"Invalid --class-map entry '{item}'. Folder and label are required.")
        mapping[folder] = label
    return mapping


def sha256_file(path: Path) -> str:
    digest = hashlib.sha256()
    with path.open("rb") as fh:
        while True:
            chunk = fh.read(1024 * 1024)
            if not chunk:
                break
            digest.update(chunk)
    return digest.hexdigest()


def validate_image(path: Path) -> tuple[bool, int, int, str, Optional[str]]:
    try:
        with Image.open(path) as image:
            width, height = image.size
            image_format = image.format or "UNKNOWN"
            image.load()
        return True, width, height, image_format, None
    except (UnidentifiedImageError, OSError, ValueError) as exc:
        return False, 0, 0, "", str(exc)


def collect_samples(
    input_root: Path,
    class_map: dict[str, str],
) -> tuple[list[RawSample], list[dict[str, str]], list[str], Counter]:
    valid_samples: list[RawSample] = []
    invalid_rows: list[dict[str, str]] = []
    missing_folders: list[str] = []
    raw_counts: Counter = Counter()

    for folder_name, label in sorted(class_map.items()):
        folder_path = input_root / folder_name
        if not folder_path.is_dir():
            missing_folders.append(folder_name)
            continue

        for file_path in sorted(folder_path.rglob("*")):
            if not file_path.is_file():
                continue

            suffix = file_path.suffix.lower()
            if suffix and suffix not in SUPPORTED_EXTENSIONS:
                invalid_rows.append(
                    {
                        "source_path": str(file_path),
                        "source_folder": folder_name,
                        "label": label,
                        "reason": f"unsupported_extension:{suffix}",
                    }
                )
                continue

            raw_counts[label] += 1
            ok, width, height, image_format, error = validate_image(file_path)
            if not ok:
                invalid_rows.append(
                    {
                        "source_path": str(file_path),
                        "source_folder": folder_name,
                        "label": label,
                        "reason": error or "invalid_image",
                    }
                )
                continue

            valid_samples.append(
                RawSample(
                    source_path=file_path,
                    source_folder=folder_name,
                    label=label,
                    sha256=sha256_file(file_path),
                    width=width,
                    height=height,
                    image_format=image_format,
                )
            )

    return valid_samples, invalid_rows, missing_folders, raw_counts


def deduplicate_samples(
    samples: list[RawSample],
    keep_same_class_duplicates: bool,
    allow_conflicting_hash: bool,
) -> tuple[list[RawSample], list[RawSample], list[RawSample]]:
    by_hash: dict[str, list[RawSample]] = defaultdict(list)
    for sample in samples:
        by_hash[sample.sha256].append(sample)

    kept: list[RawSample] = []
    dropped_same_class: list[RawSample] = []
    dropped_conflicts: list[RawSample] = []

    for _sha, group in sorted(by_hash.items(), key=lambda item: item[0]):
        group_sorted = sorted(group, key=lambda item: str(item.source_path))
        labels = {item.label for item in group_sorted}

        if len(labels) > 1 and not allow_conflicting_hash:
            dropped_conflicts.extend(group_sorted)
            continue

        if keep_same_class_duplicates or len(group_sorted) == 1:
            kept.extend(group_sorted)
            continue

        kept.append(group_sorted[0])
        dropped_same_class.extend(group_sorted[1:])

    return kept, dropped_same_class, dropped_conflicts


def stratified_split(
    samples: list[RawSample],
    train_ratio: float,
    val_ratio: float,
    seed: int,
) -> dict[str, list[RawSample]]:
    splits: dict[str, list[RawSample]] = {"train": [], "val": [], "test": []}
    by_label: dict[str, list[RawSample]] = defaultdict(list)

    for sample in samples:
        by_label[sample.label].append(sample)

    rng = random.Random(seed)
    for _label, label_samples in sorted(by_label.items(), key=lambda item: item[0]):
        bucket = sorted(label_samples, key=lambda item: str(item.source_path))
        rng.shuffle(bucket)

        count = len(bucket)
        train_count = int(count * train_ratio)
        val_count = int(count * val_ratio)
        test_count = count - train_count - val_count

        if count >= 3 and val_ratio > 0 and val_count == 0:
            val_count = 1
            if train_count > 1:
                train_count -= 1
            else:
                test_count -= 1
        test_count = count - train_count - val_count

        splits["train"].extend(bucket[:train_count])
        splits["val"].extend(bucket[train_count : train_count + val_count])
        splits["test"].extend(bucket[train_count + val_count : train_count + val_count + test_count])

    return splits


def remove_directory_contents(path: Path) -> None:
    if not path.exists():
        return
    for child in path.iterdir():
        if child.is_dir():
            shutil.rmtree(child)
        else:
            child.unlink()


def copy_sample(source: Path, destination: Path, mode: str) -> None:
    destination.parent.mkdir(parents=True, exist_ok=True)
    if destination.exists() or destination.is_symlink():
        destination.unlink()

    if mode == "copy":
        shutil.copy2(source, destination)
    elif mode == "symlink":
        os.symlink(source.resolve(), destination)
    elif mode == "hardlink":
        os.link(source, destination)
    else:
        raise ValueError(f"Unsupported copy mode: {mode}")


def safe_destination_name(source: Path, sha256: str) -> str:
    suffix = source.suffix.lower() or ".jpg"
    stem = "".join(char if (char.isalnum() or char in ("-", "_")) else "_" for char in source.stem)
    return f"{stem}_{sha256[:12]}{suffix}"


def materialize_dataset(
    splits: dict[str, list[RawSample]],
    output_root: Path,
    copy_mode: str,
) -> list[DatasetSample]:
    dataset_rows: list[DatasetSample] = []

    for split_name in ("train", "val", "test"):
        split_samples = splits.get(split_name, [])
        for sample in split_samples:
            destination_name = safe_destination_name(sample.source_path, sample.sha256)
            destination = output_root / split_name / sample.label / destination_name
            copy_sample(sample.source_path, destination, copy_mode)
            dataset_rows.append(
                DatasetSample(
                    source_path=sample.source_path,
                    source_folder=sample.source_folder,
                    label=sample.label,
                    sha256=sample.sha256,
                    width=sample.width,
                    height=sample.height,
                    image_format=sample.image_format,
                    split=split_name,
                    dataset_path=destination,
                )
            )

    return dataset_rows


def write_manifest(path: Path, rows: list[DatasetSample], dataset_root: Path) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    with path.open("w", encoding="utf-8", newline="") as csvfile:
        writer = csv.writer(csvfile)
        writer.writerow(
            [
                "split",
                "label",
                "source_folder",
                "source_path",
                "dataset_path",
                "dataset_rel_path",
                "sha256",
                "width",
                "height",
                "image_format",
            ]
        )
        for row in sorted(rows, key=lambda item: (item.split, item.label, str(item.dataset_path))):
            dataset_rel = row.dataset_path.relative_to(dataset_root)
            writer.writerow(
                [
                    row.split,
                    row.label,
                    row.source_folder,
                    str(row.source_path),
                    str(row.dataset_path),
                    str(dataset_rel),
                    row.sha256,
                    row.width,
                    row.height,
                    row.image_format,
                ]
            )


def write_simple_csv(path: Path, rows: list[dict[str, str]], headers: list[str]) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    with path.open("w", encoding="utf-8", newline="") as csvfile:
        writer = csv.DictWriter(csvfile, fieldnames=headers)
        writer.writeheader()
        for row in rows:
            writer.writerow(row)


def parse_args() -> argparse.Namespace:
    parser = argparse.ArgumentParser(description="Create clean labeled dataset: healthy vs ill.")
    parser.add_argument("--input-root", default="python/data", help="Source root containing class folders.")
    parser.add_argument("--output-root", default="python/data/health_dataset", help="Dataset output directory.")
    parser.add_argument(
        "--class-map",
        action="append",
        default=[],
        help="Class folder to label mapping, e.g. healthy_stray_dogs=healthy. Repeat for multiple mappings.",
    )
    parser.add_argument("--train-ratio", type=float, default=0.70)
    parser.add_argument("--val-ratio", type=float, default=0.15)
    parser.add_argument("--seed", type=int, default=42)
    parser.add_argument("--copy-mode", choices=("copy", "symlink", "hardlink"), default="copy")
    parser.add_argument("--clean-output", action="store_true", help="Delete existing output folder contents.")
    parser.add_argument(
        "--keep-same-class-duplicates",
        action="store_true",
        help="Keep duplicate hashes when duplicates belong to same label.",
    )
    parser.add_argument(
        "--allow-conflicting-hash",
        action="store_true",
        help="Keep hashes that appear in multiple labels (not recommended).",
    )
    return parser.parse_args()


def main() -> int:
    args = parse_args()

    if not (0 < args.train_ratio < 1):
        raise SystemExit("train-ratio must be in (0,1)")
    if not (0 <= args.val_ratio < 1):
        raise SystemExit("val-ratio must be in [0,1)")
    if args.train_ratio + args.val_ratio >= 1:
        raise SystemExit("train-ratio + val-ratio must be < 1")

    try:
        class_map = parse_class_map(args.class_map)
    except ValueError as exc:
        raise SystemExit(str(exc)) from exc

    input_root = Path(args.input_root).resolve()
    output_root = Path(args.output_root).resolve()
    metadata_root = output_root / "meta"

    samples, invalid_rows, missing_folders, raw_counts = collect_samples(input_root, class_map)
    deduped, dropped_same_class, dropped_conflicts = deduplicate_samples(
        samples,
        keep_same_class_duplicates=args.keep_same_class_duplicates,
        allow_conflicting_hash=args.allow_conflicting_hash,
    )
    splits = stratified_split(
        deduped,
        train_ratio=args.train_ratio,
        val_ratio=args.val_ratio,
        seed=args.seed,
    )

    if args.clean_output:
        output_root.mkdir(parents=True, exist_ok=True)
        remove_directory_contents(output_root)

    output_root.mkdir(parents=True, exist_ok=True)
    dataset_rows = materialize_dataset(splits, output_root, args.copy_mode)

    manifest_path = metadata_root / "manifest.csv"
    invalid_path = metadata_root / "invalid_images.csv"
    dropped_same_path = metadata_root / "dropped_same_class_duplicates.csv"
    dropped_conflict_path = metadata_root / "dropped_conflicting_hashes.csv"
    summary_path = metadata_root / "summary.json"

    write_manifest(manifest_path, dataset_rows, output_root)
    write_simple_csv(
        invalid_path,
        invalid_rows,
        headers=["source_path", "source_folder", "label", "reason"],
    )
    write_simple_csv(
        dropped_same_path,
        [
            {
                "source_path": str(item.source_path),
                "source_folder": item.source_folder,
                "label": item.label,
                "sha256": item.sha256,
            }
            for item in dropped_same_class
        ],
        headers=["source_path", "source_folder", "label", "sha256"],
    )
    write_simple_csv(
        dropped_conflict_path,
        [
            {
                "source_path": str(item.source_path),
                "source_folder": item.source_folder,
                "label": item.label,
                "sha256": item.sha256,
            }
            for item in dropped_conflicts
        ],
        headers=["source_path", "source_folder", "label", "sha256"],
    )

    split_counts: dict[str, Counter] = defaultdict(Counter)
    for row in dataset_rows:
        split_counts[row.split][row.label] += 1

    summary = {
        "input_root": str(input_root),
        "output_root": str(output_root),
        "class_map": class_map,
        "missing_folders": missing_folders,
        "raw_counts_by_label": dict(raw_counts),
        "valid_before_dedup": len(samples),
        "invalid_count": len(invalid_rows),
        "dropped_same_class_duplicates": len(dropped_same_class),
        "dropped_conflicting_hashes": len(dropped_conflicts),
        "kept_after_dedup": len(deduped),
        "copy_mode": args.copy_mode,
        "split_counts": {split: dict(counts) for split, counts in split_counts.items()},
        "manifest_path": str(manifest_path),
    }
    summary_path.write_text(json.dumps(summary, indent=2), encoding="utf-8")

    print("Dataset build complete.")
    print(json.dumps(summary, indent=2))
    return 0


if __name__ == "__main__":
    raise SystemExit(main())
