# IoT Smart Dog Feeder System Documentation

## Overview

This document describes an IoT system designed to automatically detect approaching dogs using an ultrasonic distance sensor and dispense food via a servo motor mechanism. The system also monitors environmental conditions using a DHT11 temperature and humidity sensor and displays real-time data on an LCD screen.

## Table of Contents

1. [System Components](#system-components)
2. [Wiring Diagram](#wiring-diagram)
3. [Component Communication](#component-communication)
4. [Logic Flow](#logic-flow)
5. [Arduino/ESP32 Code](#arduino-esp32-code)
6. [Sensor Calibration](#sensor-calibration)
7. [Power Supply Requirements](#power-supply-requirements)
8. [Optional Features](#optional-features)
9. [Potential Improvements](#potential-improvements)

---

## System Components

| Component | Model | Purpose |
|-----------|-------|---------|
| Microcontroller | ESP32 DevKit V1 | Main controller with WiFi capabilities |
| Ultrasonic Sensor | HC-SR04 | Distance measurement for dog detection |
| Servo Motor | SG90 | Food dispensing mechanism |
| Temperature/Humidity Sensor | DHT11 | Environmental monitoring |
| LCD Display | 16x2 I2C | Real-time data display |
| Power Supply | 5V 2A | System power |

---

## Wiring Diagram

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                        ESP32 Smart Dog Feeder Wiring                        │
└─────────────────────────────────────────────────────────────────────────────┘

                              POWER RAIL
                            ┌──────────────┐
                            │   5V  (VCC)  │
                            └──────┬───────┘
                                   │
           ┌───────────────────────┼───────────────────────┐
           │                       │                       │
           ▼                       ▼                       ▼
    ┌──────────────┐        ┌──────────────┐        ┌──────────────┐
    │  DHT11 VCC  │        │ HC-SR04 VCC  │        │  Servo VCC   │
    └──────┬───────┘        └──────┬───────┘        └──────┬───────┘
           │                       │                       │
           │              ┌────────┴────────┐              │
           │              │                │              │
           ▼              ▼                ▼              ▼
    ┌──────────────────────────────────────────────────────────────┐
    │                         ESP32 GPIO                            │
    │  GPIO4  ──► DHT11 Data    (Pull-up 4.7kΩ to 5V)            │
    │  GPIO5  ──► HC-SR04 Trig                                      │
    │  GPIO18 ──► HC-SR04 Echo                                      │
    │  GPIO23 ──► Servo Signal (SG90 Yellow/Orange wire)          │
    │  GPIO21 ──► LCD SDA                                          │
    │  GPIO22 ──► LCD SCL                                          │
    └──────────────────────────────────────────────────────────────┘
                                   │
                            ┌──────┴───────┐
                            │    GND       │
                            └──────────────┘
                                   │
           ┌───────────────────────┼───────────────────────┐
           │                       │                       │
           ▼                       ▼                       ▼
    ┌──────────────┐        ┌──────────────┐        ┌──────────────┐
    │   DHT11     │        │  HC-SR04     │        │    Servo    │
    │    GND     │        │    GND       │        │    GND      │
    └──────────────┘        └──────────────┘        └──────────────┘


                         LCD I2C Connections
                    ┌─────────────────────────┐
                    │  LCD VCC  ──► 5V        │
                    │  LCD GND  ──► GND       │
                    │  LCD SDA  ──► GPIO 21   │
                    │  LCD SCL  ──► GPIO 22   │
                    └─────────────────────────┘


                         Complete Pin Mapping
                    ╔════════════════════════════════╗
                    ║  ESP32 Pin Assignments         ║
                    ╠════════════════════════════════╣
                    ║  GPIO 4  → DHT11 DATA          ║
                    ║  GPIO 5  → HC-SR04 TRIG        ║
                    ║  GPIO18  → HC-SR04 ECHO        ║
                    ║  GPIO23  → SERVO SIGNAL        ║
                    ║  GPIO21  → LCD SDA (I2C)       ║
                    ║  GPIO22  → LCD SCL (I2C)       ║
                    ║  3.3V    → DHT11 VCC (via 4.7k)║
                    ║  5V      → HC-SR04 VCC        ║
                    ║  5V      → Servo VCC          ║
                    ║  5V      → LCD VCC           ║
                    ║  GND     → All GND pins       ║
                    ╚════════════════════════════════╝
```

---

## Component Communication

### 1. Ultrasonic Sensor (HC-SR04) Communication

The HC-SR04 uses ultrasonic sound waves to measure distance:

```
ESP32 → TRIG (GPIO5) → Sends 10μs HIGH pulse
HC-SR04 → ECHO (GPIO18) → Returns pulse width proportional to distance

Distance Calculation:
  Distance (cm) = (Echo pulse width in μs) / 58

Timing Diagram:
  TRIG ┌────────────────────────────────
 ──┐          ──┘    │
         10μs  │    Echo Pulse
               └────────────────────────────────
                    ↑                          ↑
                    │←─── distance dependent ──→│
```

### 2. DHT11 Sensor Communication

Single-wire bidirectional communication protocol:

```
ESP32 → DATA (GPIO4) → Pull-up resistor required (4.7kΩ to 5V)

Communication Sequence:
  1. ESP32 sends start signal (18ms LOW)
  2. DHT11 responds with 80μs LOW then 80μs HIGH
  3. DHT11 transmits 40 bits (16-bit humidity + 16-bit temperature + 8-bit checksum)

Data Format:
  [8-bit humidity integer][8-bit humidity decimal]
  [8-bit temperature integer][8-bit temperature decimal]
  [8-bit checksum]
```

### 3. Servo Motor (SG90) Communication

PWM-based position control:

```
ESP32 → SIGNAL (GPIO23) → 50Hz PWM (20ms period)

PWM Signal:
  ┌────────────────────────────────────────────────────────────┐
  │                                                            │
  │    0.5ms ──► 0°   (1% duty cycle)                         │
  │    1.0ms ──► 45°  (5% duty cycle)                         │
  │    1.5ms ──► 90°  (7.5% duty cycle)                       │
  │    2.0ms ──► 135° (10% duty cycle)                        │
  │    2.5ms ──► 180° (12.5% duty cycle)                      │
  │                                                            │
  └────────────────────────────────────────────────────────────┘
  
  └─────── 20ms (50Hz) ──────────────────────────────────────→
```

### 4. LCD I2C Communication

Two-wire serial communication:

```
ESP32 → SDA (GPIO21) → Serial Data
ESP32 → SCL (GPIO22) → Serial Clock

I2C Address: 0x27 (common for 16x2 LCD)
Data transmission: 8-bit (4-bit mode with high/low nibble)
```

---

## Logic Flow

### Main System State Machine

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                           SYSTEM STATE DIAGRAM                             │
└─────────────────────────────────────────────────────────────────────────────┘

                         ┌─────────────────────┐
                         │    INITIALIZATION   │
                         │  - Setup sensors    │
                         │  - Setup LCD        │
                         │  - Setup servo      │
                         │  - Load settings    │
                         └──────────┬──────────┘
                                    │
                                    ▼
                         ┌─────────────────────┐
              ┌─────────►│      IDLE          │◄──────────────────┐
              │          │  - Read distance   │                   │
              │          │  - Read DHT11      │                   │
              │          │  - Update LCD      │                   │
              │          │  - Check schedule   │                   │
              │          └─────────┬───────────┘                   │
              │                    │                               │
              │                    │ Distance < THRESHOLD           │
              │                    │ AND not recently fed          │
              │                    ▼                               │
              │          ┌─────────────────────┐                   │
              │          │   DOG DETECTED      │                   │
              │          │  - Trigger servo    │                   │
              │          │  - Dispense food    │                   │
              │          │  - Log event        │                   │
              │          │  - Update LCD       │                   │
              │          └──────────┬──────────┘                   │
              │                     │                               │
              │                     │ Dispensing complete          │
              │                     │ OR timeout                   │
              │                     ▼                               │
              │          ┌─────────────────────┐                   │
              │          │      FEEDING         │                   │
              │          │  - Wait for dog      │                   │
              │          │  - Monitor distance  │                   │
              │          │  - Cooldown timer     │                   │
              │          └──────────┬──────────┘                   │
              │                     │                               │
              │                     │ Cooldown elapsed             │
              │                     └───────────────┐               │
              │                                     │               │
              │                    (back to IDLE)  │               │
              │                                     │               │
              └─────────────────────────────────────┘               │

                              MANUAL OVERRIDE
                         ┌─────────────────────┐
                         │  BUTTON PRESSED     │
                         │  - Force dispense   │
                         │  - Reset cooldown   │
                         └─────────────────────┘
```

### Detection Algorithm

```
┌─────────────────────────────────────────────────────────────────────────────┐
│                        DOG DETECTION ALGORITHM                              │
└─────────────────────────────────────────────────────────────────────────────┘

START
  │
  ▼
Read Ultrasonic Distance
  │
  ├── Distance > MAX_RANGE (e.g., 200cm) ──► IGNORE (out of range)
  │
  └── Distance <= MAX_RANGE
        │
        ▼
  Is Distance < DETECTION_THRESHOLD? (e.g., 50cm)
        │
        ├── NO ──► Return to IDLE
        │
        └── YES
              │
              ▼
        Has Cooldown Elapsed? (e.g., 5 minutes)
              │
              ├── NO ──► Return to IDLE (recently fed)
              │
              └── YES
                    │
                    ▼
              Is Detection Stable? (3 consecutive readings)
                    │
                    ├── NO ──► Take another reading
                    │
                    └── YES ──► Trigger Feeding
                              │
                              ▼
                        Activate Servo
                        Dispense Food
                        Log Event
                        Start Cooldown
```

---

## Arduino/ESP32 Code

The complete Arduino C++ code for the ESP32-based smart dog feeder is provided in `dog_feeder.ino`.

### Code Structure

```cpp
// ============================================================
// IoT Smart Dog Feeder - ESP32 Implementation
// ============================================================
// Author: System Designer
// Date: 2026
// Description: Automatic dog food dispenser with proximity
//              detection, environmental monitoring, and LCD display
// ============================================================

// ============================================================================
// INCLUDES AND LIBRARIES
// ============================================================================

#include <Wire.h>                    // I2C communication
#include <LiquidCrystal_I2C.h>       // LCD display library
#include <DHT.h>                     // DHT sensor library
#include <Servo.h>                   // Servo motor library
#include <WiFi.h>                    // WiFi (for optional features)

// ============================================================================
// PIN DEFINITIONS
// ============================================================================

// Ultrasonic Sensor (HC-SR04)
const int TRIG_PIN = 5;   // GPIO5 - Trigger pin
const int ECHO_PIN = 18;  // GPIO18 - Echo pin

// DHT11 Temperature/Humidity Sensor
const int DHT_PIN = 4;    // GPIO4 - Data pin
#define DHTTYPE DHT11     // Sensor type

// Servo Motor
const int SERVO_PIN = 23; // GPIO23 - Signal pin

// Manual Override Button (optional)
const int BUTTON_PIN = 19; // GPIO19 - Manual feed button

// ============================================================================
// CONFIGURATION CONSTANTS
// ============================================================================

// Detection Parameters
const float DETECTION_THRESHOLD_CM = 50.0;  // Distance to trigger feeding (cm)
const float MAX_MEASUREMENT_CM = 200.0;    // Maximum sensor range (cm)
const int STABLE_READINGS_REQUIRED = 3;     // Consecutive readings for stable detection

// Timing Parameters
const unsigned long FEEDING_DURATION_MS = 2000;  // How long to dispense food (ms)
const unsigned long COOLDOWN_MS = 300000;         // 5 minutes between feedings
const unsigned long MEASUREMENT_INTERVAL_MS = 500; // Time between distance checks

// Servo Positions
const int SERVO_CLOSED = 0;    // Food container closed
const int SERVO_OPEN = 90;     // Food container open
const int SERVO_SPEED = 15;    // Delay between servo moves (ms)

// ============================================================================
// GLOBAL VARIABLES
// ============================================================================

// Objects
DHT dht(DHT_PIN, DHTTYPE);           // DHT11 sensor object
Servo foodServo;                     // Servo motor object
LiquidCrystal_I2C lcd(0x27, 16, 2); // LCD display (I2C address 0x27, 16x2)

// State Variables
bool dogPresent = false;
bool feedingInProgress = false;
unsigned long lastFeedingTime = 0;
unsigned long lastMeasurementTime = 0;
int stableReadingsCount = 0;
float lastDistance = 0;

// Environmental Data
float currentTemperature = 0;
float currentHumidity = 0;

// Buffer for distance readings
float distanceBuffer[STABLE_READINGS_REQUIRED];

// ============================================================================
// FUNCTION PROTOTYPES
// ============================================================================

void initializeSystem();
float measureDistance();
float getSmoothedDistance();
bool isDogDetected();
void readEnvironment();
void dispenseFood();
void updateDisplay();
void handleManualOverride();
void runScheduledFeeding();
unsigned long getElapsedTime(unsigned long previousTime);

// ============================================================================
// MAIN ARDUINO FUNCTIONS
// ============================================================================

void setup() {
    // Initialize serial communication for debugging
    Serial.begin(115200);
    delay(1000);
    
    Serial.println("========================================");
    Serial.println("IoT Smart Dog Feeder - Starting...");
    Serial.println("========================================");
    
    // Initialize all components
    initializeSystem();
    
    Serial.println("System initialized successfully!");
    Serial.println("Waiting for dog detection...");
}

void loop() {
    // Get current time
    unsigned long currentTime = millis();
    
    // Periodically measure distance
    if (currentTime - lastMeasurementTime >= MEASUREMENT_INTERVAL_MS) {
        lastMeasurementTime = currentTime;
        
        // Read distance sensor
        lastDistance = measureDistance();
        
        // Get smoothed distance (filter noise)
        float smoothedDistance = getSmoothedDistance();
        
        // Check if dog is detected
        if (isDogDetected() && !feedingInProgress) {
            dogPresent = true;
            
            // Trigger feeding sequence
            Serial.println("Dog detected! Initiating feeding...");
            dispenseFood();
            
            dogPresent = false;
        }
    }
    
    // Read environmental sensors
    readEnvironment();
    
    // Update LCD display
    updateDisplay();
    
    // Check manual override button
    handleManualOverride();
    
    // Check scheduled feeding times
    runScheduledFeeding();
    
    // Small delay to prevent CPU overload
    delay(10);
}

// ============================================================================
// INITIALIZATION FUNCTIONS
// ============================================================================

/**
 * Initialize all system components
 * Sets up GPIO pins, sensors, servo, and LCD display
 */
void initializeSystem() {
    // Initialize ultrasonic sensor pins
    pinMode(TRIG_PIN, OUTPUT);
    pinMode(ECHO_PIN, INPUT);
    digitalWrite(TRIG_PIN, LOW);  // Ensure trigger is LOW at start
    
    // Initialize DHT11 sensor
    dht.begin();
    
    // Initialize servo motor
    foodServo.attach(SERVO_PIN);
    foodServo.write(SERVO_CLOSED);  // Start with food container closed
    delay(500);  // Allow servo to reach position
    
    // Initialize LCD display
    lcd.begin();
    lcd.backlight();
    lcd.clear();
    lcd.print("Smart Dog Feeder");
    lcd.setCursor(0, 1);
    lcd.print("Initializing...");
    delay(1500);
    
    // Initialize manual override button (if used)
    pinMode(BUTTON_PIN, INPUT_PULLUP);
    
    // Initialize distance buffer
    for (int i = 0; i < STABLE_READINGS_REQUIRED; i++) {
        distanceBuffer[i] = MAX_MEASUREMENT_CM;
    }
    
    Serial.println("All components initialized!");
}

// ============================================================================
// DISTANCE MEASUREMENT FUNCTIONS
// ============================================================================

/**
 * Measure distance using HC-SR04 ultrasonic sensor
 * Returns distance in centimeters
 */
float measureDistance() {
    // Send trigger pulse
    digitalWrite(TRIG_PIN, HIGH);
    delayMicroseconds(10);  // 10μs pulse
    digitalWrite(TRIG_PIN, LOW);
    
    // Measure echo pulse duration
    long duration = pulseIn(ECHO_PIN, HIGH, 30000);  // 30ms timeout
    
    // Calculate distance (speed of sound: 343 m/s)
    // Distance = (duration / 2) * 0.0343 cm/μs
    // Simplified: Distance = duration / 58
    float distance = (duration > 0) ? (duration / 58.0) : MAX_MEASUREMENT_CM;
    
    // Clamp to valid range
    if (distance > MAX_MEASUREMENT_CM) {
        distance = MAX_MEASUREMENT_CM;
    }
    
    return distance;
}

/**
 * Get smoothed distance using moving average filter
 * Reduces noise and false triggers
 */
float getSmoothedDistance() {
    // Shift buffer and add new reading
    for (int i = 0; i < STABLE_READINGS_REQUIRED - 1; i++) {
        distanceBuffer[i] = distanceBuffer[i + 1];
    }
    distanceBuffer[STABLE_READINGS_REQUIRED - 1] = lastDistance;
    
    // Calculate average
    float sum = 0;
    for (int i = 0; i < STABLE_READINGS_REQUIRED; i++) {
        sum += distanceBuffer[i];
    }
    
    return sum / STABLE_READINGS_REQUIRED;
}

// ============================================================================
// DOG DETECTION LOGIC
// ============================================================================

/**
 * Check if a dog is present based on distance readings
 * Returns true if detection is stable and within threshold
 */
bool isDogDetected() {
    // Check if distance is within detection threshold
    if (lastDistance < DETECTION_THRESHOLD_CM && lastDistance > 5.0) {
        stableReadingsCount++;
        
        // Require stable readings to confirm detection
        if (stableReadingsCount >= STABLE_READINGS_REQUIRED) {
            stableReadingsCount = 0;
            return true;
        }
    } else {
        // Reset count if no detection
        stableReadingsCount = 0;
    }
    
    return false;
}

/**
 * Check if cooldown period has elapsed since last feeding
 */
bool canFeed() {
    unsigned long elapsed = millis() - lastFeedingTime;
    return (elapsed >= COOLDOWN_MS);
}

// ============================================================================
// FEEDING CONTROL FUNCTIONS
// ============================================================================

/**
 * Dispense food using servo motor
 * Opens and closes the food container
 */
void dispenseFood() {
    // Check cooldown
    if (!canFeed()) {
        Serial.println("Cooldown period active. Feeding skipped.");
        lcd.clear();
        lcd.print("Cooldown Active");
        lcd.setCursor(0, 1);
        lcd.print("Wait...");
        delay(1500);
        return;
    }
    
    feedingInProgress = true;
    
    // Log feeding start
    Serial.println("Starting food dispensing...");
    lcd.clear();
    lcd.print("Dispensing Food!");
    
    // Open food container (rotate servo)
    for (int pos = SERVO_CLOSED; pos <= SERVO_OPEN; pos += 5) {
        foodServo.write(pos);
        delay(SERVO_SPEED);
    }
    
    // Hold open for feeding duration
    delay(FEEDING_DURATION_MS);
    
    // Close food container
    for (int pos = SERVO_OPEN; pos >= SERVO_CLOSED; pos -= 5) {
        foodServo.write(pos);
        delay(SERVO_SPEED);
    }
    
    // Update last feeding time
    lastFeedingTime = millis();
    feedingInProgress = false;
    
    // Log completion
    Serial.println("Food dispensing complete!");
    lcd.clear();
    lcd.print("Feeding Complete!");
    delay(2000);
}

/**
 * Handle manual override button press
 */
void handleManualOverride() {
    if (digitalRead(BUTTON_PIN) == LOW) {  // Button pressed (active LOW with pullup)
        delay(50);  // Debounce
        
        if (digitalRead(BUTTON_PIN) == LOW) {
            Serial.println("Manual override activated!");
            lcd.clear();
            lcd.print("Manual Feed");
            lcd.setCursor(0, 1);
            lcd.print("Activated");
            delay(1000);
            
            // Force feeding regardless of cooldown
            feedingInProgress = true;
            dispenseFood();
            
            // Wait for button release
            while (digitalRead(BUTTON_PIN) == LOW) {
                delay(10);
            }
        }
    }
}

// ============================================================================
// ENVIRONMENTAL SENSING
// ============================================================================

/**
 * Read temperature and humidity from DHT11 sensor
 */
void readEnvironment() {
    // Reading takes ~250ms for DHT11
    float h = dht.readHumidity();
    float t = dht.readTemperature();  // Celsius by default
    
    // Check if reading is valid
    if (!isnan(h) && !isnan(t)) {
        currentHumidity = h;
        currentTemperature = t;
    } else {
        Serial.println("DHT11 reading failed!");
    }
}

// ============================================================================
// LCD DISPLAY FUNCTIONS
// ============================================================================

/**
 * Update LCD display with current system status
 * Shows temperature, humidity, distance, and feeding status
 */
void updateDisplay() {
    static unsigned long lastUpdate = 0;
    static int displayLine = 0;
    
    // Update display every 2 seconds
    if (millis() - lastUpdate < 2000) {
        return;
    }
    lastUpdate = millis();
    
    // Toggle between different display modes
    displayLine = (displayLine + 1) % 3;
    
    lcd.clear();
    
    switch (displayLine) {
        case 0:
            // Display temperature and humidity
            lcd.print("Temp:");
            lcd.print(currentTemperature, 1);
            lcd.print("C");
            lcd.setCursor(0, 1);
            lcd.print("Humidity:");
            lcd.print(currentHumidity, 1);
            lcd.print("%");
            break;
            
        case 1:
            // Display distance
            lcd.print("Distance:");
            lcd.print(lastDistance, 1);
            lcd.print(" cm");
            lcd.setCursor(0, 1);
            if (dogPresent) {
                lcd.print("Dog Detected!");
            } else {
                lcd.print("No Dog");
            }
            break;
            
        case 2:
            // Display system status
            lcd.print("Status:");
            if (feedingInProgress) {
                lcd.print("Feeding");
            } else if (canFeed()) {
                lcd.print("Ready");
            } else {
                lcd.print("Cooldown");
            }
            lcd.setCursor(0, 1);
            // Show time since last feeding
            unsigned long elapsed = millis() - lastFeedingTime;
            unsigned long remaining = (COOLDOWN_MS - elapsed) / 1000;
            if (lastFeedingTime == 0) {
                lcd.print("Never fed");
            } else if (remaining > 0) {
                lcd.print("Next:");
                lcd.print(remaining);
                lcd.print("s");
            } else {
                lcd.print("Ready to feed");
            }
            break;
    }
}

// ============================================================================
// SCHEDULED FEEDING (OPTIONAL FEATURE)
// ============================================================================

/**
 * Structure to hold feeding schedule
 */
struct FeedingSchedule {
    int hour;
    int minute;
    bool enabled;
};

// Array of feeding times (up to 4 scheduled feedings)
FeedingSchedule feedingSchedule[] = {
    {8, 0, true},   // 8:00 AM
    {12, 0, true},  // 12:00 PM
    {18, 0, true},  // 6:00 PM
    {21, 0, false}  // 9:00 PM (disabled)
};

const int NUM_SCHEDULES = sizeof(feedingSchedule) / sizeof(FeedingSchedule);

/**
 * Check if it's time for a scheduled feeding
 */
void runScheduledFeeding() {
    // Get current time
    time_t now;
    time(&now);
    struct tm *timeinfo = localtime(&now);
    
    int currentHour = timeinfo->tm_hour;
    int currentMinute = timeinfo->tm_min;
    
    // Check each schedule
    for (int i = 0; i < NUM_SCHEDULES; i++) {
        if (feedingSchedule[i].enabled &&
            currentHour == feedingSchedule[i].hour &&
            currentMinute == feedingSchedule[i].minute &&
            !feedingInProgress) {
            
            // Check if we've already fed at this time
            static bool fedThisHour[NUM_SCHEDULES] = {false};
            
            if (!fedThisHour[i]) {
                Serial.println("Scheduled feeding time!");
                lcd.clear();
                lcd.print("Scheduled Feed");
                delay(1000);
                
                dispenseFood();
                fedThisHour[i] = true;
            }
        }
        
        // Reset fedThisHour at the start of each hour
        if (currentMinute == 0) {
            fedThisHour[i] = false;
        }
    }
}

// ============================================================================
// SENSOR CALIBRATION GUIDELINES
// ============================================================================

/**
 * Calibration Considerations:
 * 
 * 1. ULTRASONIC SENSOR (HC-SR04):
 *    - Mount sensor at appropriate height (30-50cm from ground)
 *    - Angle sensor downward slightly for better dog detection
 *    - Account for dog's typical size (adjust threshold accordingly)
 *    - Consider ambient temperature effect on speed of sound
 *    
 * 2. FALSE TRIGGER PREVENTION:
 *    - Use moving average filter (implemented in code)
 *    - Require multiple consecutive readings before triggering
 *    - Set minimum detection distance to avoid wall reflections
 *    - Implement cooldown between feedings
 *    - Consider using PIR motion sensor for additional verification
 *    
 * 3. DHT11 SENSOR:
 *    - Place away from direct sunlight
 *    - Keep away from heat sources (servo motor)
 *    - Allow air circulation around sensor
 *    - DHT11 accuracy: ±2°C temperature, ±5% humidity
 *    
 * 4. SERVO MOTOR:
 *    - Calibrate open/close positions for your specific dispenser
 *    - Test dispensing amount and adjust duration
 *    - Consider using a gear motor for more reliable operation
 */

// ============================================================================
// POWER SUPPLY REQUIREMENTS
// ============================================================================

/**
 * Power Supply Specifications:
 * 
 * Required: 5V DC, minimum 2A current
 * 
 * Component Current Draw:
 * - ESP32: ~500mA (WiFi enabled), ~80mA (idle)
 * - HC-SR04: ~15mA
 * - DHT11: ~2.5mA
 * - SG90 Servo: ~250mA (during movement)
 * - LCD (with backlight): ~40mA
 * 
 * Total Peak Current: ~800mA
 * Recommended: 5V 2A power adapter
 * 
 * IMPORTANT: 
 * - Use separate power for servo if possible to avoid voltage drops
 * - Add 100μF and 10μF capacitors near ESP32 for stability
 * - Consider using a battery backup for uninterrupted operation
 */

// ============================================================================
// POTENTIAL IMPROVEMENTS
// ============================================================================

/**
 * 1. WI-FI CONNECTIVITY:
 *    - Add WiFiManager for easy setup
 *    - Send notifications when dog is fed
 *    - Log feeding events to cloud database
 *    - Remote monitoring via web dashboard
 *    - Integrate with smart home systems
 * 
 * 2. IMPROVED DETECTION:
 *    - Add PIR motion sensor for better detection
 *    - Use camera-based detection (ESP32-CAM)
 *    - Implement machine learning for dog recognition
 *    - Add weight sensor to food bowl
 *    - Use multiple ultrasonic sensors for coverage
 * 
 * 3. ADDITIONAL FEATURES:
 *    - RFID/NFC tag for individual pet identification
 *    - Food level sensor (ultrasonic in container)
 *    - Adjustable portion control
 *    - Battery backup with low battery alert
 *    - Sound/voice prompts
 *    - Mobile app integration
 *    - Integration with existing camera-based dog detection system
 */

// ============================================================================
// END OF CODE
// ============================================================================
