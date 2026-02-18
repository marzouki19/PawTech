import cv2
import sys
import os

def capture_face(username):
    """Capture a face image for user signup."""
    # Validate username
    if not username or not username.strip():
        print("Error: Username cannot be empty.")
        return False
    
    username = username.strip()
    
    # Create faces directory if it doesn't exist
    faces_dir = "faces"
    if not os.path.exists(faces_dir):
        os.makedirs(faces_dir)
        print(f"Created directory: {faces_dir}")
    
    # Check if user already exists
    face_path = os.path.join(faces_dir, f"{username}.jpg")
    if os.path.exists(face_path):
        print(f"Warning: Face image for user '{username}' already exists. It will be overwritten.")
    
    # Initialize camera
    cap = cv2.VideoCapture(0)
    
    # Check if camera opened successfully
    if not cap.isOpened():
        print("Error: Could not open camera.")
        return False
    
    print("\n" + "=" * 50)
    print("FACE CAPTURE FOR SIGNUP")
    print("=" * 50)
    print(f"Username: {username}")
    print("\nInstructions:")
    print("- Position your face in the center of the frame")
    print("- Make sure your face is well-lit")
    print("- Press 's' to capture and save")
    print("- Press 'q' to quit without saving")
    print("=" * 50 + "\n")
    
    window_name = "Sign-Up - Face Capture"
    
    while True:
        ret, frame = cap.read()
        
        if not ret:
            print("Error: Failed to capture frame.")
            break
        
        # Add text overlay to frame
        cv2.putText(frame, "Press 's' to save | 'q' to quit", 
                    (10, 30), cv2.FONT_HERSHEY_SIMPLEX, 
                    0.7, (0, 255, 0), 2)
        cv2.putText(frame, f"User: {username}", 
                    (10, 60), cv2.FONT_HERSHEY_SIMPLEX, 
                    0.7, (0, 255, 0), 2)
        
        cv2.imshow(window_name, frame)
        
        key = cv2.waitKey(1) & 0xFF
        
        if key == ord('s'):
            # Save the captured frame
            success = cv2.imwrite(face_path, frame)
            if success:
                print(f"\nSuccess! Face image saved to: {face_path}")
            else:
                print("\nError: Failed to save image.")
            break
        elif key == ord('q'):
            print("\nCapture cancelled by user.")
            break
    
    # Clean up
    cap.release()
    cv2.destroyAllWindows()
    
    return success if 'success' in locals() else False

if __name__ == "__main__":
    # Check for command line argument
    if len(sys.argv) < 2:
        print("Usage: python signup.py <username>")
        print("Example: python signup.py john_doe")
        sys.exit(1)
    
    username = sys.argv[1]
    
    # Run face capture
    success = capture_face(username)
    
    if success:
        print("\nFace registration completed successfully!")
        sys.exit(0)
    else:
        print("\nFace registration failed!")
        sys.exit(1)
