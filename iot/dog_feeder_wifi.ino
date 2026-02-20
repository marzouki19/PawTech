// ======================================================
// ESP32 DHT11 -> Symfony API Test (DHT11-only mode ready)
// FIXED: Added heartbeat/keepalive for long-running connections
// ======================================================

#include <WiFi.h>
#include <HTTPClient.h>
#include <DHT.h>

// ---------------- WIFI ----------------
const char* WIFI_SSID = "Airbox-10B3";
const char* WIFI_PASSWORD = "6D4iNNyYy6NZ";

// IMPORTANT: this must be your laptop LAN IP (never 127.0.0.1)
const char* API_SERVER = "http://192.168.1.117:8000";
const char* PRIMARY_API_ENDPOINT = "/admin/api/iot/data";
const char* SECONDARY_API_ENDPOINT = "/admin/stations/api/iot/data";

// DHT11 test mode sends only temperature + humidity + device metadata
const bool DHT11_ONLY_TEST_MODE = true;

const char* STATION_CODE = "123456";  // Station ID 79 has code 123456
const char* DEVICE_ID = "ESP32-DHT-TEST";
const char* FIRMWARE_VERSION = "1.1.2";  // Updated version with heartbeat

// ---------------- DHT ----------------
// DHT11 Data pin connected to GPIO4
// IMPORTANT: Add 4.7kΩ pull-up resistor between GPIO4 and 3.3V
#define DHTPIN 4
#define DHTTYPE DHT11

DHT dht(DHTPIN, DHTTYPE);

// ---------------- STATE ----------------
bool wifiConnected = false;
bool hasValidReading = false;

unsigned long lastSend = 0;
unsigned long lastHeartbeat = 0;
const unsigned long SEND_INTERVAL_MS = 10000;      // Send sensor data every 10 seconds
const unsigned long HEARTBEAT_INTERVAL_MS = 30000; // Send heartbeat every 30 seconds
const unsigned long RECONNECT_DELAY_MS = 5000;     // Wait 5 seconds before reconnecting

float temperature = 0.0f;
float humidity = 0.0f;

// Connection retry counter
int connectionRetries = 0;
const int MAX_RETRIES = 3;

// ======================================================

void setup()
{
    Serial.begin(115200);
    delay(1000);

    Serial.println();
    Serial.println("======================================");
    Serial.println("ESP32 DHT11 API TEST v1.1.1");
    Serial.println("======================================");
    Serial.print("DHT Pin: GPIO");
    Serial.println(DHTPIN);
    Serial.print("Sensor Type: ");
    Serial.println(DHTTYPE == DHT11 ? "DHT11" : "DHT22/AM2302");
    Serial.print("API server: ");
    Serial.println(API_SERVER);
    Serial.print("Primary endpoint: ");
    Serial.println(PRIMARY_API_ENDPOINT);
    Serial.print("Secondary endpoint: ");
    Serial.println(SECONDARY_API_ENDPOINT);
    Serial.print("DHT11-only mode: ");
    Serial.println(DHT11_ONLY_TEST_MODE ? "ON" : "OFF");

    if (String(API_SERVER).indexOf("127.0.0.1") >= 0 || String(API_SERVER).indexOf("localhost") >= 0) {
        Serial.println("WARNING: API_SERVER cannot use localhost for ESP32. Use your computer LAN IP.");
    }

    // Initialize DHT sensor with increased timeout for stability
    dht.begin();
    delay(500);  // Give sensor time to initialize
    
    // Test sensor immediately
    Serial.println("Testing DHT11 sensor...");
    float testH = dht.readHumidity();
    float testT = dht.readTemperature();
    if (isnan(testH) || isnan(testT)) {
        Serial.println("WARNING: Initial DHT11 read failed!");
        Serial.println("Check wiring and pull-up resistor.");
    } else {
        Serial.println("DHT11 sensor initialized successfully!");
    }
    
    setupWiFi();
    connectWiFi();
}

// ======================================================

void loop()
{
    readDHT();

    // Send sensor data every 10 seconds
    if (millis() - lastSend > SEND_INTERVAL_MS)
    {
        lastSend = millis();
        sendToServer();
    }

    // Send heartbeat every 30 seconds to keep connection alive
    if (millis() - lastHeartbeat > HEARTBEAT_INTERVAL_MS)
    {
        lastHeartbeat = millis();
        sendHeartbeat();
    }

    // Periodic WiFi health check
    ensureWiFiConnected();

    delay(100);
}

// ======================================================
// WIFI
// ======================================================

void setupWiFi()
{
    WiFi.mode(WIFI_STA);
    WiFi.setAutoReconnect(true);
    WiFi.setSleep(false); // improves stream/reporting stability on ESP32
}

void connectWiFi()
{
    if (WiFi.status() == WL_CONNECTED) {
        wifiConnected = true;
        return;
    }

    Serial.print("Connecting to WiFi ");
    Serial.print(WIFI_SSID);
    Serial.print(" ");

    WiFi.begin(WIFI_SSID, WIFI_PASSWORD);

    int attempts = 0;
    while (WiFi.status() != WL_CONNECTED && attempts < 30)
    {
        delay(500);
        Serial.print(".");
        attempts++;
    }

    if (WiFi.status() == WL_CONNECTED)
    {
        wifiConnected = true;
        Serial.println();
        Serial.println("WiFi connected.");
        Serial.print("ESP32 IP: ");
        Serial.println(WiFi.localIP());
        Serial.print("RSSI: ");
        Serial.println(WiFi.RSSI());
    }
    else
    {
        wifiConnected = false;
        Serial.println();
        Serial.println("WiFi connection failed.");
    }
}

bool ensureWiFiConnected()
{
    if (WiFi.status() == WL_CONNECTED) {
        wifiConnected = true;
        return true;
    }

    wifiConnected = false;
    connectWiFi();
    return wifiConnected;
}

// ======================================================
// READ SENSOR
// ======================================================

void readDHT()
{
    static unsigned long lastRead = 0;

    if (millis() - lastRead < 2500)  // Increased to 2.5s for DHT11 stability
        return;

    lastRead = millis();

    // First read attempt - sometimes first read fails
    float h = dht.readHumidity(false);  // forceRead = false
    float t = dht.readTemperature(false);
    
    // If first read fails, try once more after a short delay
    if (isnan(h) || isnan(t)) {
        delay(200);
        h = dht.readHumidity();
        t = dht.readTemperature();
    }

    if (isnan(h) || isnan(t))
    {
        Serial.println("DHT11 ERROR: Failed to read sensor");
        Serial.println("Possible causes:");
        Serial.println("  1. Check wiring: DHT11 DATA -> GPIO4");
        Serial.println("  2. Add 4.7kΩ pull-up resistor between GPIO4 and 3.3V");
        Serial.println("  3. Verify DHT11 VCC -> 3.3V or 5V");
        Serial.println("  4. Verify DHT11 GND -> GND");
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
// API SEND
// ======================================================

String buildPayload()
{
    String json = "{";
    json += "\"station_code\":\"" + String(STATION_CODE) + "\",";
    json += "\"temperature\":" + String(temperature, 1) + ",";
    json += "\"humidity\":" + String(humidity, 1) + ",";
    json += "\"device_type\":\"" + String(DHT11_ONLY_TEST_MODE ? "dht11_test" : "dog_feeder") + "\",";
    json += "\"device_id\":\"" + String(DEVICE_ID) + "\",";
    json += "\"firmware_version\":\"" + String(FIRMWARE_VERSION) + "\"";

    if (!DHT11_ONLY_TEST_MODE) {
        json += ",\"distance\":0";
        json += ",\"dog_detected\":false";
        json += ",\"food_dispensed\":false";
    }

    json += "}";
    return json;
}

int postJsonToEndpoint(const char* endpoint, const String& json, String& responseBody)
{
    HTTPClient http;
    String url = String(API_SERVER) + String(endpoint);

    Serial.print("POST ");
    Serial.println(url);

    http.setConnectTimeout(5000);
    http.setTimeout(8000);

    if (!http.begin(url)) {
        Serial.println("http.begin failed");
        return HTTPC_ERROR_CONNECTION_REFUSED;
    }

    http.addHeader("Content-Type", "application/json");
    int code = http.POST(json);

    Serial.print("HTTP Response code: ");
    Serial.println(code);

    if (code > 0) {
        responseBody = http.getString();
    } else {
        Serial.print("HTTP error detail: ");
        Serial.println(http.errorToString(code));
    }

    http.end();
    return code;
}

void printNetworkHintForError(int httpResponseCode)
{
    if (httpResponseCode == HTTPC_ERROR_CONNECTION_REFUSED || httpResponseCode == HTTPC_ERROR_CONNECTION_LOST || httpResponseCode == HTTPC_ERROR_READ_TIMEOUT) {
        Serial.println("Hint: server unreachable.");
        Serial.println("1) Run Symfony on LAN: symfony server:start --listen-ip=0.0.0.0 --port=8000");
        Serial.println("2) Keep API_SERVER as your laptop LAN IP, not localhost.");
        Serial.println("3) Confirm ESP32 and laptop are on same WiFi.");
    }
}

void sendToServer()
{
    if (!ensureWiFiConnected())
    {
        Serial.println("WiFi is not connected.");
        return;
    }

    if (!hasValidReading)
    {
        Serial.println("No valid DHT11 reading yet, skipping send.");
        return;
    }

    String json = buildPayload();
    Serial.println("Sending JSON:");
    Serial.println(json);

    String response;
    int code = postJsonToEndpoint(PRIMARY_API_ENDPOINT, json, response);

    // fallback for projects wired to the station-scoped IoT route
    if (code == 404 || code == 405)
    {
        Serial.println("Primary endpoint unavailable, trying secondary endpoint...");
        code = postJsonToEndpoint(SECONDARY_API_ENDPOINT, json, response);
    }

    if (code > 0)
    {
        Serial.println("Server response:");
        Serial.println(response);
    }
    else
    {
        Serial.println("Error sending request");
        printNetworkHintForError(code);
    }
}
