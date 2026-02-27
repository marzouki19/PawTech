import json
import os
import sys
from typing import Any, Dict, List, Tuple

import joblib
import numpy as np
from PIL import Image

from radiology_features import edge_density, entropy, extract_radiology_features, load_gray_image


def _zone_score(zone: np.ndarray) -> float:
    mean = float(zone.mean())
    std = float(zone.std())
    edges = edge_density(zone)
    return (std * 0.45) + (edges * 120.0) + (abs(mean - 128.0) * 0.22)


def _consultation_recommendation(severity: str) -> Dict[str, str]:
    sev = (severity or "low").lower()
    if sev == "critical":
        return {
            "urgent_consultation": "yes",
            "recommended_timing": "Immediate emergency consultation (0-2h).",
            "next_step": "Stabilize patient and perform urgent in-clinic radiology review.",
        }
    if sev == "high":
        return {
            "urgent_consultation": "yes",
            "recommended_timing": "Urgent consultation within 6-12h.",
            "next_step": "Book same-day consultation and verify with veterinarian exam.",
        }
    if sev == "medium":
        return {
            "urgent_consultation": "no",
            "recommended_timing": "Consultation within 24-48h.",
            "next_step": "Monitor symptoms and schedule rapid follow-up exam.",
        }
    return {
        "urgent_consultation": "no",
        "recommended_timing": "Routine consultation.",
        "next_step": "Continue routine monitoring and preventive care.",
    }


def _radiography_input_check(path: str) -> Tuple[bool, str, Dict[str, float]]:
    """
    Reject obvious non-radiographic inputs (e.g. colorful organ photos) to avoid misleading triage.
    Returns: (is_radiography_like, reason, metrics)
    """
    img = Image.open(path).convert("RGB").resize((256, 256))
    arr = np.asarray(img, dtype=np.float32)

    r = arr[:, :, 0]
    g = arr[:, :, 1]
    b = arr[:, :, 2]
    rg = np.abs(r - g)
    yb = np.abs(0.5 * (r + g) - b)
    colorfulness = float(np.sqrt(np.mean(rg**2) + np.mean(yb**2)))

    gray = np.mean(arr, axis=2)
    gray_std = float(gray.std())
    bright_ratio = float(np.mean(gray > 210))
    dark_ratio = float(np.mean(gray < 45))

    # Typical x-rays are mostly monochrome with low colorfulness.
    # Threshold is intentionally conservative to block photos like skin/organ snapshots.
    if colorfulness > 22.0:
        return False, "Input appears non-radiographic (high color content).", {
            "colorfulness": round(colorfulness, 2),
            "gray_std": round(gray_std, 2),
            "bright_ratio": round(bright_ratio, 3),
            "dark_ratio": round(dark_ratio, 3),
        }

    return True, "Radiography-like input.", {
        "colorfulness": round(colorfulness, 2),
        "gray_std": round(gray_std, 2),
        "bright_ratio": round(bright_ratio, 3),
        "dark_ratio": round(dark_ratio, 3),
    }


def _extract_clinical_photo_features(path: str, target_size: Tuple[int, int] = (128, 128)) -> np.ndarray:
    """
    Features adapted to non-radiographic clinical photos:
    - HSV histogram (color distribution)
    - grayscale texture stats
    """
    img_rgb = Image.open(path).convert("RGB").resize(target_size)
    arr_rgb = np.asarray(img_rgb, dtype=np.float32)

    # HSV color histogram (robust for redness/skin/eye patterns).
    img_hsv = img_rgb.convert("HSV")
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

    # Gray texture descriptors.
    gray = np.asarray(img_rgb.convert("L"), dtype=np.float32)
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


def _extract_clinical_photo_features_from_image(img_rgb: Image.Image, target_size: Tuple[int, int] = (128, 128)) -> np.ndarray:
    tmp = img_rgb.convert("RGB").resize(target_size)
    arr_rgb = np.asarray(tmp, dtype=np.float32)

    img_hsv = tmp.convert("HSV")
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

    gray = np.asarray(tmp.convert("L"), dtype=np.float32)
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


def _clinical_pathology_score(path: str) -> float:
    """
    Lightweight pathology proxy for clinical photos.
    Higher score means more visually alarming patterns.
    """
    img = Image.open(path).convert("RGB").resize((160, 160))
    arr = np.asarray(img, dtype=np.float32)
    r = arr[:, :, 0]
    g = arr[:, :, 1]
    b = arr[:, :, 2]
    gray = np.mean(arr, axis=2)

    redness = float(np.mean((r > 120) & (r > g * 1.08) & (r > b * 1.06)))
    very_bright = float(np.mean(gray > 220))
    very_dark = float(np.mean(gray < 35))

    gx = np.abs(np.diff(gray, axis=1))
    gy = np.abs(np.diff(gray, axis=0))
    texture = float((gx.mean() + gy.mean()) / 2.0)
    texture_norm = min(1.0, texture / 30.0)

    score = (
        0.42 * min(1.0, redness / 0.30)
        + 0.18 * min(1.0, very_bright / 0.14)
        + 0.20 * min(1.0, very_dark / 0.14)
        + 0.20 * texture_norm
    )
    return float(max(0.0, min(1.0, round(score, 3))))


def _infer_region(gray: np.ndarray) -> Tuple[str, float]:
    h = gray.shape[0]
    top = gray[: h // 3, :]
    mid = gray[h // 3 : (2 * h) // 3, :]
    bottom = gray[(2 * h) // 3 :, :]

    top_score = _zone_score(top)
    mid_score = _zone_score(mid)
    bottom_score = _zone_score(bottom)

    region_scores = {
        "thoracic": max(top_score, mid_score),
        "abdominal": bottom_score,
    }
    sorted_regions = sorted(region_scores.items(), key=lambda x: x[1], reverse=True)
    region = sorted_regions[0][0]
    confidence = max(0.0, min(1.0, (sorted_regions[0][1] - sorted_regions[1][1]) / 20.0))
    return region, float(round(confidence, 3))


def _heuristic_analysis(path: str) -> Dict[str, Any]:
    gray = load_gray_image(path)
    arr = gray
    mean = float(arr.mean())
    std = float(arr.std())
    edges = edge_density(arr)
    ent = entropy(arr)
    low_light = float(np.mean(arr < 40))
    high_light = float(np.mean(arr > 220))

    score = 0.0
    score += min(35.0, std * 0.35)
    score += min(25.0, edges * 160.0)
    score += min(20.0, max(0.0, ent - 5.0) * 4.0)
    score += min(10.0, low_light * 80.0)
    score += min(10.0, high_light * 80.0)
    score = float(max(0.0, min(100.0, round(score, 2))))

    findings: List[str] = []
    if std > 60:
        findings.append("High structural contrast pattern detected.")
    if edges > 0.18:
        findings.append("Elevated edge complexity may indicate dense/irregular structures.")
    if low_light > 0.20:
        findings.append("Large dark zones detected; possible underexposed or fluid-dense areas.")
    if high_light > 0.18:
        findings.append("Bright clusters detected; possible calcified/opaque regions.")
    if ent > 6.8:
        findings.append("High texture entropy detected; consider detailed radiologist review.")

    if score >= 80:
        severity = "critical"
        quality = "acceptable"
    elif score >= 60:
        severity = "high"
        quality = "acceptable"
    elif score >= 35:
        severity = "medium"
        quality = "moderate"
    else:
        severity = "low"
        quality = "moderate"

    if std < 22 or ent < 4.2:
        quality = "low"
        findings.append("Image quality may be low (blur/under-detailed); retake recommended.")

    region, region_confidence = _infer_region(arr)
    probable_organ = "undetermined"
    organ_confidence = 0.0
    organ_candidates: List[Dict[str, float]] = []
    findings.append("No trained radiology model found: organ localization set to undetermined.")

    confidence = 55.0 + min(40.0, abs(score - 50.0) * 0.8)
    confidence = float(round(confidence, 1))

    recommendation = _consultation_recommendation(severity)
    summary = (
        f"AI triage suggests {severity.upper()} radiological risk with score {score}/100. "
        f"Probable affected region: {region}; probable organ: {probable_organ}. "
        f"Image quality: {quality}. This is a pre-screening support output and requires veterinary validation."
    )

    return {
        "success": True,
        "severity": severity,
        "risk_score": round(score, 1),
        "image_quality": quality,
        "confidence": confidence,
        "findings": findings,
        "summary": summary,
        "probable_region": region,
        "probable_organ": probable_organ,
        "organ_confidence": organ_confidence,
        "region_confidence": region_confidence,
        "organ_candidates": organ_candidates,
        "urgent_consultation": recommendation["urgent_consultation"],
        "recommended_timing": recommendation["recommended_timing"],
        "next_step": recommendation["next_step"],
        "source": "radiology_heuristic_fallback_v1",
    }


def _trained_model_analysis(path: str, model_path: str) -> Dict[str, Any]:
    bundle = joblib.load(model_path)
    organ_model = bundle.get("organ_model")
    severity_model = bundle.get("severity_model")
    organ_encoder = bundle.get("organ_encoder")
    severity_encoder = bundle.get("severity_encoder")

    if organ_model is None or severity_model is None or organ_encoder is None or severity_encoder is None:
        return {"success": False, "error": "Invalid trained radiology model bundle."}

    features, debug = extract_radiology_features(path)
    x = features.reshape(1, -1)

    organ_idx = int(organ_model.predict(x)[0])
    severity_idx = int(severity_model.predict(x)[0])
    organ_label = str(organ_encoder.inverse_transform([organ_idx])[0]).lower()
    severity = str(severity_encoder.inverse_transform([severity_idx])[0]).lower()

    organ_proba = organ_model.predict_proba(x)[0] if hasattr(organ_model, "predict_proba") else None
    severity_proba = severity_model.predict_proba(x)[0] if hasattr(severity_model, "predict_proba") else None

    organ_confidence = float(np.max(organ_proba)) if organ_proba is not None else 0.0
    severity_confidence = float(np.max(severity_proba)) if severity_proba is not None else 0.0

    region, region_confidence = _infer_region(load_gray_image(path))
    organ_candidates: List[Dict[str, float]] = []

    if organ_proba is not None and hasattr(organ_encoder, "classes_"):
        probs = list(zip(organ_encoder.classes_, organ_proba))
        probs_sorted = sorted(probs, key=lambda x: float(x[1]), reverse=True)
        organ_candidates = [{str(name): round(float(score), 3)} for name, score in probs_sorted[:3]]

    findings: List[str] = []
    if debug["std"] > 60:
        findings.append("High structural contrast pattern detected.")
    if debug["edges"] > 0.18:
        findings.append("Elevated edge complexity may indicate dense/irregular structures.")
    if debug["high_light"] > 0.18:
        findings.append("Bright clusters detected; possible calcified/opaque regions.")
    if debug["low_light"] > 0.20:
        findings.append("Large dark zones detected; possible underexposed or fluid-dense areas.")

    if organ_confidence < 0.45:
        findings.append(
            f"Organ localization confidence is low ({round(organ_confidence * 100.0, 1)}%); "
            "prediction is approximate and must be clinically validated."
        )

    image_quality = "acceptable"
    if debug["std"] < 22 or debug["entropy"] < 4.2:
        image_quality = "low"
        findings.append("Image quality may be low (blur/under-detailed); retake recommended.")
    elif debug["std"] < 35:
        image_quality = "moderate"

    risk_map = {"low": 25.0, "medium": 50.0, "high": 72.0, "critical": 90.0}
    risk_score = float(round(risk_map.get(severity, 50.0) + (severity_confidence - 0.5) * 20.0, 1))
    risk_score = max(0.0, min(100.0, risk_score))

    recommendation = _consultation_recommendation(severity)
    summary = (
        f"AI triage (trained model) suggests {severity.upper()} radiological risk with score {risk_score}/100. "
        f"Probable affected region: {region}; probable organ: {organ_label}. "
        f"Image quality: {image_quality}. Requires veterinary validation."
    )

    return {
        "success": True,
        "severity": severity,
        "risk_score": risk_score,
        "image_quality": image_quality,
        "confidence": round(float(max(severity_confidence, organ_confidence)) * 100.0, 1),
        "findings": findings,
        "summary": summary,
        "probable_region": region,
        "probable_organ": organ_label,
        "organ_confidence": round(organ_confidence, 3),
        "region_confidence": round(region_confidence, 3),
        "organ_candidates": organ_candidates,
        "urgent_consultation": recommendation["urgent_consultation"],
        "recommended_timing": recommendation["recommended_timing"],
        "next_step": recommendation["next_step"],
        "source": "radiology_trained_model_v1",
    }


def _trained_organ_photo_analysis(path: str, model_path: str, metrics: Dict[str, float]) -> Dict[str, Any]:
    bundle = joblib.load(model_path)
    model = bundle.get("model")
    encoder = bundle.get("label_encoder")
    if model is None or encoder is None:
        return {"success": False, "error": "Invalid organ photo model bundle."}

    x = _extract_clinical_photo_features(path).reshape(1, -1)
    label_idx = int(model.predict(x)[0])
    organ = str(encoder.inverse_transform([label_idx])[0]).lower()

    proba = model.predict_proba(x)[0] if hasattr(model, "predict_proba") else None
    confidence = float(np.max(proba)) if proba is not None else 0.5

    organ_candidates: List[Dict[str, float]] = []
    if proba is not None and hasattr(encoder, "classes_"):
        pairs = list(zip(encoder.classes_, proba))
        pairs = sorted(pairs, key=lambda it: float(it[1]), reverse=True)
        organ_candidates = [{str(name): round(float(score), 3)} for name, score in pairs[:5]]

    pathology_score = _clinical_pathology_score(path)
    if pathology_score >= 0.78:
        severity = "high"
    elif pathology_score >= 0.52:
        severity = "medium"
    else:
        severity = "low"

    recommendation = _consultation_recommendation(severity)
    summary = (
        f"Trained organ-photo model predicts probable organ: {organ}. "
        f"Confidence: {round(confidence * 100.0, 1)}%."
    )

    findings = [
        "Image analyzed using trained multi-organ photo model.",
        f"Predicted organ: {organ}.",
    ]
    if confidence < 0.45:
        findings.append("Prediction confidence is low; add more samples for this organ class.")

    return {
        "success": True,
        "severity": severity,
        "risk_score": round(20.0 + pathology_score * 70.0, 1),
        "image_quality": "clinical_photo",
        "confidence": round(confidence * 100.0, 1),
        "findings": findings,
        "summary": summary,
        "probable_region": "external_or_unknown",
        "probable_organ": organ,
        "organ_confidence": round(confidence, 3),
        "region_confidence": 0.0,
        "organ_candidates": organ_candidates,
        "urgent_consultation": recommendation["urgent_consultation"],
        "recommended_timing": recommendation["recommended_timing"],
        "next_step": recommendation["next_step"],
        "source": "organ_photo_trained_model_v1",
        "input_metrics": metrics,
        "hint_scores": {},
        "pathology_score": pathology_score,
    }


def analyze_image(path: str, model_path: str, organ_model_path: str) -> Dict[str, Any]:
    if not os.path.exists(path):
        return {"success": False, "error": f"Image not found: {path}"}

    is_radio_like, reason, metrics = _radiography_input_check(path)
    # Use trained multi-organ PHOTO model only for non-radiographic images.
    # Real X-rays must go through radiology model/heuristic path.
    if os.path.exists(organ_model_path) and not is_radio_like:
        try:
            result = _trained_organ_photo_analysis(path, organ_model_path, metrics)
            if result.get("success"):
                return result
        except Exception:
            pass

    # Legacy clinical-photo matcher is intentionally disabled.
    # We only use:
    # 1) trained organ photo model (preferred)
    # 2) radiography model/heuristic for radiography-like inputs
    # 3) explicit guard for non-radiography when no trained organ model exists

    if not is_radio_like:
        # No reliable photo match and input not radiography-like.
        # Return guard with explicit instruction.
        missing = "Trained organ-photo model not found. Run: py ml/train_organ_photo_model.py"
        return {
            "success": True,
            "severity": "low",
            "risk_score": 0.0,
            "image_quality": "not_radiography",
            "confidence": 0.0,
            "findings": [
                reason,
                missing,
            ],
            "summary": "Input rejected: non-radiographic image without trained organ model.",
            "probable_region": "undetermined",
            "probable_organ": "undetermined",
            "organ_confidence": 0.0,
            "region_confidence": 0.0,
            "organ_candidates": [],
            "urgent_consultation": "no",
            "recommended_timing": "Train organ model, then retry.",
            "next_step": "Run: py ml/train_organ_photo_model.py",
            "source": "organ_model_required_v1",
            "input_metrics": metrics,
        }

    if os.path.exists(model_path):
        try:
            return _trained_model_analysis(path, model_path)
        except Exception as e:
            fallback = _heuristic_analysis(path)
            fallback["findings"].append(f"Trained model failed, fallback used: {str(e)}")
            return fallback

    return _heuristic_analysis(path)


def main() -> None:
    raw = sys.stdin.read().strip().lstrip("\ufeff")
    if raw.startswith("ï»¿"):
        raw = raw[3:]
    if raw == "":
        print(json.dumps({"success": False, "error": "No input payload."}))
        return

    try:
        payload = json.loads(raw)
    except json.JSONDecodeError:
        print(json.dumps({"success": False, "error": "Invalid JSON input."}))
        return

    image_path = str(payload.get("image_path", "")).strip()
    if image_path == "":
        print(json.dumps({"success": False, "error": "image_path is required."}))
        return

    model_path = str(payload.get("model_path", "")).strip()
    if model_path == "":
        model_path = os.path.join("var", "ml", "radiology_model.joblib")

    organ_model_path = str(payload.get("organ_model_path", "")).strip()
    if organ_model_path == "":
        organ_model_path = os.path.join("var", "ml", "organ_photo_model.joblib")

    result = analyze_image(image_path, model_path, organ_model_path)
    print(json.dumps(result, ensure_ascii=True))


if __name__ == "__main__":
    main()
