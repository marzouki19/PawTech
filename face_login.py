import face_recognition
import cv2
import os
import sys
import logging

# Configure logging - reduce verbosity for performance
logging.basicConfig(level=logging.WARNING)
logger = logging.getLogger(__name__)

def process_image(image_path):
    try:
        # Load and preprocess image
        image = cv2.imread(image_path)
        if image is None:
            logger.error("Failed to load image")
            return None
            
        # Convert to RGB (face_recognition uses RGB)
        rgb_image = cv2.cvtColor(image, cv2.COLOR_BGR2RGB)
        
        return rgb_image
    except Exception as e:
        logger.error(f"Image processing error: {str(e)}")
        return None

def find_face_files(users_dir):
    """Find all {user_id}.png files in user_face directory."""
    face_files = []
    
    if not os.path.exists(users_dir):
        return face_files
    
    # Look for files named {user_id}.png directly in user_face folder
    for file in os.listdir(users_dir):
        file_path = os.path.join(users_dir, file)
        if os.path.isfile(file_path) and file.lower().endswith(('.png', '.jpg', '.jpeg')):
            # Extract user_id from filename (e.g., "5.png" -> "5")
            filename_without_ext = os.path.splitext(file)[0]
            if filename_without_ext.isdigit():
                face_files.append({
                    'path': file_path,
                    'user_id': filename_without_ext,
                    'filename': file
                })
    
    return face_files

def main():
    if len(sys.argv) < 2:
        print("Error: No image path provided")
        sys.exit(1)

    img_path = sys.argv[1]
    logger.info(f"Processing image: {img_path}")

    # Process the input image
    unknown_img = process_image(img_path)
    if unknown_img is None:
        print("Error processing input image")
        sys.exit(1)

    try:
        # Use "small" model for faster processing
        unknown_encodings = face_recognition.face_encodings(unknown_img, model="small", num_jitters=1)
        
        if not unknown_encodings:
            print("No face detected in input image")
            sys.exit(1)
            
        if len(unknown_encodings) > 1:
            print("Multiple faces detected - please use single face image")
            sys.exit(1)
            
        unknown_enc = unknown_encodings[0]
    except Exception as e:
        logger.error(f"Face encoding error: {str(e)}")
        print("Error processing face")
        sys.exit(1)

    # Check faces directory - use Symfony project uploads path
    # New path: public/uploads/user_face/{user_id}/face.png
    script_dir = os.path.dirname(os.path.abspath(__file__))
    faces_dir = os.path.join(script_dir, 'public', 'uploads', 'user_face')
    
    if not os.path.exists(faces_dir):
        # Try alternative path for XAMPP compatibility
        faces_dir = "C:/xampp/htdocs/Carpooler/html/face_rec/faces"

    if not os.path.exists(faces_dir):
        print("Faces directory missing")
        sys.exit(1)

    # Find all face files in user subdirectories
    face_files = find_face_files(faces_dir)
    
    if not face_files:
        print("No registered faces found")
        sys.exit(1)

    logger.info(f"Found {len(face_files)} registered faces")

    # Compare with known faces
    for face_info in face_files:
        file_path = face_info['path']
        user_id = face_info['user_id']
        
        try:
            known_img = face_recognition.load_image_file(file_path)
            known_encodings = face_recognition.face_encodings(known_img, model="small", num_jitters=1)
            
            if not known_encodings:
                continue
                    
            known_enc = known_encodings[0]
            
            # Use tolerance=0.5 (default) for comparison
            matches = face_recognition.compare_faces(
                [known_enc], 
                unknown_enc, 
                tolerance=0.5
            )
            
            if matches[0]:
                logger.info(f"Match found for user ID: {user_id}")
                print(user_id)
                sys.exit(0)
                    
        except Exception as e:
            continue

    print("No match found")
    sys.exit(1)

if __name__ == "__main__":
    main()
