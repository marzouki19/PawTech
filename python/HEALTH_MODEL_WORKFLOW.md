# Minimal Dog Health Workflow

## 1) Install dependencies

```bash
./venv/bin/pip install -r python/requirements-dog-detector.txt
```

## 2) Clean dataset (optional but recommended)

```bash
./venv/bin/python python/enhance_dog_health_dataset.py \
  --csv python/data/health_dataset/samples.csv \
  --infer-unknown \
  --output python/data/health_dataset/samples_clean.csv
```

## 3) Train model

```bash
./venv/bin/python python/train_dog_health_knn.py \
  --csv python/data/health_dataset/samples_clean.csv \
  --drop-unknown \
  --neighbors 5 \
  --output python/models/dog_health_knn.joblib
```

## 4) Run live detector

```bash
./venv/bin/python python/ip_camera_dog_detector.py \
  --source "rtsp://YOUR_CAMERA_STREAM" \
  --health-knn-model python/models/dog_health_knn.joblib \
  --camera-id 1
```
