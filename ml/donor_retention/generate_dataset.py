#!/usr/bin/env python3
"""
Donor Retention Prediction using KNN
Generates a large dataset and trains a KNN model to predict donor retention.
"""

import csv
import random
from datetime import datetime, timedelta

# Configuration
NUM_DONORS = 2000  # Large dataset for better training

# Sample data
FIRST_NAMES = [
    "John", "Jane", "Michael", "Sarah", "David", "Emma", "Robert", "Lisa", 
    "William", "Mary", "James", "Jennifer", "Charles", "Patricia", "Thomas",
    "Linda", "Daniel", "Barbara", "Matthew", "Susan", "Anthony", "Jessica",
    "Mark", "Karen", "Donald", "Nancy", "Steven", "Betty", "Paul", "Margaret",
    "Andrew", "Sandra", "Joshua", "Ashley", "Kenneth", "Kimberly", "Kevin",
    "Emily", "Brian", "Donna", "George", "Carol", "Edward", "Michelle", "Ronald",
    "Dorothy", "Timothy", "Elizabeth", "Jason", "Helen"
]

LAST_NAMES = [
    "Smith", "Johnson", "Williams", "Brown", "Jones", "Garcia", "Miller", "Davis",
    "Rodriguez", "Martinez", "Hernandez", "Lopez", "Gonzalez", "Wilson", "Anderson",
    "Thomas", "Taylor", "Moore", "Jackson", "Martin", "Lee", "Perez", "Thompson",
    "White", "Harris", "Sanchez", "Clark", "Ramirez", "Lewis", "Robinson", "Walker",
    "Young", "Allen", "King", "Wright", "Scott", "Torres", "Nguyen", "Hill", "Flores",
    "Green", "Adams", "Nelson", "Baker", "Hall", "Rivera", "Campbell", "Mitchell"
]

CITIES = [
    "New York", "Los Angeles", "Chicago", "Houston", "Phoenix", "Philadelphia",
    "San Antonio", "San Diego", "Dallas", "San Jose", "Austin", "Jacksonville",
    "Fort Worth", "Columbus", "Charlotte", "San Francisco", "Indianapolis", "Seattle",
    "Denver", "Boston", "Nashville", "Portland", "Las Vegas", "Detroit", "Memphis"
]

def generate_donor_id():
    """Generate a unique donor ID"""
    return f"DON{random.randint(100000, 999999)}"

def generate_email(first_name, last_name):
    """Generate a realistic email address"""
    domains = ["gmail.com", "yahoo.com", "hotmail.com", "outlook.com", "email.com", "icloud.com"]
    separators = [".", "_", ""]
    domain = random.choice(domains)
    sep = random.choice(separators)
    return f"{first_name.lower()}{sep}{last_name.lower()}{random.randint(1,99)}@{domain}"

def calculate_retention_score(total_donations, avg_amount, donation_frequency, days_since_last, consistency):
    """
    Calculate a retention score (0-100) based on donor behavior.
    Higher score = more likely to retain/donate again.
    """
    # Base score
    score = 50
    
    # Total donations impact (more donations = higher retention)
    if total_donations >= 20:
        score += 25
    elif total_donations >= 10:
        score += 20
    elif total_donations >= 5:
        score += 15
    elif total_donations >= 2:
        score += 10
    else:
        score += 5
    
    # Average amount impact (higher avg = more committed)
    if avg_amount >= 500:
        score += 20
    elif avg_amount >= 200:
        score += 15
    elif avg_amount >= 100:
        score += 10
    elif avg_amount >= 50:
        score += 5
    
    # Donation frequency (more frequent = higher retention)
    if donation_frequency >= 10:
        score += 15
    elif donation_frequency >= 5:
        score += 10
    elif donation_frequency >= 2:
        score += 5
    
    # Days since last donation (recent = higher retention)
    if days_since_last <= 7:
        score += 20
    elif days_since_last <= 30:
        score += 15
    elif days_since_last <= 90:
        score += 10
    elif days_since_last <= 180:
        score += 5
    elif days_since_last <= 365:
        score -= 5
    else:
        score -= 15
    
    # Consistency (more consistent = higher retention)
    if consistency >= 0.8:
        score += 15
    elif consistency >= 0.6:
        score += 10
    elif consistency >= 0.4:
        score += 5
    elif consistency >= 0.2:
        score -= 5
    else:
        score -= 10
    
    # Cap score between 0 and 100
    return max(0, min(100, score))

def will_donate_again(total_donations, avg_amount, donation_frequency, days_since_last, consistency):
    """
    Predict if donor will donate again based on retention score.
    Returns 1 (will donate) or 0 (will not donate).
    """
    score = calculate_retention_score(total_donations, avg_amount, donation_frequency, days_since_last, consistency)
    
    # Add some randomness to make it realistic
    noise = random.randint(-15, 15)
    adjusted_score = score + noise
    
    # Balanced threshold around 70 for more even class distribution
    return 1 if adjusted_score >= 70 else 0

def generate_donation_history():
    """Generate a complete donation history for a donor"""
    
    # Determine donor type based on probability - more balanced
    rand = random.random()
    
    if rand < 0.20:  # Loyal donor (20%)
        total_donations = random.randint(15, 50)
        avg_amount = random.uniform(100, 1000)
        days_since_last = random.randint(1, 60)
        consistency = random.uniform(0.7, 1.0)
    elif rand < 0.40:  # Regular donor (20%)
        total_donations = random.randint(5, 15)
        avg_amount = random.uniform(50, 300)
        days_since_last = random.randint(30, 180)
        consistency = random.uniform(0.5, 0.8)
    elif rand < 0.55:  # Occasional donor (15%)
        total_donations = random.randint(2, 5)
        avg_amount = random.uniform(25, 150)
        days_since_last = random.randint(90, 365)
        consistency = random.uniform(0.3, 0.6)
    elif rand < 0.70:  # Lapsed donor (15%)
        total_donations = random.randint(1, 5)
        avg_amount = random.uniform(20, 100)
        days_since_last = random.randint(180, 730)
        consistency = random.uniform(0.1, 0.4)
    elif rand < 0.85:  # One-time or new donor (15%)
        total_donations = random.randint(1, 3)
        avg_amount = random.uniform(10, 200)
        days_since_last = random.randint(1, 365)
        consistency = random.uniform(0.0, 0.5)
    else:  # At-risk donor (15%) - likely won't donate
        total_donations = random.randint(1, 4)
        avg_amount = random.uniform(10, 50)
        days_since_last = random.randint(200, 500)
        consistency = random.uniform(0.0, 0.3)
    
    # Calculate donation frequency (donations per year)
    donation_frequency = total_donations / max(1, days_since_last / 365)
    
    # Calculate average donation amount
    amount_variation = random.uniform(0.5, 1.5)
    avg_amount = avg_amount * amount_variation
    
    return {
        'total_donations': int(total_donations),
        'avg_amount': round(avg_amount, 2),
        'donation_frequency': round(donation_frequency, 2),
        'days_since_last': int(days_since_last),
        'consistency': round(consistency, 2)
    }

def generate_donor():
    """Generate a single donor record"""
    first_name = random.choice(FIRST_NAMES)
    last_name = random.choice(LAST_NAMES)
    
    history = generate_donation_history()
    
    # Determine if will donate again
    will_donate = will_donate_again(
        history['total_donations'],
        history['avg_amount'],
        history['donation_frequency'],
        history['days_since_last'],
        history['consistency']
    )
    
    return {
        'donor_id': generate_donor_id(),
        'first_name': first_name,
        'last_name': last_name,
        'email': generate_email(first_name, last_name),
        'city': random.choice(CITIES),
        'total_donations': history['total_donations'],
        'avg_donation_amount': history['avg_amount'],
        'donation_frequency': history['donation_frequency'],
        'days_since_last_donation': history['days_since_last'],
        'donation_consistency': history['consistency'],
        'largest_donation': round(history['avg_amount'] * random.uniform(1.5, 3.0), 2),
        'smallest_donation': round(history['avg_amount'] * random.uniform(0.3, 0.7), 2),
        'campaigns_participated': random.randint(0, 10),
        'volunteer_hours': random.randint(0, 100),
        'referrals': random.randint(0, 15),
        'will_donate_again': will_donate
    }

def generate_dataset():
    """Generate the complete donor dataset"""
    print(f"Generating dataset with {NUM_DONORS} donors...")
    
    donors = []
    for i in range(NUM_DONORS):
        donor = generate_donor()
        donors.append(donor)
        
        if (i + 1) % 500 == 0:
            print(f"  Generated {i + 1} donors...")
    
    return donors

def save_to_csv(donors, filename='donor_retention_dataset.csv'):
    """Save donors to CSV file"""
    fieldnames = [
        'donor_id', 'first_name', 'last_name', 'email', 'city',
        'total_donations', 'avg_donation_amount', 'donation_frequency',
        'days_since_last_donation', 'donation_consistency',
        'largest_donation', 'smallest_donation',
        'campaigns_participated', 'volunteer_hours', 'referrals',
        'will_donate_again'
    ]
    
    with open(filename, 'w', newline='', encoding='utf-8') as f:
        writer = csv.DictWriter(f, fieldnames=fieldnames)
        writer.writeheader()
        writer.writerows(donors)
    
    print(f"Dataset saved to {filename}")
    return filename

def print_statistics(donors):
    """Print dataset statistics"""
    total = len(donors)
    will_donate = sum(1 for d in donors if d['will_donate_again'] == 1)
    wont_donate = total - will_donate
    
    print("\n" + "="*50)
    print("DATASET STATISTICS")
    print("="*50)
    print(f"Total donors: {total}")
    print(f"Will donate again: {will_donate} ({will_donate/total*100:.1f}%)")
    print(f"Won't donate again: {wont_donate} ({wont_donate/total*100:.1f}%)")
    print(f"\nAverage donations: {sum(d['total_donations'] for d in donors)/total:.1f}")
    print(f"Average donation amount: ${sum(d['avg_donation_amount'] for d in donors)/total:.2f}")
    print("="*50)

if __name__ == "__main__":
    donors = generate_dataset()
    filename = save_to_csv(donors)
    print_statistics(donors)
    print(f"\nDone! Created dataset with {len(donors)} records.")
