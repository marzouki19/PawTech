#!/usr/bin/env python3
"""
Donor Retention Prediction Script
Predicts if a donor will donate again based on their history.
"""

import sys
import json
import joblib
import numpy as np
import os

# Paths
MODEL_PATH = os.path.join(os.path.dirname(__file__), 'donor_knn_model.joblib')
SCALER_PATH = os.path.join(os.path.dirname(__file__), 'scaler.joblib')

# Features in order
FEATURES = [
    'total_donations',
    'avg_donation_amount', 
    'donation_frequency',
    'days_since_last_donation',
    'donation_consistency',
    'largest_donation',
    'smallest_donation',
    'campaigns_participated',
    'volunteer_hours',
    'referrals'
]

def load_model():
    """Load the trained model and scaler"""
    model = joblib.load(MODEL_PATH)
    scaler = joblib.load(SCALER_PATH)
    return model, scaler

def predict_retention(donor_data):
    """
    Predict donor retention.
    
    Args:
        donor_data: dict with donor features
        
    Returns:
        dict with prediction results
    """
    model, scaler = load_model()
    
    # Prepare features
    features = [donor_data.get(f, 0) for f in FEATURES]
    features_array = np.array(features).reshape(1, -1)
    
    # Scale features
    features_scaled = scaler.transform(features_array)
    
    # Predict
    prediction = model.predict(features_scaled)[0]
    probabilities = model.predict_proba(features_scaled)[0]
    
    return {
        'will_donate_again': bool(prediction),
        'confidence': float(max(probabilities)),
        'probability_will_donate': float(probabilities[1]),
        'probability_wont_donate': float(probabilities[0]),
        'risk_level': 'high' if probabilities[0] > 0.5 else ('medium' if probabilities[0] > 0.3 else 'low')
    }

def main():
    """Main prediction function - reads from stdin, writes to stdout"""
    try:
        # Read input from command line arguments or stdin
        if len(sys.argv) > 1:
            # Parse JSON from command line
            donor_data = json.loads(sys.argv[1])
        else:
            # Read from stdin
            input_data = sys.stdin.read()
            donor_data = json.loads(input_data)
        
        result = predict_retention(donor_data)
        
        # Output as JSON
        print(json.dumps(result))
        
    except Exception as e:
        print(json.dumps({'error': str(e)}))
        sys.exit(1)

if __name__ == "__main__":
    main()
