# Dog Health KNN Workflow (For Presentation)

This workflow is designed to be explainable to teachers and reproducible.

## 1) Build a Real Dataset

Collect dog crops and feature rows from your camera stream:

```bash
python/venv/bin/python python/collect_dog_health_dataset.py \
  --source "rtsp://192.168.1.157:554/stream" \
  --label-mode unknown \
  --rtsp-transport udp \
  --conf 0.15 \
  --frame-skip 1 \
  --max-samples 300
```

Output:
- Images: `python/data/health_dataset/images/`
- Metadata CSV: `python/data/health_dataset/samples.csv`

Each row stores:
- Feature vector: `foam_ratio`, `red_eye_ratio`, `motion_ratio`, `edge_ratio`, `mean_saturation`
- Bounding box + confidence + source + timestamp
- Label (initially `unknown`)

## 2) Label Data Carefully

Label each sample manually:

```bash
python/venv/bin/python python/label_dog_health_dataset.py \
  --csv python/data/health_dataset/samples.csv \
  --backup
```

Keyboard:
- `h` => healthy
- `i` => ill
- `u` => unknown
- `s` => skip
- `q` => save and quit

Good practice:
- Keep classes balanced (similar healthy and ill counts).
- Remove blurry/ambiguous examples.

## 3) Train + Tune KNN

Run hyperparameter tuning with cross-validation:

```bash
python/venv/bin/python python/train_dog_health_knn.py \
  --csv python/data/health_dataset/samples.csv \
  --drop-unknown \
  --tune \
  --cv-folds 5 \
  --scoring f1_macro \
  --output python/models/dog_health_knn.joblib
```

Output:
- Model file: `python/models/dog_health_knn.joblib`
- Metrics report: `python/models/dog_health_knn.metrics.json`

## 4) Evaluate What Matters

For teacher presentation, report:
- Accuracy
- Balanced accuracy (important when classes are imbalanced)
- F1 macro
- Confusion matrix (`healthy` vs `ill`)
- Best KNN hyperparameters (from grid search)

## 5) Run in Live Detection

```bash
python/venv/bin/python python/ip_camera_dog_detector.py \
  --source "rtsp://192.168.1.157:554/stream" \
  --health-knn-model python/models/dog_health_knn.joblib \
  --camera-id 1 \
  --no-display \
  --follow-dog \
  --ptz-control-url "http://127.0.0.1:8000/admin/stations/cameras/1/control"
```

For Symfony web overlay, the detector writes live JSON to:
`/tmp/pawtech_live_detections_camera_1.json`
and the page reads it via:
`/admin/stations/cameras/1/live-detections`

## 6) How to Improve Accuracy (Practical)

1. Collect more diverse samples:
   - Day/night, indoor/outdoor, different breeds, different distances.
2. Balance labels:
   - Similar counts for `healthy` and `ill`.
3. Improve label quality:
   - Re-check uncertain samples; keep only confident labels.
4. Tune thresholds and KNN:
   - Use `--tune` and compare `f1_macro`.
5. Avoid data leakage:
   - Keep near-duplicate frames low (cooldown/frame-skip in collector).
6. Validate with confusion matrix:
   - Focus on reducing false negatives (ill predicted as healthy).
