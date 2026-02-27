// ======================================================
// ESP32 DHT11 -> Symfony API (Dynamic Configuration)
// VERSION 3.0 - Fully Universal Station-Agnostic
// This code works with ANY observation station - just configure
// the device ID in the admin panel and the ESP32 will automatically
// fetch its station configuration from the server.
// ======================================================

#include <WiFi.h>
#include <HTTPClient.h>
#include <DHT.h>

// ---------------- CONFIGURATION ----------------
// EDIT THESE VALUES FOR YOUR SETUP:
// 1. Set your WiFi credentials
// 2. Set a unique DEVICE_ID (you'll create this device in the admin panel)
// 3. Set the initial API_SERVER (will be overridden by server config)

// WiFi Configuration
const char* WIFI_SSID = "YOUR_WIFI_SSID";        // Change to your WiFi name
const char* WIFI_PASSWORD = "YOUR_WIFI_PASSWORD";  // Change to your WiFi password

// API Server (initial server - will be overridden by server config)
const char* API_SERVER = "http://192.168.1.117:8000";

// DEVICE ID - This is the KEY setting!
// Create a device in the admin panel with this exact ID:
// 1. Go to Station Dashboard -> IoT Devices -> Add Device
// 2. Set Device ID to match this value
// 3. The ESP32 will automatically fetch its station configuration
const char* DEVICE_ID = "ESP32_001";  // Change to your unique device ID

// API Endpoints - Universal Station-Agnostic
// These endpoints don't require station ID - they use device ID instead
const char* UNIVERSAL_CONFIG_ENDPOINT = "/admin/stations/iot/config/";
const char* UNIVERSAL_DATA_ENDPOINT = "/admin/stations/iot/data";
const char* UNIVERSAL_HEARTBEAT_ENDPOINT = "/admin/stations/iot/heartbeat/";

// Legacy endpoints (for backward compatibility)
const char* LEGACY_CONFIG_ENDPOINT = "/admin/stations/%d/iot/config/";
const char* LEGACY_DATA_ENDPOINT = "/admin/api/iot/data";
const char* LEGACY_HEARTBEAT_ENDPOINT = "/admin/stations/%d/iot/heartbeat/";

// ---------------- DHT ----------------
#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

// ---------------- DYNAMIC CONFIG ----------------
// Default values - will be overridden by server config
struct DeviceConfig {
    int stationId = 0;  // Will be set by server
    String stationCode = "";  // Will be set by server
    String apiServer = "http://192.168.1.117:8000";
    String apiEndpoint = "/admin/api/iot/data";
    int reportingInterval = 30;    // seconds
    int heartbeatInterval = 60;    // seconds
    bool configured = false;
    String wifiSsid = "";  // WiFi from server config
    String wifiPassword = "";  // WiFi password from server config
};

DeviceConfig deviceConfig;

// ---------------- STATE ----------------
bool wifiConnected = false;
bool hasValidReading = false;
bool configLoaded = false;

unsigned long lastSend = 0;
unsigned long lastHeartbeat = 0;
unsigned long lastConfigFetch = 0;

const unsigned long CONFIG_REFRESH_INTERVAL_MS = 3600000;  // Refresh config every hour
const unsigned long RECONNECT_DELAY_MS = 5000;

float temperature = 0.0f;
float humidity = 0.0f;

int connectionRetries = 0;
const int MAX_RETRIES = 3;

// ======================================================
// SETUP
// ======================================================
void setup() {
    Serial.begin(115200);
    Serial.println();
    Serial.println("=== ESP32 Dynamic Config v2.0 ===");
    Serial.print("Device ID: ");
    Serial.println(DEVICE_ID);
    
    dht.begin();
    delay(1000);
    
    // Initial config fetch
    fetchDeviceConfig();
    
    // Connect to WiFi
    connectToWiFi();
}

// ======================================================
// MAIN LOOP
// ======================================================
void loop() {
    // Ensure WiFi is connected
    if (!ensureWiFiConnected()) {
        delay(1000);
        return;
    }
    
    // Periodically refresh config from server
    if (millis() - lastConfigFetch > CONFIG_REFRESH_INTERVAL_MS) {
        fetchDeviceConfig();
        lastConfigFetch = millis();
    }
    
    // Read sensor
    readDHTSensor();
    
    // Send data at configured interval
    unsigned long sendInterval = deviceConfig.reportingInterval * 1000;
    if (hasValidReading && millis() - lastSend > sendInterval) {
        sendSensorData();
        lastSend = millis();
    }
    
    // Send heartbeat at configured interval
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
// CONFIG FETCH - Universal Station-Agnostic
// ======================================================
void fetchDeviceConfig() {
    if (!ensureWiFiConnected()) {
        Serial.println("Cannot fetch config: WiFi not connected");
        return;
    }
    
    HTTPClient http;
    
    // Use universal endpoint that fetches config by device ID
    // This makes the ESP32 work with ANY station
    String url = String(API_SERVER) + String(UNIVERSAL_CONFIG_ENDPOINT) + String(DEVICE_ID);
    
    Serial.print("Fetching config from: ");
    Serial.println(url);
    
    http.setConnectTimeout(5000);
    http.setTimeout(10000);
    
    if (!http.begin(url)) {
        Serial.println("http.begin failed for config");
        return;
    }
    
    int code = http.GET();
    
    if (code == 200) {
        String response = http.getString();
        Serial.println("Config response:");
        Serial.println(response);
        
        // Parse JSON response
        parseConfig(response);
        configLoaded = true;
        
        Serial.println("Config loaded successfully!");
        Serial.print("Station ID: ");
        Serial.println(deviceConfig.stationId);
        Serial.print("Station Code: ");
        Serial.println(deviceConfig.stationCode);
        Serial.print("API Server: ");
        Serial.println(deviceConfig.apiServer);
        Serial.print("Reporting Interval: ");
        Serial.println(deviceConfig.reportingInterval);
        
        // If server provided WiFi config, use it
        if (deviceConfig.wifiSsid.length() > 0) {
            Serial.print("Server provided WiFi config, reconnecting...");
            reconnectWithNewWiFi();
        }
    } else if (code == 404) {
        Serial.println("Device not found in admin panel!");
        Serial.println("Please create a device with ID: ");
        Serial.println(DEVICE_ID);
        Serial.println("in the admin panel first.");
    } else {
        Serial.print("Config fetch failed: ");
        Serial.println(code);
        Serial.println(http.getString());
    }
    
    http.end();
}

void reconnectWithNewWiFi() {
    // Switch to WiFi config from server if available
    if (deviceConfig.wifiSsid.length() > 0) {
        Serial.print("Connecting to server-provided WiFi: ");
        Serial.println(deviceConfig.wifiSsid);
        
        WiFi.disconnect();
        delay(100);
        
        WiFi.begin(deviceConfig.wifiSsid.c_str(), deviceConfig.wifiPassword.c_str());
        
        int attempts = 0;
        while (WiFi.status() != WL_CONNECTED && attempts < 20) {
            delay(500);
            Serial.print(".");
            attempts++;
        }
        
        if (WiFi.status() == WL_CONNECTED) {
            Serial.println();
            Serial.print("Connected to new WiFi! IP: ");
            Serial.println(WiFi.localIP());
        }
    }
}

void parseConfig(String json) {
    // Simple JSON parsing (for limited memory devices)
    // In production, consider using ArduinoJSON library
    
    // Extract station_id
    int idPos = json.indexOf("\"station_id\":");
    if (idPos > 0) {
        int valueStart = json.indexOf(":", idPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.stationId = val.toInt();
    }
    
    // Extract station_code
    int codePos = json.indexOf("\"station_code\":");
    if (codePos > 0) {
        int valueStart = json.indexOf("\"", codePos + 14) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        deviceConfig.stationCode = json.substring(valueStart, valueEnd);
    }
    
    // Extract api_server
    int serverPos = json.indexOf("\"api_server\":");
    if (serverPos > 0) {
        int valueStart = json.indexOf("\"", serverPos + 12) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        deviceConfig.apiServer = json.substring(valueStart, valueEnd);
        // Unescape
        deviceConfig.apiServer.replace("\\/", "/");
    }
    
    // Extract api_endpoint
    int endpointPos = json.indexOf("\"api_endpoint\":");
    if (endpointPos > 0) {
        int valueStart = json.indexOf("\"", endpointPos + 14) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        deviceConfig.apiEndpoint = json.substring(valueStart, valueEnd);
        deviceConfig.apiEndpoint.replace("\\/", "/");
    }
    
    // Extract reporting_interval
    int reportPos = json.indexOf("\"reporting_interval\":");
    if (reportPos > 0) {
        int valueStart = json.indexOf(":", reportPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.reportingInterval = val.toInt();
        if (deviceConfig.reportingInterval == 0) deviceConfig.reportingInterval = 30;
    }
    
    // Extract heartbeat_interval
    int hbPos = json.indexOf("\"heartbeat_interval\":");
    if (hbPos > 0) {
        int valueStart = json.indexOf(":", hbPos) + 1;
        int valueEnd = json.indexOf(",", valueStart);
        if (valueEnd < 0) valueEnd = json.indexOf("}", valueStart);
        String val = json.substring(valueStart, valueEnd);
        val.trim();
        deviceConfig.heartbeatInterval = val.toInt();
        if (deviceConfig.heartbeatInterval == 0) deviceConfig.heartbeatInterval = 60;
    }
    
    // Extract wifi_ssid (optional - for remote WiFi configuration)
    int wifiSsidPos = json.indexOf("\"wifi_ssid\":");
    if (wifiSsidPos > 0) {
        int valueStart = json.indexOf("\"", wifiSsidPos + 11) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        if (valueEnd > valueStart) {
            deviceConfig.wifiSsid = json.substring(valueStart, valueEnd);
        }
    }
    
    // Extract wifi_password (optional)
    int wifiPassPos = json.indexOf("\"wifi_password\":");
    if (wifiPassPos > 0) {
        int valueStart = json.indexOf("\"", wifiPassPos + 15) + 1;
        int valueEnd = json.indexOf("\"", valueStart);
        if (valueEnd > valueStart) {
            deviceConfig.wifiPassword = json.substring(valueStart, valueEnd);
        }
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
// SEND DATA - Universal Station-Agnostic
// ======================================================
void sendSensorData() {
    if (!ensureWiFiConnected()) {
        Serial.println("Cannot send data: WiFi not connected");
        return;
    }
    
    if (!hasValidReading) {
        Serial.println("No valid reading, skipping send");
        return;
    }
    
    HTTPClient http;
    
    // Use universal endpoint - device identifies itself by device_id
    String url = deviceConfig.apiServer + String(UNIVERSAL_DATA_ENDPOINT);
    
    Serial.print("Sending data to: ");
    Serial.println(url);
    
    // Build JSON payload - includes device_id for server-side lookup
    String json = "{";
    json += "\"device_id\":\"" + String(DEVICE_ID) + "\",";
    json += "\"station_code\":\"" + deviceConfig.stationCode + "\",";
    json += "\"temperature\":" + String(temperature, 1) + ",";
    json += "\"humidity\":" + String(humidity, 1) + ",";
    json += "\"device_type\":\"ESP32_UNIVERSAL\",";
    json += "\"firmware_version\":\"3.0.0\"";
    json += "}";
    
    Serial.println("Payload: ");
    Serial.println(json);
    
    http.setConnectTimeout(5000);
    http.setTimeout(8000);
    
    if (!http.begin(url)) {
        Serial.println("http.begin failed");
        return;
    }
    
    http.addHeader("Content-Type", "application/json");
    int code = http.POST(json);
    
    Serial.print("HTTP Response: ");
    Serial.println(code);
    
    if (code > 0) {
        String response = http.getString();
        Serial.println("Server response: ");
        Serial.println(response);
        connectionRetries = 0;
    } else {
        Serial.print("HTTP error: ");
        Serial.println(http.errorToString(code));
    }
    
    http.end();
}

// ======================================================
// HEARTBEAT - Universal Station-Agnostic
// ======================================================
void sendHeartbeat() {
    if (!ensureWiFiConnected()) {
        Serial.println("Cannot send heartbeat: WiFi not connected");
        return;
    }
    
    HTTPClient http;
    // Use universal endpoint - doesn't require station ID
    String url = deviceConfig.apiServer + String(UNIVERSAL_HEARTBEAT_ENDPOINT) + String(DEVICE_ID);
    
    Serial.print("Sending heartbeat to: ");
    Serial.println(url);
    
    http.setConnectTimeout(5000);
    http.setTimeout(8000);
    
    if (!http.begin(url)) {
        Serial.println("http.begin failed for heartbeat");
        return;
    }
    
    int code = http.POST("");  // Empty body, just registers presence
    
    Serial.print("Heartbeat response: ");
    Serial.println(code);
    
    if (code > 0) {
        String response = http.getString();
        Serial.println(response);
    } else {
        Serial.print("Heartbeat error: ");
        Serial.println(http.errorToString(code));
    }
    
    http.end();
}
