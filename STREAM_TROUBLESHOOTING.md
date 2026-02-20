# Stream Instability Troubleshooting Guide

## Overview
This document provides comprehensive solutions for fixing stream disconnection and instability issues in your Symfony/PHP video streaming application.

---

## Root Causes Identified

### 1. **Aggressive Client-Side Polling** (Critical)
- **Problem**: 50ms polling interval creates excessive HTTP requests
- **Impact**: Server overload, connection drops, network congestion
- **Location**: [`templates/admin/camera_view.html.twig:471`](templates/admin/camera_view.html.twig#L471)

### 2. **No Automatic Reconnection**
- **Problem**: Manual reconnection required after stream failure
- **Impact**: Users must constantly refresh the page

### 3. **No Stream Health Monitoring**
- **Problem**: Frontend doesn't detect stale frames automatically
- **Impact**: Stream appears connected but shows frozen/black frames

### 4. **FFmpeg Missing Auto-Reconnect**
- **Problem**: FFmpeg doesn't reconnect when camera stream drops
- **Impact**: FFmpeg process dies, stream stops permanently

### 5. **Limited Buffer Configuration**
- **Problem**: Small buffer sizes can cause packet loss
- **Impact**: Buffering, frame drops, connection instability

---

## Solutions Implemented

### 1. Enhanced FFmpeg Commands ([`DirectRtspService.php`](src/Service/DirectRtspService.php))

Updated with auto-reconnect and stability options:
- `-reconnect 1` - Enable auto-reconnect
- `-reconnect_streamed 1` - Reconnect on stream errors  
- `-reconnect_delay_max 5` - Max 5s between reconnection attempts
- `-timeout 10000000` - 10s connection timeout
- `-overrun_nonfatal 1` - Don't fail on buffer overrun
- Reduced delay (50ms vs 100ms)

### 2. Stream Stability Controller ([`stream_stability_controller.js`](assets/controllers/stream_stability_controller.js))

New JavaScript with:
- **Adaptive polling** (100-500ms based on performance)
- **Exponential backoff** for reconnection attempts
- **Automatic stream health detection**
- **Backend auto-heal integration**
- **Frame freshness monitoring**

### 3. Enhanced Error Popup ([`error_popup.html.twig`](templates/components/error_popup.html.twig))

Modern, user-friendly error display with:
- Clear error messaging
- Retry functionality
- Technical details expansion

---

## Manual Troubleshooting Steps

### Step 1: Verify FFmpeg is Running
```bash
# Check for running FFmpeg processes
ps aux | grep ffmpeg

# Check specific camera stream
ls -la /tmp/rtsp_stream_*.mjpg
ls -la /tmp/rtsp_frame_*.jpg
```

### Step 2: Test Camera Connectivity
```bash
# Test RTSP connection
ffmpeg -rtsp_transport tcp -i "rtsp://camera_ip:554/stream" -t 5 -f null -

# Check network latency
ping camera_ip
```

### 3: Check Port Availability
```bash
# Check if ports are in use
sudo lsof -i :8888
sudo lsof -i :8889

# Kill process on port
sudo fuser -k 8888/tcp
```

### 4: Monitor Stream Health
```bash
# Watch FFmpeg output in real-time
tail -f /tmp/rtsp_stream_1.mjpg 2>&1 | head

# Check process logs
tail -f /var/log/syslog | grep ffmpeg
```

### 5: Verify File Permissions
```bash
# Check temp directory permissions
ls -la /tmp/rtsp_*

# Ensure PHP can write to temp
touch /tmp/test_write && rm /tmp/test_write
```

---

## Configuration Recommendations

### Optimal FFmpeg Settings

| Parameter | Value | Purpose |
|-----------|-------|---------|
| `-rtsp_transport` | tcp | More reliable than UDP |
| `-timeout` | 10000000 (10s) | Connection timeout |
| `-reconnect` | 1 | Auto-reconnect enabled |
| `-max_delay` | 50000 (50ms) | Low latency |
| `-q:v` | 3 | Good quality/size balance |
| `-r` | 25 | Consistent frame rate |

### Server Resource Requirements

- **CPU**: 1+ cores per camera stream
- **RAM**: 512MB minimum for FFmpeg
- **Network**: Stable bandwidth (2Mbps+ per stream)
- **Disk**: Fast SSD for temp files recommended

---

## Integration Guide

### 1. Add Stream Stability Controller

In your `camera_view.html.twig`, add before closing `</body>`:

```javascript
<script src="{{ asset('build/stream_stability_controller.js') }}"></script>
```

### 2. Enable Auto-Heal on Backend

Ensure the health check cron job is running:

```bash
# Add to crontab
*/5 * * * * cd /path/to/project && php bin/console app:stream:health-check
```

### 3. Monitor with Diagnostics

Open browser console and run:
```javascript
window.getStreamDiagnostics();
// Or
window.logStreamDiagnostics();
```

---

## Common Error Messages & Solutions

| Error | Cause | Solution |
|-------|-------|----------|
| `Failed to fetch` | Network/camera unreachable | Check camera IP, firewall rules |
| `Connection timeout` | Camera slow to respond | Increase `-timeout` in FFmpeg |
| `No frame available` | FFmpeg not running | Restart stream via admin panel |
| `Port in use` | Previous process not killed | Run `fuser -k <port>/tcp` |
| `Permission denied` | Temp directory access | Check `/tmp` permissions |

---

## Performance Tuning

### For Low-Latency (Surveillance)
- Poll interval: 100ms
- FFmpeg max_delay: 50000
- Enable hardware acceleration if available

### For Limited Bandwidth
- Reduce frame rate: `-r 15`
- Increase quality: `-q:v 5`
- Use H.264 instead of MJPEG

### For High Stability
- Poll interval: 200ms
- Enable reconnect options
- Add health check cron job

---

## Testing Checklist

- [ ] FFmpeg process stays running
- [ ] Stream reconnects after camera disconnect
- [ ] No "Failed to fetch" errors
- [ ] Frames update smoothly
- [ ] Memory usage stays stable
- [ ] CPU usage is reasonable (<50% per stream)
- [ ] Network connection stable
