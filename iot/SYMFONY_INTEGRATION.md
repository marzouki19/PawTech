# IoT Dog Feeder - Symfony Integration Guide

## Overview

This document explains how the ESP32 IoT Dog Feeder integrates with the Symfony dashboard at `http://127.0.0.1:8000/admin/stations/79/dashboard`.

## API Endpoint

The ESP32 sends data to the Symfony application via HTTP POST:

**Endpoint:** `POST /admin/api/iot/data`

**Full URL:** `http://127.0.0.1:8000/admin/api/iot/data`

## JSON Payload Format

The ESP32 sends the following JSON payload:

```json
{
  "station_code": "000079",
  "temperature": 25.5,
  "humidity": 60.0,
  "distance": 45.2,
  "dog_detected": true,
  "food_dispensed": false,
  "device_type": "dog_feeder",
  "device_id": "ESP32-DOG-FEEDER-001",
  "firmware_version": "1.0.0-WiFi",
  "additional_sensors": {
    "cooldownRemaining": 300,
    "servoPosition": 0,
    "feedingCount": 5
  }
}
```

## Field Descriptions

| Field | Type | Description |
|-------|------|-------------|
| `station_code` | string | Station identifier (matches ObservationStation.code) |
| `temperature` | float | Temperature in Celsius from DHT11 |
| `humidity` | float | Humidity percentage from DHT11 |
| `distance` | float | Distance to object in cm (HC-SR04) |
| `dog_detected` | boolean | Whether a dog was detected |
| `food_dispensed` | boolean | Whether food was just dispensed |
| `device_type` | string | Type of device (dog_feeder) |
| `device_id` | string | Unique device identifier |
| `firmware_version` | string | Firmware version |
| `additional_sensors` | object | Additional sensor data |

## Database Changes

New columns added to `iot_data` table:

```sql
ALTER TABLE iot_data 
  ADD distance NUMERIC(6, 2) DEFAULT NULL,
  ADD dog_detected TINYINT DEFAULT NULL, 
  ADD food_dispensed TINYINT DEFAULT NULL;
```

## ESP32 Code

The WiFi-enabled version is in [`dog_feeder_wifi.ino`](dog_feeder_wifi.ino).

### Configuration Steps

1. **Update WiFi Credentials:**
   ```cpp
   const char* WIFI_SSID = "Your_WiFi_Network";
   const char* WIFI_PASSWORD = "Your_WiFi_Password";
   ```

2. **Update Station Code:**
   ```cpp
   const char* STATION_CODE = "000079";  // Match your station's code
   ```

3. **Find Your Station Code:**
   - Go to `http://127.0.0.1:8000/admin/stations`
   - Find station ID 79
   - Note the code field (e.g., "000079")

4. **Upload to ESP32:**
   - Select "ESP32 Dev Module" board
   - Upload the sketch

## Dashboard Integration

The station dashboard at `http://127.0.0.1:8000/admin/stations/79/dashboard` automatically displays:

- Latest IoT data readings
- Temperature and humidity trends
- Distance readings
- Dog detection events
- Feeding history

## Testing the Integration

### 1. Test API Endpoint

```bash
curl -X POST http://127.0.0.1:8000/admin/api/iot/data \
  -H "Content-Type: application/json" \
  -d '{
    "station_code": "000079",
    "temperature": 25.5,
    "humidity": 60.0,
    "distance": 45.2,
    "dog_detected": true,
    "food_dispensed": false,
    "device_type": "dog_feeder",
    "device_id": "ESP32-TEST-001"
  }'
```

### 2. Verify Data in Dashboard

1. Go to `http://127.0.0.1:8000/admin/stations/79/dashboard`
2. Look for the IoT data section
3. Verify new readings appear

## Troubleshooting

### WiFi Connection Issues

- Check that WiFi credentials are correct
- Ensure ESP32 is within WiFi range
- Check Serial Monitor for connection status

### Data Not Appearing in Dashboard

1. Verify station code matches exactly
2. Check API server is running: `php bin/console server:start`
3. Check Symfony logs: `tail -f var/log/dev.log`
4. Verify database has new columns

### Database Schema Issues

If the new columns don't exist, run:

```sql
ALTER TABLE iot_data 
  ADD distance NUMERIC(6, 2) DEFAULT NULL,
  ADD dog_detected TINYINT DEFAULT NULL, 
  ADD food_dispensed TINYINT DEFAULT NULL;
```

## Architecture Summary

```
┌─────────────────┐      WiFi/HTTP       ┌─────────────────────────────┐
│   ESP32        │ ──────────────────►  │   Symfony Application       │
│   Dog Feeder   │   POST /admin/api/   │   http://127.0.0.1:8000   │
│                │        iot/data      │                             │
│ - HC-SR04     │                     │   ┌─────────────────────┐  │
│ - DHT11       │                     │   │ AdminDashboardCtrl │  │
│ - Servo SG90  │                     │   │ receiveIoTData()   │  │
│ - LCD 16x2    │                     │   └─────────┬───────────┘  │
└─────────────────┘                     │             │              │
                                       │             ▼              │
                                       │   ┌─────────────────────┐  │
                                       │   │     IoTData Entity  │  │
                                       │   │ (distance, dog_    │  │
                                       │   │  detected, etc.)   │  │
                                       │   └─────────┬───────────┘  │
                                       │             │              │
                                       │             ▼              │
                                       │   ┌─────────────────────┐  │
                                       │   │   MySQL Database   │  │
                                       │   └─────────────────────┘  │
                                       └─────────────────────────────┘
                                                │
                                                ▼
                                       ┌─────────────────────────────┐
                                       │  Station Dashboard          │
                                       │  /admin/stations/79/       │
                                       │  dashboard                 │
                                       └─────────────────────────────┘
```

## Additional Features

### Real-time Updates

The dashboard can be enhanced with WebSocket for real-time updates:

```javascript
// Example: Real-time update via Mercure
const hub = new URL('http://127.0.0.1:8000/hub');
const subscription = hub.subscribe('iot-data');
```

### Mobile Notifications

When food is dispensed, send notifications:

```php
// In controller after receiving IoT data
if ($data['food_dispensed'] === true) {
    // Send notification to mobile app
}
```

## Security Considerations

1. **API Authentication:** Consider adding API key authentication
2. **SSL/TLS:** Use HTTPS in production
3. **Rate Limiting:** Limit requests to prevent abuse
4. **Input Validation:** Validate all incoming data
