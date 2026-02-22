// ======================================================
// ESP32 Dog Feeder with LCD, Ultrasonic & Servo
// VERSION 4.2 - Auto Dog Detection + Manual Control
// ======================================================

#include <WiFi.h>
#include <HTTPClient.h>
#include <DHT.h>
#include <LiquidCrystal_I2C.h>
#include <NewPing.h>
#include <ESP32Servo.h>

// ---------------- CONFIGURATION ----------------
// EDIT THESE VALUES FOR YOUR SETUP:
const char* WIFI_SSID = "Airbox-10B3";
const char* WIFI_PASSWORD = "6D4iNNyYy6NZ";
const char* API_SERVER = "http://192.168.1.117:8000";
const char* DEVICE_ID = "IOT_699a3e49033c8";

const char* UNIVERSAL_CONFIG_ENDPOINT = "/admin/stations/iot/config/";
const char* UNIVERSAL_DATA_ENDPOINT = "/admin/stations/iot/data";
const char* UNIVERSAL_HEARTBEAT_ENDPOINT = "/admin/stations/iot/heartbeat/";
const char* SERVO_CONTROL_ENDPOINT = "/admin/stations/iot/servo/";

// ---------------- HARDWARE PINS ----------------
#define DHTPIN 4
#define DHTTYPE DHT11

#define TRIGGER_PIN 5
#define ECHO_PIN 18
#define MAX_DISTANCE 200
#define DOG_DETECTION_THRESHOLD 50.0  // cm - dog detected within this range

#define SERVO_PIN 13
#define LCD_ADDRESS 0x27
#define LCD_COLS 16
#define LCD_ROWS 2

DHT dht(DHTPIN, DHTTYPE);
LiquidCrystal_I2C lcd(LCD_ADDRESS, LCD_COLS, LCD_ROWS);
NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE);
Servo foodServo;

#define LOW_FOOD_THRESHOLD 10.0

// ---------------- DYNAMIC CONFIG ----------------
struct DeviceConfig {
    int stationId = 0;
    String stationCode = "";
    String apiServer = "http://127.0.0.1:8000";
    String apiEndpoint = "/admin/api/iot/data";
    int reportingInterval = 3;    // seconds
    int heartbeatInterval = 60;
    bool configured = false;
    bool autoFeedEnabled = true;  // Auto feed when dog detected
    String wifiSsid = "";
    String wifiPassword = "";
};

DeviceConfig deviceConfig;

// ---------------- STATE ----------------
bool wifiConnected = false;
bool hasValidReading = false;
bool configLoaded = false;

unsigned long lastSend = 0;
unsigned long lastHeartbeat = 0;
unsigned long lastConfigFetch = 0;
unsigned long lastFoodCheck = 0;
unsigned long lastDogDetection = 0;
unsigned long lastServoCommandCheck = 0;

const unsigned long CONFIG_REFRESH_INTERVAL_MS = 3600000;
const unsigned long RECONNECT_DELAY_MS = 5000;

float temperature = 0.0f;
float humidity = 0.0f;
float foodDistance = 0.0f;
float dogDistance = 0.0f;
bool lowFoodAlert = false;
bool dogDetected = false;

int connectionRetries = 0;
const int MAX_RETRIES = 3;

// Food dispense
bool dispensingFood = false;
unsigned long dispenseStartTime = 0;
const unsigned long DISPENSE_DURATION = 2000;

// Manual override
bool manualOverride = false;
bool manualServoOpen = false;
unsigned long lastAutoDispense = 0;
const unsigned long AUTO_DISPENSE_COOLDOWN = 30000;  // 30 seconds between auto dispenses

// ======================================================
// SETUP
// ======================================================
void setup() {
    Serial.begin(115200);
    Serial.println();
    Serial.println("=== ESP32 Dog Feeder v4.2 ===");
    Serial.print("Device ID: ");
    Serial.println(DEVICE_ID);
    
    lcd.init();
    lcd.backlight();
    lcd.setCursor(0, 0);
    lcd.print("Dog Feeder v4.2");
    lcd.setCursor(0, 1);
    lcd.print("Initializing...");
    
    dht.begin();
    delay(1000);
    
    foodServo.attach(SERVO_PIN);
    foodServo.write(0);  // Start closed
    
    lcd.clear();
    lcd.setCursor(0, 0);
    lcd.print("Connecting WiFi...");
    
    fetchDeviceConfig();
    connectToWiFi();
    updateLCDStatus();
}

// ======================================================
// MAIN LOOP
// ======================================================
void loop() {
    if (!ensureWiFiConnected()) {
        delay(1000);
        return;
    }
    
    if (millis() - lastConfigFetch > CONFIG_REFRESH_INTERVAL_MS) {
        fetchDeviceConfig();
        lastConfigFetch = millis();
    }
    
    readDHTSensor();
    
    // Dog detection
    if (millis() - lastDogDetection > 500) {
        detectDog();
        lastDogDetection = millis();
        
        // Auto-dispense if dog detected and auto-feed is enabled
        if (deviceConfig.autoFeedEnabled && dogDetected && !manualOverride) {
            // Check cooldown to prevent continuous dispensing
            if (millis() - lastAutoDispense > AUTO_DISPENSE_COOLDOWN) {
                Serial.println("Dog detected! Auto-dispensing food...");
                dispenseFood();
                lastAutoDispense = millis();
            }
        }
    }
    
    // Check for manual servo commands from server
    if (millis() - lastServoCommandCheck > 1000) {
        checkServoCommands();
        lastServoCommandCheck = millis();
    }
    
    if (millis() - lastFoodCheck > 2000) {
        checkFoodLevel();
        lastFoodCheck = millis();
    }
    
    handleFoodDispensing();
    updateLCDDisplay();
    
    unsigned long sendInterval = deviceConfig.reportingInterval * 1000;
    if (hasValidReading && millis() - lastSend > sendInterval) {
        sendSensorData();
        lastSend = millis();
    }
    
    unsigned long heartbeatInterval = deviceConfig.heartbeatInterval * 1000;
    if (millis() - lastHeartbeat > heartbeatInterval) {
        sendHeartbeat();
        lastHeartbeat = millis();
    }
    
    delay(100);
}

// ======================================================
// WIFI
// ======================================================
void connectToWiFi() {
    Serial.print("Connecting to WiFi: ");
    Serial.println(WIFI_SSID);
    
    WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
    
    int attempts = 0;
    while (WiFi.status() != WL_CONNECTED && attempts < 20) {
        delay(500);
        Serial.print(".");
        attempts++;
    }
    
    if (WiFi.status() == WL_CONNECTED) {
        wifiConnected = true;
        Serial.println();
        Serial.print("WiFi Connected! IP: ");
        Serial.println(WiFi.localIP());
    } else {
        Serial.println();
        Serial.println("WiFi connection failed!");
        wifiConnected = false;
    }
}

bool ensureWiFiConnected() {
    if (WiFi.status() != WL_CONNECTED) {
        Serial.println("WiFi lost, reconnecting...");
        connectToWiFi();
        return WiFi.status() == WL_CONNECTED;
    }
    return true;
}

// ======================================================
// CONFIG FETCH
// ======================================================
void fetchDeviceConfig() {
    if (!ensureWiFiConnected()) return;
    
    HTTPClient http;
    String url = String(API_SERVER) + String(UNIVERSAL_CONFIG_ENDPOINT) + String(DEVICE_ID);
    
    Serial.print("Fetching config from: ");
    Serial.println(url);
    
    http.setConnectTimeout(5000);
    http.setTimeout(10000);
    
    if (!http.begin(url)) return;
    
    int code = http.GET();
    
    if (code == 200) {
        String response = http.getString();
        parseConfig(response);
        configLoaded = true;
        Serial.println("Config loaded successfully!");
    } else if (code == 404) {
        Serial.println("Device not found in admin panel!");
    }
    
    http.end();
}

void reconnectWithNewWiFi() {
    if (deviceConfig.wifiSsid.length() > 0) {
        WiFi.disconnect();
        delay(100);
        WiFi.begin(deviceConfig.wifiSsid.c_str(), deviceConfig.wifiPassword.c_str());
    }
}

void parseConfig(String json) {
    int idPos = json.indexOf("\"station_id\":");
    if (idPos > 0) {
        int valueStart = json.indexOf(":", idPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.stationId = val.toInt();
    }
    
    int codePos = json.indexOf("\"station_code\":");
    if (codePos > 0) {
        int valueStart = json.indexOf("\"", codePos + 14) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        deviceConfig.stationCode = json.substring(valueStart, valueEnd);
    }
    
    int serverPos = json.indexOf("\"api_server\":");
    if (serverPos > 0) {
        int valueStart = json.indexOf("\"", serverPos + 12) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        deviceConfig.apiServer = json.substring(valueStart, valueEnd);
        deviceConfig.apiServer.replace("\\/", "/");
    }
    
    int reportPos = json.indexOf("\"reporting_interval\":");
    if (reportPos > 0) {
        int valueStart = json.indexOf(":", reportPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.reportingInterval = val.toInt();
        if (deviceConfig.reportingInterval == 0) deviceConfig.reportingInterval = 3;
    }
    
    // Parse auto_feed_enabled
    int autoFeedPos = json.indexOf("\"auto_feed_enabled\":");
    if (autoFeedPos > 0) {
        int valueStart = json.indexOf(":", autoFeedPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.autoFeedEnabled = (val == "true" || val == "1");
    }
    
    deviceConfig.configured = true;
}

// ======================================================
// DHT SENSOR
// ======================================================
void readDHTSensor() {
    float h = dht.readHumidity(false);
    float t = dht.readTemperature(false);
    
    if (isnan(h) || isnan(t)) {
        delay(200);
        h = dht.readHumidity();
        t = dht.readTemperature();
    }
    
    if (isnan(h) || isnan(t)) {
        Serial.println("DHT11 ERROR: Failed to read sensor");
        hasValidReading = false;
        return;
    }
    
    humidity = h;
    temperature = t;
    hasValidReading = true;
    
    Serial.print("DHT11 OK - Temp: ");
    Serial.print(temperature, 1);
    Serial.print("C   Humidity: ");
    Serial.println(humidity, 1);
}

// ======================================================
// ULTRASONIC - DOG DETECTION
// ======================================================
void detectDog() {
    int readings = 3;
    float totalDistance = 0;
    
    for (int i = 0; i < readings; i++) {
        delay(30);
        totalDistance += sonar.ping_cm();
    }
    
    dogDistance = totalDistance / readings;
    dogDetected = (dogDistance > 0 && dogDistance < DOG_DETECTION_THRESHOLD);
    
    Serial.print("Dog Detection - Distance: ");
    Serial.print(dogDistance, 1);
    Serial.print(" cm, Detected: ");
    Serial.println(dogDetected ? "YES" : "NO");
}

// ======================================================
// ULTRASONIC - FOOD LEVEL
// ======================================================
void checkFoodLevel() {
    int readings = 3;
    float totalDistance = 0;
    
    for (int i = 0; i < readings; i++) {
        delay(50);
        totalDistance += sonar.ping_cm();
    }
    
    foodDistance = totalDistance / readings;
    lowFoodAlert = (foodDistance > 0 && foodDistance < LOW_FOOD_THRESHOLD);
    
    Serial.print("Food Level: ");
    Serial.print(foodDistance, 1);
    Serial.println(" cm");
    
    if (lowFoodAlert) {
        Serial.println("WARNING: Low food level!");
    }
}

// ======================================================
// SERVO CONTROL
// ======================================================
void dispenseFood() {
    if (!dispensingFood) {
        dispensingFood = true;
        dispenseStartTime = millis();
        
        Serial.println("Dispensing food...");
        lcd.clear();
        lcd.setCursor(0, 0);
        lcd.print("Dispensing food!");
        
        foodServo.write(90);  // Open
    }
}

void openServo() {
    Serial.println("Opening servo (manual)...");
    foodServo.write(90);
    manualServoOpen = true;
}

void closeServo() {
    Serial.println("Closing servo...");
    foodServo.write(0);
    manualServoOpen = false;
}

void handleFoodDispensing() {
    if (dispensingFood) {
        if (millis() - dispenseStartTime >= DISPENSE_DURATION) {
            foodServo.write(0);
            dispensingFood = false;
            Serial.println("Food dispensing complete");
        }
    } else if (manualOverride && manualServoOpen) {
        // Keep servo open during manual override
    } else {
        // Ensure servo is closed when not dispensing
        foodServo.write(0);
    }
}

// ======================================================
// CHECK FOR SERVO COMMANDS FROM SERVER
// ======================================================
void checkServoCommands() {
    HTTPClient http;
    String url = String(deviceConfig.apiServer) + String(SERVO_CONTROL_ENDPOINT) + String(DEVICE_ID);
    
    http.setConnectTimeout(3000);
    http.setTimeout(5000);
    
    if (!http.begin(url)) return;
    
    int code = http.GET();
    
    if (code == 200) {
        String response = http.getString();
        Serial.print("Servo command response: ");
        Serial.println(response);
        
        // Parse command from response
        if (response.indexOf("\"command\":\"open\"") > 0) {
            manualOverride = true;
            openServo();
        } else if (response.indexOf("\"command\":\"close\"") > 0) {
            manualOverride = true;
            closeServo();
        } else if (response.indexOf("\"command\":\"auto\"") > 0) {
            manualOverride = false;
            closeServo();
        }
    }
    
    http.end();
}

// ======================================================
// LCD DISPLAY
// ======================================================
void updateLCDStatus() {
    lcd.clear();
    if (wifiConnected) {
        lcd.setCursor(0, 0);
        lcd.print("WiFi: Connected");
    } else {
        lcd.setCursor(0, 0);
        lcd.print("WiFi: Disconnected");
    }
}

void updateLCDDisplay() {
    static unsigned long lastLCDUpdate = 0;
    if (millis() - lastLCDUpdate < 1000) return;
    lastLCDUpdate = millis();
    
    lcd.clear();
    
    // Row 0: Temperature and Humidity
    lcd.setCursor(0, 0);
    lcd.print("T:");
    lcd.print(temperature, 0);
    lcd.print("C H:");
    lcd.print(humidity, 0);
    lcd.print("%");
    
    // Row 1: Dog detection / Servo status
    lcd.setCursor(0, 1);
    if (dogDetected) {
        lcd.print("DOG! ");
        lcd.print(dogDistance, 0);
        lcd.print("cm");
    } else if (manualOverride) {
        lcd.print("MANUAL: ");
        lcd.print(manualServoOpen ? "OPEN" : "CLOSED");
    } else if (dispensingFood) {
        lcd.print("DISPENSING...");
    } else {
        lcd.print("NO DOG ");
        lcd.print(dogDistance, 0);
        lcd.print("cm");
    }
}

// ======================================================
// SEND DATA
// ======================================================
void sendSensorData() {
    if (!ensureWiFiConnected()) return;
    if (!hasValidReading) return;
    
    HTTPClient http;
    String url = deviceConfig.apiServer + String(UNIVERSAL_DATA_ENDPOINT);
    
    Serial.print("Sending data to: ");
    Serial.println(url);
    
    String json = "{";
    json += "\"device_id\":\"" + String(DEVICE_ID) + "\",";
    json += "\"station_code\":\"" + deviceConfig.stationCode + "\",";
    json += "\"temperature\":" + String(temperature, 1) + ",";
    json += "\"humidity\":" + String(humidity, 1) + ",";
    json += "\"distance\":" + String(dogDistance, 1) + ",";
    json += "\"ultrasonic_distance_cm\":" + String(dogDistance, 1) + ",";
    json += "\"dog_detected\":" + String(dogDetected ? "true" : "false") + ",";
    json += "\"food_dispensed\":" + String(dispensingFood ? "true" : "false") + ",";
    json += "\"auto_feed_enabled\":" + String(deviceConfig.autoFeedEnabled ? "true" : "false") + ",";
    json += "\"manual_override\":" + String(manualOverride ? "true" : "false") + ",";
    json += "\"device_type\":\"ESP32_DOG_FEEDER\",";
    json += "\"firmirmware_version\":\"4.2.0\"";
    json += "}";
    
    Serial.println("Payload: ");
    Serial.println(json);
    
    http.setConnectTimeout(5000);
    http.setTimeout(8000);
    
    if (!http.begin(url)) return;
    
    http.addHeader("Content-Type", "application/json");
    int code = http.POST(json);
    
    Serial.print("HTTP Response: ");
    Serial.println(code);
    
    if (code > 0) {
        String response = http.getString();
        Serial.println("Server response: ");
        Serial.println(response);
    }
    
    http.end();
}

// ======================================================
// HEARTBEAT
// ======================================================
void sendHeartbeat() {
    if (!ensureWiFiConnected()) return;
    
    HTTPClient http;
    String url = deviceConfig.apiServer + String(UNIVERSAL_HEARTBEAT_ENDPOINT) + String(DEVICE_ID);
    
    http.setConnectTimeout(5000);
    http.setTimeout(8000);
    
    if (!http.begin(url)) return;
    
    int code = http.POST("");
    
    Serial.print("Heartbeat response: ");
    Serial.println(code);
    
    http.end();
}
