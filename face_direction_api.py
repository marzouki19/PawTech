import base64
import io
import os
import numpy as np
from fastapi import FastAPI
from pydantic import BaseModel
from PIL import Image
import mediapipe as mp
from mediapipe.tasks import python as mp_tasks
from mediapipe.tasks.python import vision
import face_recognition


app = FastAPI()

# Get the directory where the script is located
script_dir = os.path.dirname(os.path.abspath(__file__))
model_path = os.path.join(script_dir, 'face_landmarker.task')

# Initialize MediaPipe FaceLandmarker
base_options = mp_tasks.BaseOptions(model_asset_path=model_path)
options = vision.FaceLandmarkerOptions(base_options=base_options, num_faces=1)
face_landmarker = vision.FaceLandmarker.create_from_options(options)


class ImageData(BaseModel):
    image_base64: str


class CompareFaceData(BaseModel):
    image_base64: str
    user_face_base64: str


def decode_base64_image(data: str) -> Image.Image:
    """Decode base64 image from data URL or raw base64 string."""
    try:
        # Handle data URL format (e.g., "data:image/png;base64,...")
        if "," in data:
            data = data.split(",")[-1]
        image_bytes = base64.b64decode(data)
        return Image.open(io.BytesIO(image_bytes)).convert("RGB")
    except Exception as e:
        raise ValueError(f"Failed to decode base64 image: {str(e)}")


@app.post("/detect_direction/")
def detect_direction(data: ImageData):
    """
    Detect face direction (straight, left, right, up, down).
    Uses MediaPipe Face Mesh for facial landmark detection.
    """
    try:
        image = decode_base64_image(data.image_base64)
        img_np = np.array(image)

        # Convert to MediaPipe Image
        mp_image = mp.Image(image_format=mp.ImageFormat.SRGB, data=img_np)
        
        # Run face landmark detection
        results = face_landmarker.detect(mp_image)
        
        if not results.face_landmarks or len(results.face_landmarks) == 0:
            return {"success": False, "message": "No face detected. Please position your face in front of the camera."}

        landmarks = results.face_landmarks[0]
        
        # Get key points: nose tip (1), left eye (33), right eye (263), chin (152)
        nose = landmarks[1]
        left_eye = landmarks[33]
        right_eye = landmarks[263]
        chin = landmarks[152]

        # Calculate horizontal and vertical angles
        dx = right_eye.x - left_eye.x
        dy = nose.y - chin.y
        
        direction = "straight"
        if abs(dx) > 0.08:
            direction = "right" if dx > 0 else "left"
        elif nose.y < chin.y - 0.03:
            direction = "up"
        elif nose.y > chin.y + 0.03:
            direction = "down"

        return {"success": True, "direction": direction}
    except ValueError as e:
        return {"success": False, "message": str(e)}
    except Exception as e:
        return {"success": False, "message": f"An error occurred: {str(e)}"}


@app.post("/compare_face/")
def compare_face(data: CompareFaceData):
    """
    Compare two face images for authentication.
    Returns whether the faces match.
    
    Tips for better accuracy:
    - Use images taken in good lighting
    - Ensure face is directly facing the camera
    - Avoid blurry images
    - Use same pose and expression in both images
    """
    try:
        # Decode base64 images
        image = decode_base64_image(data.image_base64)
        user_face = decode_base64_image(data.user_face_base64)
        
        img_np = np.array(image)
        user_face_np = np.array(user_face)

        # Get face encodings
        img_encodings = face_recognition.face_encodings(img_np)
        user_face_encodings = face_recognition.face_encodings(user_face_np)

        # Check if faces were detected
        if len(img_encodings) == 0:
            return {"success": False, "message": "Face not detected in captured image. Please ensure your face is clearly visible."}
        
        if len(user_face_encodings) == 0:
            return {"success": False, "message": "Face not detected in stored image. Please re-register your face."}
        
        if len(img_encodings) > 1:
            return {"success": False, "message": "Multiple faces detected. Please ensure only one face is visible."}
        
        if len(user_face_encodings) > 1:
            return {"success": False, "message": "Multiple faces detected in stored image. Please re-register."}

        img_encoding = img_encodings[0]
        user_face_encoding = user_face_encodings[0]

        # Compare faces with lower tolerance for better accuracy
        # Lower tolerance = more strict (0.4 is recommended for security)
        match = face_recognition.compare_faces([user_face_encoding], img_encoding, tolerance=0.4)[0]
        
        # Also get face distance for additional info
        face_distance = face_recognition.face_distance([user_face_encoding], img_encoding)[0]
        
        return {
            "success": True, 
            "match": match,
            "confidence": float(1 - face_distance)  # Convert to confidence score
        }
    except ValueError as e:
        return {"success": False, "message": str(e)}
    except Exception as e:
        return {"success": False, "message": f"An error occurred during face comparison: {str(e)}"}


# To run: uvicorn face_direction_api:app --reload
# Make sure to install dependencies: pip install fastapi uvicorn pydantic pillow numpy mediapipe face_recognition
# Download the face_landmarker.task model from https://developers.google.com/mediapipe/solutions/vision/face_landmarker
