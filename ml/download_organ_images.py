import argparse
import os
import re
from typing import Dict, List, Set

import requests
from tqdm import tqdm


SERPAPI_URL = "https://serpapi.com/search"

# Multi-organ query bank. You can extend this list anytime.
ORGAN_QUERIES: Dict[str, List[str]] = {
    "eye": [
        "dog eye infection close up",
        "dog eye anatomy",
        "canine corneal ulcer",
        "dog conjunctivitis",
    ],
    "ear": [
        "dog ear infection close up",
        "dog ear anatomy",
        "canine otitis externa",
        "dog inflamed ear",
    ],
    "paw": [
        "dog paw injury close up",
        "dog paw pad infection",
        "canine paw dermatitis",
        "dog paw anatomy",
    ],
    "skin": [
        "dog skin infection close up",
        "canine dermatitis skin lesions",
        "dog mange skin",
        "dog skin anatomy",
    ],
    "nose": [
        "dog nose infection",
        "canine nasal lesion close up",
        "dog nose anatomy",
        "dog snout skin disease",
    ],
    "teeth": [
        "dog teeth infection",
        "canine dental disease",
        "dog oral cavity anatomy",
        "dog gum inflammation",
    ],
    "heart": [
        "dog heart anatomy",
        "canine cardiomegaly xray",
        "dog heart disease illustration",
        "canine heart pathology",
    ],
    "lung": [
        "dog lung xray pneumonia",
        "canine lung anatomy",
        "dog thoracic radiography lungs",
        "canine pulmonary edema xray",
    ],
    "liver": [
        "dog liver anatomy",
        "canine liver ultrasound",
        "dog liver disease imaging",
        "canine hepatic pathology",
    ],
    "kidney": [
        "dog kidney anatomy",
        "canine kidney ultrasound",
        "dog renal disease imaging",
        "canine kidney pathology",
    ],
    "stomach": [
        "dog stomach anatomy",
        "canine gastric dilation radiography",
        "dog stomach disease imaging",
        "canine abdominal xray stomach",
    ],
    "intestine": [
        "dog intestine anatomy",
        "canine intestinal obstruction xray",
        "dog bowel disease imaging",
        "canine gastrointestinal radiography",
    ],
    "bladder": [
        "dog bladder anatomy",
        "canine bladder stones xray",
        "dog urinary bladder ultrasound",
        "canine cystitis imaging",
    ],
}


def _safe_name(value: str) -> str:
    return re.sub(r"[^a-zA-Z0-9._-]+", "_", value.strip())


def _download_one(url: str, output_path: str) -> bool:
    try:
        response = requests.get(url, timeout=15)
        if response.status_code != 200:
            return False
        content_type = response.headers.get("Content-Type", "").lower()
        if "image" not in content_type:
            return False
        if len(response.content) < 2_500:
            return False
        with open(output_path, "wb") as f:
            f.write(response.content)
        return True
    except Exception:
        return False


def _search_images(query: str, api_key: str, num: int) -> List[dict]:
    params = {
        "engine": "google_images",
        "q": query,
        "api_key": api_key,
        "num": num,
    }
    try:
        response = requests.get(SERPAPI_URL, params=params, timeout=45)
        data = response.json()
        if not isinstance(data, dict):
            return []
        if data.get("error"):
            print(f"SerpAPI error for query '{query}': {data.get('error')}")
            return []
        if "search_metadata" in data and data["search_metadata"].get("status") != "Success":
            print(f"SerpAPI non-success status for query '{query}': {data['search_metadata'].get('status')}")
        return data.get("images_results", [])
    except Exception:
        return []


def download_for_organ(organ: str, queries: List[str], api_key: str, out_dir: str, limit: int) -> int:
    organ_dir = os.path.join(out_dir, _safe_name(organ))
    os.makedirs(organ_dir, exist_ok=True)

    seen_urls: Set[str] = set()
    existing = [name for name in os.listdir(organ_dir) if name.lower().endswith((".jpg", ".jpeg", ".png", ".webp"))]
    count = len(existing)

    for query in queries:
        if count >= limit:
            break
        print(f"[{organ}] Searching: {query}")
        results = _search_images(query, api_key, num=100)
        if not results:
            continue

        for img in tqdm(results, desc=f"{organ}:{_safe_name(query)[:20]}"):
            if count >= limit:
                break
            url = str(img.get("original", "")).strip()
            if not url:
                url = str(img.get("thumbnail", "")).strip()
            if not url or url in seen_urls:
                continue
            seen_urls.add(url)
            output_path = os.path.join(organ_dir, f"{count:05d}.jpg")
            if _download_one(url, output_path):
                count += 1

    print(f"[{organ}] Downloaded {count} images")
    return count


def main() -> None:
    parser = argparse.ArgumentParser(description="Download dog-organ images via SerpAPI.")
    parser.add_argument("--api-key", default=os.getenv("SERPAPI_KEY", ""), help="SerpAPI key. Defaults to SERPAPI_KEY env var.")
    parser.add_argument("--out-dir", default=os.path.join("ml", "data", "organ_photo_dataset"), help="Output dataset directory.")
    parser.add_argument("--per-organ", type=int, default=250, help="Target images per organ.")
    parser.add_argument("--organs", default="", help="Comma-separated subset (e.g. eye,ear,paw). Empty = all.")
    args = parser.parse_args()

    if not args.api_key:
        raise RuntimeError("Missing SerpAPI key. Use --api-key or set SERPAPI_KEY.")

    selected = set()
    if args.organs.strip():
        selected = {o.strip().lower() for o in args.organs.split(",") if o.strip()}

    os.makedirs(args.out_dir, exist_ok=True)

    for organ, queries in ORGAN_QUERIES.items():
        if selected and organ not in selected:
            continue
        download_for_organ(organ, queries, args.api_key, args.out_dir, args.per_organ)

    print("Done.")


if __name__ == "__main__":
    main()
