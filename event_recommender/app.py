from flask import Flask, request, jsonify
from flask_cors import CORS
import numpy as np
import pandas as pd
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import LabelEncoder
from datetime import datetime
import os

app = Flask(__name__)
CORS(app)

# ============================================================
# DATASET LOADING AND MODEL TRAINING
# ============================================================

# Load the dataset
DATASET_PATH = os.path.join(os.path.dirname(__file__), 'event_preferences_dataset.csv')
print(f"\n[LOADING] Dataset from: {DATASET_PATH}")

try:
    dataset = pd.read_csv(DATASET_PATH)
    print(f"[SUCCESS] Loaded {len(dataset)} user preference records")
    print(f"[INFO] Columns: {list(dataset.columns)}")
except Exception as e:
    print(f"[ERROR] Failed to load dataset: {e}")
    dataset = pd.DataFrame()

# Encoders for categorical features
EVENT_TYPES = ['VACCINATION', 'ADOPTION', 'SENSIBILISATION', 'COLLECTE_DONS', 'any']
CITIES = ['Tunis', 'Ariana', 'Ben Arous', 'Sousse', 'Sfax', 'Nabeul', 'Bizerte', 'Monastir', 'any']
TIMEFRAMES = ['this_week', 'this_month', 'next_month', 'anytime']
GROUP_SIZES = ['small', 'medium', 'large']

type_encoder = LabelEncoder()
type_encoder.fit(EVENT_TYPES)

city_encoder = LabelEncoder()
city_encoder.fit(CITIES)

timeframe_encoder = LabelEncoder()
timeframe_encoder.fit(TIMEFRAMES)

size_encoder = LabelEncoder()
size_encoder.fit(GROUP_SIZES)

def encode_preferences(pref_type, pref_city, pref_timeframe, pref_size):
    """Convert user preferences to numeric feature vector"""
    try:
        type_val = type_encoder.transform([pref_type])[0]
    except:
        type_val = type_encoder.transform(['any'])[0]
    
    try:
        city_val = city_encoder.transform([pref_city])[0]
    except:
        city_val = city_encoder.transform(['any'])[0]
    
    try:
        time_val = timeframe_encoder.transform([pref_timeframe])[0]
    except:
        time_val = timeframe_encoder.transform(['this_month'])[0]
    
    try:
        size_val = size_encoder.transform([pref_size])[0]
    except:
        size_val = size_encoder.transform(['medium'])[0]
    
    return [type_val, city_val, time_val, size_val]

# ============================================================
# TRAIN KNN MODEL ON DATASET
# ============================================================

knn_model = None
dataset_features = None
dataset_labels = None

def train_model():
    """Train KNN model on the historical preference dataset"""
    global knn_model, dataset_features, dataset_labels
    
    if dataset.empty:
        print("[WARNING] No dataset available for training")
        return False
    
    print("\n[TRAINING] Building KNN model from dataset...")
    
    # Prepare features from dataset
    features = []
    labels = []
    
    for _, row in dataset.iterrows():
        feature_vector = encode_preferences(
            row['preferred_type'],
            row['preferred_city'],
            row['preferred_timeframe'],
            row['group_size']
        )
        features.append(feature_vector)
        labels.append({
            'liked_type': row['liked_event_type'],
            'satisfaction': row['satisfaction_score']
        })
    
    dataset_features = np.array(features)
    dataset_labels = labels
    
    # Train KNN model
    knn_model = NearestNeighbors(n_neighbors=min(10, len(features)), metric='euclidean')
    knn_model.fit(dataset_features)
    
    print(f"[SUCCESS] KNN model trained on {len(features)} records")
    print(f"[INFO] Feature dimensions: {dataset_features.shape}")
    return True

# Train model on startup
model_trained = train_model()

# ============================================================
# RECOMMENDATION LOGIC
# ============================================================

def find_similar_users(user_preferences):
    """Find similar users from dataset using KNN"""
    if knn_model is None:
        return [], []
    
    user_vector = encode_preferences(
        user_preferences.get('preferred_type', 'any'),
        user_preferences.get('preferred_city', 'any'),
        user_preferences.get('preferred_timeframe', 'this_month'),
        user_preferences.get('group_size', 'medium')
    )
    
    user_point = np.array([user_vector])
    distances, indices = knn_model.kneighbors(user_point)
    
    return distances[0], indices[0]

def get_preferred_types_from_similar_users(indices, distances):
    """Analyze what event types similar users liked"""
    type_scores = {}
    
    for i, idx in enumerate(indices):
        label = dataset_labels[idx]
        liked_type = label['liked_type']
        satisfaction = label['satisfaction']
        
        # Weight by distance (closer = more weight) and satisfaction
        distance_weight = 1 / (1 + distances[i])
        score = distance_weight * satisfaction
        
        if liked_type in type_scores:
            type_scores[liked_type] += score
        else:
            type_scores[liked_type] = score
    
    # Normalize scores
    total = sum(type_scores.values())
    if total > 0:
        type_scores = {k: v/total for k, v in type_scores.items()}
    
    return type_scores

def score_event(event, type_preferences, user_preferences):
    """Score an event based on type preferences and user criteria"""
    event_type = event.get('type', 'ADOPTION')
    event_city = event.get('ville', '')
    
    # Base score from similar users' preferences (50% weight)
    type_score = type_preferences.get(event_type, 0.1)
    
    # City match bonus (25% weight)
    preferred_city = user_preferences.get('preferred_city', 'any')
    if preferred_city == 'any' or preferred_city == event_city:
        city_score = 1.0
    else:
        city_score = 0.3
    
    # Date preference score (25% weight)
    date_str = event.get('date_debut', '')
    timeframe = user_preferences.get('preferred_timeframe', 'anytime')
    date_score = calculate_date_score(date_str, timeframe)
    
    # Combined score
    final_score = (0.50 * type_score) + (0.25 * city_score) + (0.25 * date_score)
    
    return final_score

def calculate_date_score(event_date_str, preferred_timeframe):
    """Calculate score based on date preference"""
    try:
        event_date = datetime.strptime(event_date_str, '%Y-%m-%d')
        today = datetime.now()
        days_until = (event_date - today).days
        
        if days_until < 0:
            return 0
        
        if preferred_timeframe == 'this_week':
            return max(0, 1 - (days_until / 7))
        elif preferred_timeframe == 'this_month':
            return max(0, 1 - (days_until / 30))
        elif preferred_timeframe == 'next_month':
            if 30 <= days_until <= 60:
                return 1
            return max(0, 1 - abs(45 - days_until) / 45)
        else:
            return max(0, 1 - (days_until / 365))
    except:
        return 0.5

# ============================================================
# API ENDPOINTS
# ============================================================

@app.route('/health', methods=['GET'])
def health_check():
    return jsonify({
        'status': 'healthy',
        'service': 'Event Recommendation API',
        'algorithm': 'KNN (K-Nearest Neighbors)',
        'model_trained': model_trained,
        'dataset_records': len(dataset) if not dataset.empty else 0
    })

@app.route('/dataset/info', methods=['GET'])
def dataset_info():
    """Get information about the training dataset"""
    if dataset.empty:
        return jsonify({'ok': False, 'message': 'No dataset loaded'})
    
    return jsonify({
        'ok': True,
        'total_records': len(dataset),
        'columns': list(dataset.columns),
        'event_types': dataset['liked_event_type'].value_counts().to_dict(),
        'cities': dataset['preferred_city'].value_counts().to_dict(),
        'avg_satisfaction': round(dataset['satisfaction_score'].mean(), 3)
    })

@app.route('/recommend', methods=['POST'])
def recommend_events():
    """
    Main recommendation endpoint
    
    1. Takes user preferences
    2. Finds similar users in the trained dataset using KNN
    3. Analyzes what event types those similar users liked
    4. Scores available events based on this analysis
    5. Returns top recommendations
    """
    try:
        data = request.get_json()
        
        if not data:
            return jsonify({'ok': False, 'message': 'No JSON data provided'}), 400
        
        user_preferences = data.get('user_preferences', {})
        events = data.get('events', [])
        top_n = data.get('top_n', 5)
        
        print(f"\n[REQUEST] New recommendation request")
        print(f"[INPUT] User preferences: {user_preferences}")
        print(f"[INPUT] Available events: {len(events)}")
        
        if not events:
            return jsonify({'ok': False, 'message': 'No events provided'}), 400
        
        # Step 1: Find similar users in dataset
        distances, indices = find_similar_users(user_preferences)
        print(f"[KNN] Found {len(indices)} similar users in dataset")
        
        # Step 2: Analyze what event types similar users liked
        type_preferences = get_preferred_types_from_similar_users(indices, distances)
        print(f"[ANALYSIS] Type preferences from similar users: {type_preferences}")
        
        # Step 3: Score each event
        event_scores = []
        for event in events:
            # Filter out past events
            date_str = event.get('date_debut', '')
            try:
                event_date = datetime.strptime(date_str, '%Y-%m-%d')
                if event_date < datetime.now():
                    continue
            except:
                pass
            
            score = score_event(event, type_preferences, user_preferences)
            event_scores.append((event['id'], score))
        
        # Step 4: Sort and get top N
        event_scores.sort(key=lambda x: x[1], reverse=True)
        top_recommendations = event_scores[:top_n]
        
        recommended_ids = [eid for eid, _ in top_recommendations]
        scores = [round(score, 3) for _, score in top_recommendations]
        
        print(f"[RESULT] Top {len(recommended_ids)} recommendations: {recommended_ids}")
        print(f"[RESULT] Scores: {scores}")
        
        return jsonify({
            'ok': True,
            'recommendations': recommended_ids,
            'scores': scores,
            'algorithm': 'KNN',
            'similar_users_found': len(indices),
            'type_preferences': type_preferences
        })
        
    except Exception as e:
        print(f"[ERROR] {str(e)}")
        return jsonify({'ok': False, 'message': str(e)}), 500

# ============================================================
# START SERVER
# ============================================================

if __name__ == '__main__':
    print("\n" + "=" * 60)
    print("  EVENT RECOMMENDATION API - PawTech")
    print("  Algorithm: KNN (K-Nearest Neighbors)")
    print("  Author: Nesrine Fendri")
    print("=" * 60)
    print(f"\n  Dataset: {len(dataset)} records loaded")
    print(f"  Model: {'Trained' if model_trained else 'Not trained'}")
    print("\n  Endpoints:")
    print("    GET  /health       - Health check")
    print("    GET  /dataset/info - Dataset information")
    print("    POST /recommend    - Get recommendations")
    print("\n  Server: http://127.0.0.1:8003")
    print("=" * 60 + "\n")
    
    app.run(host='127.0.0.1', port=8003, debug=True)
