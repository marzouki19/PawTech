# Dog Health Detection: Start & Test Guide

This guide is for the minimal pipeline in this project.

## 1) Open project

```bash
cd "/Users/saber/Desktop/PI DEV/gestion-observation"
```

## 2) Install dependencies

Use the project virtual environment:

```bash
./venv/bin/pip install -r python/requirements-dog-detector.txt
```

If `numpy`/`sklearn` errors appear, this step is missing.

## 3) Prepare (clean) dataset

Run cleaner on your dataset CSV:

```bash
./venv/bin/python python/enhance_dog_health_dataset.py \
  --csv python/data/health_dataset/samples.csv \
  --infer-unknown \
  --output python/data/health_dataset/samples_clean.csv
```

Quick check of resulting labels:

```bash
./venv/bin/python -c "import csv,collections; r=list(csv.DictReader(open('python/data/health_dataset/samples_clean.csv'))); print(collections.Counter(x['label'] for x in r))"
```

## 4) Train model

```bash
./venv/bin/python python/train_dog_health_knn.py \
  --csv python/data/health_dataset/samples_clean.csv \
  --drop-unknown \
  --neighbors 5 \
  --output python/models/dog_health_knn.joblib
```

Expected outputs:
- Model: `python/models/dog_health_knn.joblib`
- Metrics: `python/models/dog_health_knn.metrics.json`

## 5) Test training result

Print key metrics:

```bash
./venv/bin/python -c "import json; d=json.load(open('python/models/dog_health_knn.metrics.json')); print('accuracy=',d['metrics']['accuracy']); print('f1_macro=',d['metrics']['f1_macro']); print('confusion=',d['metrics']['confusion_matrix'])"
```

## 6) Live test with camera

```bash
./venv/bin/python python/ip_camera_dog_detector.py \
  --source "rtsp://YOUR_CAMERA_STREAM" \
  --health-knn-model python/models/dog_health_knn.joblib \
  --camera-id 1 \
  --no-display
```

If running with UI, remove `--no-display`.

## 7) Verify live output file

Detector writes live JSON for Symfony/UI:

```bash
cat /tmp/pawtech_live_detections_camera_1.json
```

Look for fields like:
- `dog_count`
- `detections`
- `health_label`
- `health_confidence`
- `symptoms`

## Common issues

1. `ModuleNotFoundError`:
- Re-run step 2 with `./venv/bin/pip ...`

2. `CSV not found`:
- Check path in `--csv`.

3. `Not enough samples for 'healthy'/'ill'`:
- Add more labeled rows or infer unknown labels in step 3.

4. `KNN health model not found`:
- Train first (step 4) and pass correct `--health-knn-model` path.
