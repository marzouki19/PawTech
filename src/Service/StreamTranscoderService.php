<?php

namespace App\Service;

use App\Entity\IpCamera;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\Process\Process;

class StreamTranscoderService
{
    private string $streamDirectory;
    private string $projectDir;
    private LoggerInterface $logger;
    private EntityManagerInterface $entityManager;
    /** @var array<int, array{pid:?string, camera:IpCamera, outputDir:string, startedAt:\DateTime}> */
    private array $activeProcesses = [];
    /** @var array<int, array{pid:?string, camera:IpCamera, port:int, outputDir:string, startedAt:\DateTime}> */
    private array $vlcProcesses = [];  // Track VLC processes separately

    public function __construct(
        LoggerInterface $logger,
        EntityManagerInterface $entityManager,
        string $streamsDirectory
    ) {
        $this->logger = $logger;
        $this->entityManager = $entityManager;
        $this->streamDirectory = $streamsDirectory;
        $this->projectDir = dirname($streamsDirectory, 2);
        
        // Create streams directory if it doesn't exist
        if (!is_dir($this->streamDirectory)) {
            mkdir($this->streamDirectory, 0755, true);
        }
    }

    /**
     * Start FFmpeg transcoding process for a camera
     * Optimized for minimum latency RTSP to HLS streaming
     */
    public function startTranscoding(IpCamera $camera): bool
    {
        $cameraId = $camera->getId();
        if ($cameraId === null) {
            return false;
        }

        $frameFile = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
        
        // Kill any existing FFmpeg processes for this camera to get fresh frames
        // This prevents the "stale frames" issue where old processes show outdated video
        $this->stopTranscoding($cameraId);
        @unlink($frameFile);
        
        // Also clean up old files
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        if (is_dir($outputDir)) {
            $files = glob($outputDir . '/*') ?: [];
            foreach ($files as $file) {
                if (is_file($file) && $file !== $outputDir . '/ffmpeg.log') {
                    @unlink($file);
                }
            }
        }
        
        // Check if already transcoding (after cleanup)
        if (isset($this->activeProcesses[$cameraId])) {
            unset($this->activeProcesses[$cameraId]);
        }

        $inputUrl = $this->buildCameraInputUrl($camera);
        if ($inputUrl === null) {
            $this->logger->error("No stream URL found for camera {$cameraId}");
            return false;
        }

        $inputScheme = strtolower((string) parse_url($inputUrl, PHP_URL_SCHEME));
        $inputTransportOptions = in_array($inputScheme, ['rtsp', 'rtsps'], true)
            ? '-rtsp_transport tcp '
            : '';

        // Output directory - use absolute path
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }

        // Stable low-latency profile:
        // - prioritize low-buffer frame updates for /frame.jpg polling
        // - keep a very low-FPS MJPEG side output only for legacy compatibility
        $quotedInputUrl = escapeshellarg($inputUrl);
        $quotedStreamOutput = escapeshellarg($outputDir . '/stream.mjpg');
        $quotedFrameOutput = escapeshellarg($frameFile);
        $quotedLogOutput = escapeshellarg($outputDir . '/ffmpeg.log');
        $quotedPidOutput = escapeshellarg($outputDir . '/ffmpeg.pid');
        $ffmpegCommand = sprintf(
            'nohup ffmpeg -hide_banner -loglevel warning -nostdin ' .
            '%s' .
            '-fflags +nobuffer+discardcorrupt -flags low_delay -avioflags direct ' .
            '-reorder_queue_size 0 -max_delay 100000 -analyzeduration 200000 -probesize 16384 ' .
            '-i %s ' .
            '-an -sn ' .
            '-map 0:v:0 -vf fps=1 -c:v mjpeg -q:v 10 -f mjpeg %s ' .
            '-map 0:v:0 -vf fps=18 -vsync 0 -c:v mjpeg -q:v 5 -f image2 -update 1 %s ' .
            '> %s 2>&1 & echo $! > %s',
            $inputTransportOptions,
            $quotedInputUrl,
            $quotedStreamOutput,
            $quotedFrameOutput,
            $quotedLogOutput,
            $quotedPidOutput
        );

        $this->logger->info("Starting FFmpeg transcoding for camera {$cameraId} (low-latency mode)");
        $this->logger->info("Command: " . str_replace($camera->getPassword() ?? '', '***', $ffmpegCommand));

        try {
            // Run FFmpeg in background using shell exec
            exec($ffmpegCommand, $output, $returnCode);

            $pidFile = $outputDir . '/ffmpeg.pid';
            if (!file_exists($pidFile)) {
                $this->logger->error("FFmpeg PID file was not created for camera {$cameraId}");
                return false;
            }

            $pid = trim((string) file_get_contents($pidFile));
            if ($pid === '' || !ctype_digit($pid)) {
                $this->logger->error("Invalid FFmpeg PID for camera {$cameraId}: " . $pid);
                return false;
            }

            $this->logger->info("FFmpeg started with PID: {$pid}");

            $mjpegFile = $outputDir . '/stream.mjpg';
            $frameReady = false;
            $mjpegReady = false;
            $processRunning = true;

            // Wait up to ~4 seconds for first output frame/chunks.
            for ($attempt = 0; $attempt < 10; $attempt++) {
                clearstatcache(true, $frameFile);
                clearstatcache(true, $mjpegFile);

                $frameReady = file_exists($frameFile) && filesize($frameFile) > 0;
                $mjpegReady = file_exists($mjpegFile) && filesize($mjpegFile) > 0;
                if ($frameReady || $mjpegReady) {
                    break;
                }

                if (!$this->isProcessRunning($pid)) {
                    $processRunning = false;
                    break;
                }

                usleep(400000);
            }

            if (!$frameReady && !$mjpegReady && !$processRunning) {
                $logFile = $outputDir . '/ffmpeg.log';
                if (file_exists($logFile)) {
                    $logContent = file_get_contents($logFile);
                    if (is_string($logContent) && $logContent !== '') {
                        $this->logger->error("FFmpeg failed for camera {$cameraId}: " . substr($logContent, -800));
                    }
                }
                return false;
            }

            if (!$frameReady && !$mjpegReady) {
                $this->logger->warning("FFmpeg is running for camera {$cameraId} but no output file is ready yet.");
            }

            $this->activeProcesses[$cameraId] = [
                'pid' => $pid,
                'camera' => $camera,
                'outputDir' => $outputDir,
                'startedAt' => new \DateTime()
            ];
            
            $camera->setStatus('active');
            $this->entityManager->flush();

            $this->startDogDetector($camera);
            $this->logger->info("FFmpeg transcoding started successfully for camera {$cameraId}");
            return true;

        } catch (\Exception $e) {
            $this->logger->error("Failed to start transcoding for camera {$cameraId}: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Stop transcoding for a camera
     */
    public function stopTranscoding(?int $cameraId): bool
    {
        if ($cameraId === null) {
            return false;
        }

        $this->stopDogDetector($cameraId);

        // Kill all FFmpeg processes for this camera (not just tracked ones)
        // This ensures we get fresh frames on restart
        exec("pkill -9 -f 'ffmpeg.*camera_{$cameraId}' 2>/dev/null");
        exec("pkill -9 -f 'ffmpeg.*streams/camera_{$cameraId}' 2>/dev/null");
        exec("pkill -9 -f 'ffmpeg.*rtsp_frame_{$cameraId}' 2>/dev/null");
        @unlink('/tmp/rtsp_frame_' . $cameraId . '.jpg');
        
        if (isset($this->activeProcesses[$cameraId])) {
            try {
                $processInfo = $this->activeProcesses[$cameraId];
                $outputDir = $processInfo['outputDir'];
                
                // Try to kill using PID file
                $pidFile = $outputDir . '/ffmpeg.pid';
                if (file_exists($pidFile)) {
                    $pid = trim((string) file_get_contents($pidFile));
                    exec("kill -9 $pid 2>/dev/null");
                    @unlink($pidFile);
                }
                
                unset($this->activeProcesses[$cameraId]);
                
                $this->logger->info("Stopped transcoding for camera {$cameraId}");
                return true;

            } catch (\Exception $e) {
                $this->logger->error("Failed to stop transcoding for camera {$cameraId}: " . $e->getMessage());
                return false;
            }
        }
        
        $this->logger->info("Stopped all FFmpeg processes for camera {$cameraId}");
        return true;
    }

    /**
     * Ensure detector loop is running while stream is active.
     */
    public function ensureDogDetectorRunning(IpCamera $camera): void
    {
        $cameraId = (int) $camera->getId();
        if ($cameraId <= 0) {
            return;
        }
        if (!$this->isTranscoding($cameraId)) {
            return;
        }
        if ($this->isDogDetectorRunning($cameraId)) {
            return;
        }
        $this->startDogDetector($camera);
    }

    private function startDogDetector(IpCamera $camera): void
    {
        $cameraId = (int) $camera->getId();
        if ($cameraId <= 0) {
            return;
        }

        $scriptPath = $this->resolveDogDetectorScriptPath();
        if ($scriptPath === null) {
            $this->logger->warning('Dog detector script missing: expected python/dog_detector_loop.py or python/ip_camera_dog_detector.py');
            return;
        }

        $pythonBin = $this->resolvePythonBinary();
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        if (!is_dir($outputDir)) {
            @mkdir($outputDir, 0755, true);
        }

        $pidFile = $outputDir . '/dog_detector.pid';
        $logFile = $outputDir . '/dog_detector.log';
        $jsonPath = '/tmp/pawtech_live_detections_camera_' . $cameraId . '.json';
        $modelPath = $this->resolveDogModelPath();
        $healthModelPath = $this->resolveDogHealthModelPath();
        $reportUrl = $this->resolveDetectionApiUrl();
        $sourceUrl = $this->buildCameraInputUrl($camera);

        if ($sourceUrl === null || $sourceUrl === '') {
            $this->logger->warning("Dog detector source URL missing for camera {$cameraId}");
            return;
        }

        // Clean stale process first.
        $this->stopDogDetector($cameraId);

        $scriptName = basename($scriptPath);
        if ($scriptName === 'ip_camera_dog_detector.py') {
            $commandParts = [
                escapeshellarg($pythonBin),
                escapeshellarg($scriptPath),
                '--source',
                escapeshellarg($sourceUrl),
                '--camera-id',
                (string) $cameraId,
                '--model',
                escapeshellarg($modelPath),
                '--conf',
                '0.25',
                '--imgsz',
                '640',
                '--no-display',
                '--no-save',
                '--live-json-path',
                escapeshellarg($jsonPath),
                '--live-json-interval',
                '0.10',
            ];

            if ($healthModelPath !== '') {
                $commandParts[] = '--health-knn-model';
                $commandParts[] = escapeshellarg($healthModelPath);
            }
        } else {
            // Backward-compatible command for legacy local detector loop script.
            $framePath = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
            $commandParts = [
                escapeshellarg($pythonBin),
                escapeshellarg($scriptPath),
                '--camera-id',
                (string) $cameraId,
                '--frame-path',
                escapeshellarg($framePath),
                '--output-json',
                escapeshellarg($jsonPath),
                '--model',
                escapeshellarg($modelPath),
                '--conf',
                '0.25',
                '--imgsz',
                '640',
                '--interval',
                '0.10',
                '--report-cooldown-seconds',
                '8',
                '--report-duplicate-cooldown-seconds',
                '20',
                '--report-alert-cooldown-seconds',
                '8',
                '--report-min-ill-confidence',
                '0.40',
            ];

            if ($healthModelPath !== '') {
                $commandParts[] = '--health-model';
                $commandParts[] = escapeshellarg($healthModelPath);
            }

            if ($reportUrl !== '') {
                $commandParts[] = '--report-url';
                $commandParts[] = escapeshellarg($reportUrl);
            }
        }

        $command = sprintf(
            'nohup %s > %s 2>&1 & echo $! > %s',
            implode(' ', $commandParts),
            escapeshellarg($logFile),
            escapeshellarg($pidFile)
        );

        exec($command);
        usleep(250000);
        if (is_file($pidFile)) {
            $pid = trim((string) @file_get_contents($pidFile));
            $this->logger->info("Dog detector started for camera {$cameraId} with PID {$pid}");
            if ($healthModelPath === '') {
                $this->logger->warning("Dog health KNN model missing for camera {$cameraId}; detector will use symptom heuristics.");
            }
        } else {
            $this->logger->warning("Dog detector did not create PID file for camera {$cameraId}");
        }
    }

    private function stopDogDetector(int $cameraId): void
    {
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/dog_detector.pid';
        $jsonPath = '/tmp/pawtech_live_detections_camera_' . $cameraId . '.json';

        if (is_file($pidFile)) {
            $pid = trim((string) @file_get_contents($pidFile));
            if ($pid !== '') {
                exec("kill -9 {$pid} 2>/dev/null");
            }
            @unlink($pidFile);
        }

        // Kill any detector process matching this camera id.
        exec("pkill -9 -f 'dog_detector_loop.py.*--camera-id {$cameraId}' 2>/dev/null");
        exec("pkill -9 -f 'ip_camera_dog_detector.py.*--camera-id {$cameraId}' 2>/dev/null");

        $stoppedPayload = [
            'camera_id' => $cameraId,
            'timestamp' => (new \DateTimeImmutable())->format(DATE_ATOM),
            'status' => 'stopped',
            'dog_count' => 0,
            'frame_width' => null,
            'frame_height' => null,
            'ptz_action' => null,
            'follow_dx' => 0.0,
            'follow_dy' => 0.0,
            'follow_pred_dx' => 0.0,
            'follow_pred_dy' => 0.0,
            'follow_error' => 0.0,
            'ptz_pulse' => 0.0,
            'ill_count' => 0,
            'healthy_count' => 0,
            'unknown_health_count' => 0,
            'health_status' => 'unknown',
            'ill_report_sent' => false,
            'detections' => [],
        ];
        @file_put_contents($jsonPath, json_encode($stoppedPayload));
    }

    private function isDogDetectorRunning(int $cameraId): bool
    {
        $pidFile = $this->streamDirectory . '/camera_' . $cameraId . '/dog_detector.pid';
        if (!is_file($pidFile)) {
            return false;
        }

        $pid = trim((string) @file_get_contents($pidFile));
        if ($pid === '') {
            return false;
        }

        return $this->isProcessRunning($pid);
    }

    private function resolvePythonBinary(): string
    {
        $candidates = [
            $this->projectDir . '/.venv/bin/python',
            $this->projectDir . '/.venv-dog/bin/python',
            $this->projectDir . '/venv/bin/python',
        ];

        foreach ($candidates as $candidate) {
            if (is_file($candidate) && is_executable($candidate)) {
                return $candidate;
            }
        }

        return 'python3';
    }

    private function resolveDogModelPath(): string
    {
        $candidates = [
            $this->projectDir . '/yolov8n.pt',
            $this->projectDir . '/python/yolov8n.pt',
        ];

        foreach ($candidates as $candidate) {
            if (is_file($candidate)) {
                return $candidate;
            }
        }

        return 'yolov8n.pt';
    }

    private function resolveDogHealthModelPath(): string
    {
        $candidates = [
            $this->projectDir . '/python/models/dog_health_knn.joblib',
            $this->projectDir . '/var/ml/dog_health_knn.joblib',
            $this->projectDir . '/python/models/knn_dog_health.npz',
            $this->projectDir . '/var/ml/knn_dog_health.npz',
        ];

        foreach ($candidates as $candidate) {
            if (is_file($candidate)) {
                return $candidate;
            }
        }

        return '';
    }

    private function resolveDogDetectorScriptPath(): ?string
    {
        $candidates = [
            $this->projectDir . '/python/dog_detector_loop.py',
            $this->projectDir . '/python/ip_camera_dog_detector.py',
        ];

        foreach ($candidates as $candidate) {
            if (is_file($candidate)) {
                return $candidate;
            }
        }

        return null;
    }

    private function resolveDetectionApiUrl(): string
    {
        $base = null;
        $envCandidates = [
            $_ENV['DOG_DETECTION_API_BASE_URL'] ?? null,
            $_SERVER['DOG_DETECTION_API_BASE_URL'] ?? null,
            $_ENV['APP_URL'] ?? null,
            $_SERVER['APP_URL'] ?? null,
        ];

        foreach ($envCandidates as $candidate) {
            if (!is_string($candidate)) {
                continue;
            }
            $candidate = trim($candidate);
            if ($candidate !== '') {
                $base = $candidate;
                break;
            }
        }

        if ($base === null) {
            $base = 'http://127.0.0.1:8000';
        }

        if (!preg_match('/^https?:\/\//i', $base)) {
            $base = 'http://' . $base;
        }

        return rtrim($base, '/') . '/admin/stations/api/detection';
    }

    /**
     * Get the HLS playlist URL for a camera
     */
    public function getStreamUrl(int $cameraId): ?string
    {
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $frameFile = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
        $mjpegFile = $outputDir . '/stream.mjpg';
        $playlistFile = $outputDir . '/playlist.m3u8';

        if (file_exists($frameFile)) {
            return '/admin/cameras/' . $cameraId . '/frame.jpg';
        }

        if (file_exists($mjpegFile)) {
            return '/streams/camera_' . $cameraId . '/stream.mjpg';
        }

        if (file_exists($playlistFile)) {
            return '/streams/camera_' . $cameraId . '/playlist.m3u8';
        }

        return null;
    }

    /**
     * Get stream status for a specific camera
     *
     * @return array<string, mixed>
     */
    public function getStreamStatus(int $cameraId): array
    {
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $frameFile = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
        $streamFile = $outputDir . '/stream.mjpg';
        $playlistFile = $outputDir . '/playlist.m3u8';
        $pidFile = $outputDir . '/ffmpeg.pid';
        $logFile = $outputDir . '/ffmpeg.log';
        
        $status = [
            'running' => false,
            'pid' => null,
            'hasFrame' => false,
            'frameAge' => null,
            'hasStream' => false,
            'streamSize' => null,
            'hasPlaylist' => false,
            'lastSegment' => null,
            'lastUpdate' => null,
            'error' => null
        ];
        
        // Check if process is running
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            exec("ps -p $pid -o pid=", $output);
            if (!empty($output[0])) {
                $status['running'] = true;
                $status['pid'] = $pid;
            }
        }
        
        if (file_exists($frameFile)) {
            $status['hasFrame'] = true;
            $frameMtime = filemtime($frameFile);
            if ($frameMtime !== false) {
                $status['frameAge'] = max(0, time() - $frameMtime);
                $status['lastUpdate'] = $frameMtime;
            }
        }

        // Check MJPEG output first
        if (file_exists($streamFile)) {
            $status['hasStream'] = true;
            $status['streamSize'] = filesize($streamFile);
            if ($status['lastUpdate'] === null) {
                $status['lastUpdate'] = filemtime($streamFile);
            }
        }

        // Keep playlist compatibility for older mode
        if (file_exists($playlistFile)) {
            $status['hasPlaylist'] = true;
            if ($status['lastUpdate'] === null) {
                $status['lastUpdate'] = filemtime($playlistFile);
            }
            
            // Get latest segment
            $segments = glob($outputDir . '/segment_*.ts') ?: [];
            if (!empty($segments)) {
                usort($segments, function($a, $b) {
                    return filemtime($b) - filemtime($a);
                });
                $status['lastSegment'] = basename($segments[0]);
            }
        }
        
        // Check for errors in log
        if (file_exists($logFile)) {
            $logContent = file_get_contents($logFile);
            if (is_string($logContent) && preg_match('/(error|failed|invalid)/i', $logContent)) {
                $status['error'] = 'Check log for errors';
            }
        }
        
        return $status;
    }

    /**
     * Restart stream - stop and start fresh
     */
    public function restartStream(IpCamera $camera): bool
    {
        $cameraId = $camera->getId();
        if ($cameraId === null) {
            return false;
        }
        $this->logger->info("Restarting stream for camera {$cameraId}");
        
        // Stop
        $this->stopTranscoding($cameraId);
        
        // Clean up old segments
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        if (is_dir($outputDir)) {
            $files = glob($outputDir . '/*') ?: [];
            foreach ($files as $file) {
                if (is_file($file) && $file !== $outputDir . '/ffmpeg.log') {
                    @unlink($file);
                }
            }
        }
        
        // Start fresh
        sleep(1);
        return $this->startTranscoding($camera);
    }

    /**
     * Refresh stream - clear segments without stopping FFmpeg
     * This allows the stream to continue while getting fresh segments
     */
    public function refreshStream(int $cameraId): bool
    {
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        
        // Only clear old segments, keep log and pid
        if (is_dir($outputDir)) {
            $files = glob($outputDir . '/segment_*.ts') ?: [];
            foreach ($files as $file) {
                @unlink($file);
            }
            
            // Also clear playlist if exists
            $playlistFile = $outputDir . '/playlist.m3u8';
            if (file_exists($playlistFile)) {
                @unlink($playlistFile);
            }
        }
        
        $this->logger->info("Refreshed stream segments for camera {$cameraId}");
        return true;
    }

    /**
     * Check if transcoding is active for a camera
     * Checks both in-memory process tracking and actual PID file
     */
    public function isTranscoding(?int $cameraId): bool
    {
        if ($cameraId === null || $cameraId <= 0) {
            return false;
        }

        // First check in-memory tracking
        if (isset($this->activeProcesses[$cameraId])) {
            $processInfo = $this->activeProcesses[$cameraId];
            $outputDir = $processInfo['outputDir'];
            
            // Check if PID file exists and process is running
            $pidFile = $outputDir . '/ffmpeg.pid';
            if (file_exists($pidFile)) {
                $pid = trim((string) file_get_contents($pidFile));
                if ($pid && $this->isProcessRunning($pid)) {
                    return true;
                }
            }
            
            // Process no longer running, remove from active list
            unset($this->activeProcesses[$cameraId]);
        }
        
        // Also check if HLS files exist and are being updated (fallback check)
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $frameFile = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
        $streamFile = $outputDir . '/stream.mjpg';
        $playlistFile = $outputDir . '/playlist.m3u8';
        $pidFile = $outputDir . '/ffmpeg.pid';
        
        if ((file_exists($frameFile) || file_exists($streamFile) || file_exists($playlistFile)) && file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            if ($pid && $this->isProcessRunning($pid)) {
                return true;
            }
        }
        
        return false;
    }
    
    /**
     * Check if a process with given PID is running
     */
    private function isProcessRunning(string $pid): bool
    {
        $pid = trim($pid);
        if ($pid === '' || !ctype_digit($pid)) {
            return false;
        }

        $pidInt = (int) $pid;
        if ($pidInt <= 0) {
            return false;
        }

        // Prefer kill -0 style check (works even when ps output is restricted).
        if (function_exists('posix_kill')) {
            return @posix_kill($pidInt, 0);
        }

        $escapedPid = escapeshellarg((string) $pidInt);
        exec('kill -0 ' . $escapedPid . ' 2>/dev/null', $output, $returnCode);
        if ($returnCode === 0) {
            return true;
        }

        // Fallback to ps for platforms where kill -0 is unavailable.
        exec("ps -p {$pidInt} -o pid=", $psOutput, $psReturnCode);
        return $psReturnCode === 0 && !empty($psOutput);
    }

    private function buildCameraInputUrl(IpCamera $camera): ?string
    {
        $urlCandidates = [
            $camera->getRtspUrl(),
            $camera->getStreamUrl(),
            $camera->getFullStreamUrl(),
        ];

        $rawUrl = null;
        foreach ($urlCandidates as $candidate) {
            if (!is_string($candidate)) {
                continue;
            }
            $candidate = trim($candidate);
            if ($candidate !== '') {
                $rawUrl = $candidate;
                break;
            }
        }

        if ($rawUrl === null) {
            return null;
        }

        if (!preg_match('#^[a-z][a-z0-9+.-]*://#i', $rawUrl)) {
            $ip = trim((string) $camera->getIpAddress());
            if ($ip === '') {
                return null;
            }
            $port = $camera->getPort() > 0 ? $camera->getPort() : 80;
            $path = str_starts_with($rawUrl, '/') ? $rawUrl : '/' . $rawUrl;
            $rawUrl = sprintf('http://%s:%d%s', $ip, $port, $path);
        }

        return $this->attachCredentialsIfMissing($rawUrl, $camera);
    }

    private function attachCredentialsIfMissing(string $url, IpCamera $camera): string
    {
        $username = trim((string) ($camera->getUsername() ?? ''));
        $password = trim((string) ($camera->getPassword() ?? ''));
        if ($username === '' || $password === '') {
            return $url;
        }

        $parts = parse_url($url);
        if (!is_array($parts)) {
            return $url;
        }
        if (isset($parts['user']) || isset($parts['pass'])) {
            return $url;
        }
        if (!isset($parts['scheme'], $parts['host'])) {
            return $url;
        }

        $auth = rawurlencode($username) . ':' . rawurlencode($password) . '@';
        $rebuilt = $parts['scheme'] . '://' . $auth . $parts['host'];

        if (isset($parts['port'])) {
            $rebuilt .= ':' . $parts['port'];
        }

        $rebuilt .= $parts['path'] ?? '/';

        if (isset($parts['query'])) {
            $rebuilt .= '?' . $parts['query'];
        }

        if (isset($parts['fragment'])) {
            $rebuilt .= '#' . $parts['fragment'];
        }

        return $rebuilt;
    }

    /**
     * Get status of all active transcoding processes
     *
     * @return array<int, array<string, mixed>>
     */
    public function getStatus(): array
    {
        $status = [];
        
        // Get all camera directories in streams folder
        $streamDirs = glob($this->streamDirectory . '/camera_*') ?: [];
        
        foreach ($streamDirs as $dir) {
            if (!is_dir($dir)) {
                continue;
            }
            
            $cameraId = (int) str_replace($this->streamDirectory . '/camera_', '', $dir);
            $pidFile = $dir . '/ffmpeg.pid';
            $frameFile = '/tmp/rtsp_frame_' . $cameraId . '.jpg';
            $streamFile = $dir . '/stream.mjpg';
            $playlistFile = $dir . '/playlist.m3u8';
            $logFile = $dir . '/ffmpeg.log';
            
            $isRunning = false;
            $pid = null;
            
            if (file_exists($pidFile)) {
                $pid = trim((string) file_get_contents($pidFile));
                if ($pid && $this->isProcessRunning($pid)) {
                    $isRunning = true;
                }
            }
            
            $lastModified = null;
            if (file_exists($frameFile)) {
                $lastModified = filemtime($frameFile);
            } elseif (file_exists($streamFile)) {
                $lastModified = filemtime($streamFile);
            } elseif (file_exists($playlistFile)) {
                $lastModified = filemtime($playlistFile);
            }
            
            $status[$cameraId] = [
                'running' => $isRunning,
                'pid' => $pid,
                'outputDir' => $dir,
                'hasFrame' => file_exists($frameFile),
                'hasStream' => file_exists($streamFile),
                'hasPlaylist' => file_exists($playlistFile),
                'lastModified' => $lastModified ? date('Y-m-d H:i:s', $lastModified) : null,
                'hasLog' => file_exists($logFile)
            ];
        }
        
        return $status;
    }

    /**
     * Clean up old stream files
     */
    public function cleanup(int $cameraId): void
    {
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        
        if (is_dir($outputDir)) {
            $files = glob($outputDir . '/*') ?: [];
            foreach ($files as $file) {
                if (is_file($file)) {
                    unlink($file);
                }
            }
        }
    }

    /**
     * Start VLC transcoding for low-latency computer vision processing
     * VLC provides better performance and smoother playback than FFmpeg HLS
     * 
     * @param IpCamera $camera The camera entity
     * @param int $vlcHttpPort The HTTP port for VLC stream (default 8080 + cameraId)
     * @return bool True if VLC started successfully
     */
    public function startVlcTranscoding(IpCamera $camera, ?int $vlcHttpPort = null): bool
    {
        $cameraId = $camera->getId();
        if ($cameraId === null) {
            return false;
        }
        
        // Determine port - default to 8080 + cameraId to avoid conflicts
        if ($vlcHttpPort === null) {
            $vlcHttpPort = 8080 + $cameraId;
        }
        
        // Stop any existing VLC process for this camera
        $this->stopVlcTranscoding($cameraId);
        
        $rtspUrl = $camera->getRtspUrl() ?: $camera->getFullStreamUrl();
        
        if (!$rtspUrl) {
            $this->logger->error("No stream URL found for camera {$cameraId}");
            return false;
        }
        
        // Build authentication string if credentials exist
        $auth = '';
        if ($camera->getUsername() && $camera->getPassword()) {
            $auth = $camera->getUsername() . ':' . $camera->getPassword() . '@';
        }
        
        // Replace auth in RTSP URL if needed
        $inputUrl = str_replace('://', '://' . $auth, $rtspUrl);
        
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        if (!is_dir($outputDir)) {
            mkdir($outputDir, 0755, true);
        }
        
        // Check if port is available
        $checkPort = shell_exec("lsof -i:{$vlcHttpPort} 2>/dev/null");
        if (is_string($checkPort) && trim($checkPort) !== '') {
            $this->logger->warning("Port {$vlcHttpPort} is already in use, trying " . ($vlcHttpPort + 1));
            $vlcHttpPort = $vlcHttpPort + 1;
        }
        
        // VLC command for low-latency streaming
        // Using HTTP output with MJPEG codec for browser compatibility and low latency
        $vlcCommand = sprintf(
            'nohup cvlc -vvv "%s" ' .
            '--sout "#transcode{vcodec=MJPG,vb=2000,width=1280,height=720,acodec=none}:http{mux=multipart boundary=myboundary,dst=:/%d/stream.jpg}" ' .
            '--no-video-title-show ' .
            '--no-snapshot-preview ' .
            '--clock-jitter=0 ' .
            '--clock-synchro=0 ' .
            '> %s/vlc.log 2>&1 & echo $! > %s/vlc.pid',
            $inputUrl,
            $vlcHttpPort,
            $outputDir,
            $outputDir
        );
        
        $this->logger->info("Starting VLC transcoding for camera {$cameraId} on port {$vlcHttpPort}");
        
        try {
            exec($vlcCommand);
            usleep(500000); // 0.5 seconds
            
            $pidFile = $outputDir . '/vlc.pid';
            if (file_exists($pidFile)) {
                $pid = trim((string) file_get_contents($pidFile));
                $this->vlcProcesses[$cameraId] = [
                    'pid' => $pid,
                    'camera' => $camera,
                    'port' => $vlcHttpPort,
                    'outputDir' => $outputDir,
                    'startedAt' => new \DateTime()
                ];
                
                $this->logger->info("VLC started with PID: {$pid} on port {$vlcHttpPort}");
                return true;
            }
            
            // Check log for errors
            $logFile = $outputDir . '/vlc.log';
            if (file_exists($logFile)) {
                $logContent = file_get_contents($logFile);
                if (is_string($logContent)) {
                    $this->logger->warning("VLC log for camera {$cameraId}: " . substr($logContent, -500));
                }
            }
            
            return false;
            
        } catch (\Exception $e) {
            $this->logger->error("Failed to start VLC for camera {$cameraId}: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Stop VLC transcoding for a camera
     */
    public function stopVlcTranscoding(?int $cameraId): bool
    {
        if ($cameraId === null) {
            return false;
        }

        // Kill all VLC processes for this camera
        exec("pkill -9 -f 'cvlc.*camera_{$cameraId}' 2>/dev/null");
        exec("pkill -9 -f 'vlc.*camera_{$cameraId}' 2>/dev/null");
        
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/vlc.pid';
        
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            exec("kill -9 $pid 2>/dev/null");
            @unlink($pidFile);
        }
        
        if (isset($this->vlcProcesses[$cameraId])) {
            unset($this->vlcProcesses[$cameraId]);
        }
        
        $this->logger->info("Stopped VLC for camera {$cameraId}");
        return true;
    }

    /**
     * Get the VLC HTTP stream URL for a camera
     * This provides low-latency streaming ideal for computer vision
     */
    public function getVlcStreamUrl(int $cameraId): ?string
    {
        if (isset($this->vlcProcesses[$cameraId])) {
            $port = $this->vlcProcesses[$cameraId]['port'];
            return "/streams/camera_{$cameraId}/stream.m3u8";
        }
        
        // Check if VLC is running by checking for pid file
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/vlc.pid';
        
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            if ($pid && $this->isProcessRunning($pid)) {
                // Extract port from log or use default
                $logFile = $outputDir . '/vlc.log';
                $port = 8080 + $cameraId; // Default port
                
                if (file_exists($logFile)) {
                    $logContent = file_get_contents($logFile);
                    if (is_string($logContent) && preg_match('/Listening on.*?:(\d+)/', $logContent, $matches)) {
                        $port = (int)$matches[1];
                    }
                }
                
                // Return MJPEG stream URL
                return "http://localhost:{$port}/stream.jpg";
            }
        }
        
        return null;
    }

    /**
     * Get the direct VLC MJPEG URL for computer vision processing
     * Returns the direct HTTP URL for the VLC stream
     */
    public function getVlcMjpegUrl(IpCamera $camera): ?string
    {
        $cameraId = $camera->getId();
        if ($cameraId === null) {
            return null;
        }

        $port = 8080 + $cameraId;
        
        // Check if VLC is running
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/vlc.pid';
        
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            if ($pid && $this->isProcessRunning($pid)) {
                return "http://localhost:{$port}/stream.jpg";
            }
        }
        
        return null;
    }

    /**
     * Check if VLC is transcoding for a camera
     */
    public function isVlcTranscoding(int $cameraId): bool
    {
        if (isset($this->vlcProcesses[$cameraId])) {
            $pid = $this->vlcProcesses[$cameraId]['pid'];
            if ($pid && $this->isProcessRunning($pid)) {
                return true;
            }
            unset($this->vlcProcesses[$cameraId]);
        }
        
        // Fallback: check if VLC pid file exists and process is running
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/vlc.pid';
        
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            if ($pid && $this->isProcessRunning($pid)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Start low-latency stream optimized for computer vision
     * Uses FFmpeg with UDP output for minimal latency
     * 
     * @param IpCamera $camera The camera entity
     * @param string $socketPath Unix socket path for CV processing
     * @return bool True if started successfully
     */
    public function startCvStream(IpCamera $camera, ?string $socketPath = null): bool
    {
        $cameraId = $camera->getId();
        if ($cameraId === null) {
            return false;
        }
        
        if ($socketPath === null) {
            $socketPath = '/tmp/cv_camera_' . $cameraId . '.sock';
        }
        
        // Stop existing CV stream
        $this->stopCvStream($cameraId);
        
        // Remove existing socket
        if (file_exists($socketPath)) {
            @unlink($socketPath);
        }
        
        $rtspUrl = $camera->getRtspUrl() ?: $camera->getFullStreamUrl();
        
        if (!$rtspUrl) {
            $this->logger->error("No stream URL found for camera {$cameraId}");
            return false;
        }
        
        // Build authentication
        $auth = '';
        if ($camera->getUsername() && $camera->getPassword()) {
            $auth = $camera->getUsername() . ':' . $camera->getPassword() . '@';
        }
        $inputUrl = str_replace('://', '://' . $auth, $rtspUrl);
        
        // Create FIFO for CV processing
        shell_exec('mkfifo ' . $socketPath . ' 2>/dev/null');
        
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        
        // Ultra-low latency FFmpeg command for CV
        // Uses frame-by-frame output for minimal delay
        $cvCommand = sprintf(
            'nohup ffmpeg -re -rtsp_transport tcp ' .
            '-fflags nobuffer -flags low_delay ' .
            '-max_delay 100000 ' .
            '-analyzeduration 100000 -probesize 100000 ' .
            '-i "%s" ' .
            '-c:v libx264 -preset ultrafast -tune zerolatency ' .
            '-b:v 2000k -g 10 -keyint_min 10 ' .
            '-vf "scale=-2:720" ' .
            '-f h264 ' .
            '- | nc -l -k -p %d > %s/cv_stream.log 2>&1 & echo $! > %s/cv.pid',
            $inputUrl,
            (9000 + $cameraId),
            $outputDir,
            $outputDir
        );
        
        $this->logger->info("Starting CV stream for camera {$cameraId}");
        
        try {
            exec($cvCommand);
            usleep(300000); // 0.3 seconds
            
            $pidFile = $outputDir . '/cv.pid';
            if (file_exists($pidFile)) {
                $pid = trim((string) file_get_contents($pidFile));
                $this->logger->info("CV stream started with PID: {$pid}");
                return true;
            }
            
            return false;
            
        } catch (\Exception $e) {
            $this->logger->error("Failed to start CV stream for camera {$cameraId}: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Stop CV stream for a camera
     */
    public function stopCvStream(?int $cameraId): bool
    {
        if ($cameraId === null) {
            return false;
        }

        exec("pkill -9 -f 'ffmpeg.*cv_camera_{$cameraId}' 2>/dev/null");
        exec("pkill -9 -f 'nc.*9000{$cameraId}' 2>/dev/null");
        
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $pidFile = $outputDir . '/cv.pid';
        
        if (file_exists($pidFile)) {
            $pid = trim((string) file_get_contents($pidFile));
            exec("kill -9 $pid 2>/dev/null");
            @unlink($pidFile);
        }
        
        // Clean up socket
        $socketPath = '/tmp/cv_camera_' . $cameraId . '.sock';
        if (file_exists($socketPath)) {
            @unlink($socketPath);
        }
        
        $this->logger->info("Stopped CV stream for camera {$cameraId}");
        return true;
    }

    /**
     * Get stream status including VLC and CV streams
     *
     * @return array<string, mixed>
     */
    public function getFullStreamStatus(int $cameraId): array
    {
        $baseStatus = $this->getStreamStatus($cameraId);
        
        // Add VLC status
        $baseStatus['vlcRunning'] = $this->isVlcTranscoding($cameraId);
        $camera = $this->entityManager->find(IpCamera::class, $cameraId);
        $baseStatus['vlcUrl'] = $camera instanceof IpCamera ? $this->getVlcMjpegUrl($camera) : null;
        
        // Add CV stream status
        $outputDir = $this->streamDirectory . '/camera_' . $cameraId;
        $cvPidFile = $outputDir . '/cv.pid';
        $baseStatus['cvRunning'] = false;
        
        if (file_exists($cvPidFile)) {
            $pid = trim((string) file_get_contents($cvPidFile));
            $baseStatus['cvRunning'] = $this->isProcessRunning($pid);
        }
        
        return $baseStatus;
    }
}
