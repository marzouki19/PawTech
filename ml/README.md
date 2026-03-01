# KNN Veterinary Module

This module trains and runs a local KNN model for:
- emergency level prediction (`low`, `medium`, `high`, `critical`)
- probable condition label

## 1. Install Python deps

```bash
pip install -r ml/requirements.txt
```

## 2. Train model

```bash
python ml/train_knn.py
```

Model output:
- `var/ml/vet_knn_model.joblib`

## 3. Quick predict test

```bash
echo {"symptoms":"cough wheezing rapid breathing","affected_parts":["lungs"],"consultation_type":"Pulmonary"} | python ml/predict_knn.py
```

## Notes

- Dataset file: `ml/data/vet_knn_dataset.csv`
- Delimiter is `;`
- Symfony service uses this predictor script automatically when model exists.

## Radiology annotated model (optional, advanced)

### Dataset

Use: `ml/data/radiology_annotated_dataset.csv` with columns:
- `image_path` (relative or absolute path)
- `organ_label` (`lungs`, `heart`, `liver`, `kidney`, `stomach`, `bladder`, etc.)
- `severity_label` (`low`, `medium`, `high`, `critical`)

### Train radiology model

```bash
py ml/train_radiology_model.py
```

Model output:
- `var/ml/radiology_model.joblib`

### Runtime behavior

`ml/radiology_triage.py` will:
- use trained model when `var/ml/radiology_model.joblib` exists
- fallback to heuristic triage otherwise

## Organ detection from downloaded web dataset (SerpAPI)

If you want multi-organ detection from clinical photos (not only the small CSV), use this flow:

### 1. Download organ images by class

Set your SerpAPI key:

```bash
# Windows PowerShell
$env:SERPAPI_KEY="YOUR_KEY"
```

Then download:

```bash
py ml/download_organ_images.py --per-organ 250
```

Output dataset structure:
- `ml/data/organ_photo_dataset/eye/*.jpg`
- `ml/data/organ_photo_dataset/ear/*.jpg`
- `ml/data/organ_photo_dataset/paw/*.jpg`
- etc.

### 2. Train organ photo model

```bash
py ml/train_organ_photo_model.py
```

Model output:
- `var/ml/organ_photo_model.joblib`

### 3. Runtime integration

`ml/radiology_triage.py` now checks `var/ml/organ_photo_model.joblib` first for non-radiographic images.
When used, source becomes:
- `organ_photo_trained_model_v1`
