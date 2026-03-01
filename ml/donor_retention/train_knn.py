#!/usr/bin/env python3
"""
KNN Training Script for Donor Retention Prediction
Trains a K-Nearest Neighbors model to predict donor retention.
"""

import pandas as pd
import numpy as np
from sklearn.model_selection import train_test_split, cross_val_score
from sklearn.preprocessing import StandardScaler
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import classification_report, confusion_matrix, accuracy_score
import joblib
import json
import os

# Configuration
DATA_PATH = 'ml/donor_retention/donor_retention_dataset.csv'
MODEL_PATH = 'ml/donor_retention/donor_knn_model.joblib'
SCALER_PATH = 'ml/donor_retention/scaler.joblib'
METRICS_PATH = 'ml/donor_retention/metrics.json'

# Features for the model
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

TARGET = 'will_donate_again'

def load_data():
    """Load the donor dataset"""
    print("Loading donor dataset...")
    df = pd.read_csv(DATA_PATH)
    print(f"  Loaded {len(df)} records")
    return df

def prepare_features(df):
    """Prepare features and target for training"""
    print("\nPreparing features...")
    
    # Extract features
    X = df[FEATURES].copy()
    y = df[TARGET].copy()
    
    # Handle any missing values
    X = X.fillna(0)
    
    print(f"  Features: {FEATURES}")
    print(f"  Target: {TARGET}")
    print(f"  Shape: {X.shape}")
    
    return X, y

def split_data(X, y, test_size=0.2, random_state=42):
    """Split data into training and testing sets"""
    print("\nSplitting data...")
    X_train, X_test, y_train, y_test = train_test_split(
        X, y, test_size=test_size, random_state=random_state, stratify=y
    )
    print(f"  Training set: {len(X_train)} samples")
    print(f"  Test set: {len(X_test)} samples")
    
    return X_train, X_test, y_train, y_test

def scale_features(X_train, X_test):
    """Scale features using StandardScaler"""
    print("\nScaling features...")
    scaler = StandardScaler()
    X_train_scaled = scaler.fit_transform(X_train)
    X_test_scaled = scaler.transform(X_test)
    
    # Save the scaler
    joblib.dump(scaler, SCALER_PATH)
    print(f"  Scaler saved to {SCALER_PATH}")
    
    return X_train_scaled, X_test_scaled, scaler

def find_optimal_k(X_train, y_train, max_k=30):
    """Find optimal K value using cross-validation"""
    print("\nFinding optimal K value...")
    
    k_values = range(1, max_k + 1, 2)  # Odd numbers only
    cv_scores = []
    
    for k in k_values:
        knn = KNeighborsClassifier(n_neighbors=k)
        scores = cross_val_score(knn, X_train, y_train, cv=5, scoring='accuracy')
        cv_scores.append(scores.mean())
        print(f"  K={k}: Accuracy = {scores.mean():.4f} (+/- {scores.std():.4f})")
    
    # Find best K
    best_idx = np.argmax(cv_scores)
    best_k = k_values[best_idx]
    best_score = cv_scores[best_idx]
    
    print(f"\n  Best K: {best_k} with accuracy: {best_score:.4f}")
    
    return best_k

def train_model(X_train, y_train, k=5):
    """Train the KNN model"""
    print(f"\nTraining KNN model with K={k}...")
    
    knn = KNeighborsClassifier(
        n_neighbors=k,
        weights='distance',  # Weight by distance
        metric='euclidean',
        algorithm='auto'
    )
    
    knn.fit(X_train, y_train)
    
    print("  Model trained successfully!")
    
    return knn

def evaluate_model(model, X_test, y_test):
    """Evaluate the model and return metrics"""
    print("\nEvaluating model...")
    
    y_pred = model.predict(X_test)
    
    accuracy = accuracy_score(y_test, y_pred)
    print(f"  Accuracy: {accuracy:.4f}")
    
    # Confusion matrix
    cm = confusion_matrix(y_test, y_pred)
    print(f"\n  Confusion Matrix:")
    print(f"    TN={cm[0][0]}, FP={cm[0][1]}")
    print(f"    FN={cm[1][0]}, TP={cm[1][1]}")
    
    # Classification report
    report = classification_report(y_test, y_pred, target_names=['Won\'t Donate', 'Will Donate'])
    print(f"\n  Classification Report:")
    print(report)
    
    metrics = {
        'accuracy': float(accuracy),
        'confusion_matrix': cm.tolist(),
        'classification_report': report
    }
    
    return metrics

def save_model(model, metrics):
    """Save the trained model and metrics"""
    print(f"\nSaving model to {MODEL_PATH}...")
    joblib.dump(model, MODEL_PATH)
    print("  Model saved!")
    
    print(f"Saving metrics to {METRICS_PATH}...")
    with open(METRICS_PATH, 'w') as f:
        json.dump(metrics, f, indent=2)
    print("  Metrics saved!")

def predict_donor_retention(model, scaler, donor_data):
    """
    Predict if a donor will donate again.
    
    Args:
        model: Trained KNN model
        scaler: Fitted StandardScaler
        donor_data: dict with donor features
    
    Returns:
        dict with prediction and probability
    """
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
        'probability_wont_donate': float(probabilities[0])
    }

def main():
    """Main training pipeline"""
    print("="*60)
    print("DONOR RETENTION PREDICTION - KNN TRAINING")
    print("="*60)
    
    # Load data
    df = load_data()
    
    # Print class distribution
    print("\nClass distribution:")
    print(df[TARGET].value_counts())
    
    # Prepare features
    X, y = prepare_features(df)
    
    # Split data
    X_train, X_test, y_train, y_test = split_data(X, y)
    
    # Scale features
    X_train_scaled, X_test_scaled, scaler = scale_features(X_train, X_test)
    
    # Find optimal K
    best_k = find_optimal_k(X_train_scaled, y_train)
    
    # Train model
    model = train_model(X_train_scaled, y_train, k=best_k)
    
    # Evaluate
    metrics = evaluate_model(model, X_test_scaled, y_test)
    
    # Save
    save_model(model, metrics)
    
    print("\n" + "="*60)
    print("TRAINING COMPLETE!")
    print("="*60)
    print(f"\nModel saved to: {MODEL_PATH}")
    print(f"Scaler saved to: {SCALER_PATH}")
    print(f"Metrics saved to: {METRICS_PATH}")

if __name__ == "__main__":
    main()
