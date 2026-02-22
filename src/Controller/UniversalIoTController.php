<?php

namespace App\Controller;

use App\Entity\IoTDevice;
use App\Entity\IoTData;
use App\Repository\IoTDeviceRepository;
use App\Repository\ObservationStationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Universal IoT Controller - Station-Agnostic Endpoints
 * These endpoints allow IoT devices to connect without knowing their station ID
 * The device ID is used to look up the configuration from the database
 */
#[Route('/admin/stations/iot')]
class UniversalIoTController extends AbstractController
{
    /**
     * Get device configuration by device ID - Universal endpoint
     * This is the station-agnostic way for ESP32 to fetch its configuration
     * URL: /admin/stations/iot/config/{deviceId}
     */
    #[Route('/config/{deviceId}', name: 'app_iot_config_universal', methods: ['GET'])]
    public function getConfig(
        string $deviceId,
        IoTDeviceRepository $deviceRepo
    ): JsonResponse {
        $device = $deviceRepo->findByDeviceId($deviceId);
        
        if (!$device) {
            return new JsonResponse([
                'error' => 'Device not found',
                'message' => 'No device found with ID: ' . $deviceId . '. Please create this device in the admin panel first.'
            ], 404);
        }
        
        // Return configuration in a format ESP32 can use
        return new JsonResponse($device->getConfigJson());
    }

    /**
     * Send sensor data - Universal endpoint
     * URL: /admin/stations/iot/data
     */
    #[Route('/data', name: 'app_iot_data_universal', methods: ['POST'])]
    public function receiveData(
        Request $request,
        EntityManagerInterface $entityManager,
        IoTDeviceRepository $deviceRepo,
        ObservationStationRepository $stationRepo
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        
        if (!$data) {
            return new JsonResponse(['error' => 'Invalid data'], 400);
        }

        // Try to find device by device_id first
        $deviceId = $data['device_id'] ?? null;
        $stationCode = $data['station_code'] ?? null;
        
        $device = null;
        $station = null;
        
        // Priority 1: Find by device ID
        if ($deviceId) {
            $device = $deviceRepo->findByDeviceId($deviceId);
            if ($device) {
                $station = $device->getStation();
            }
        }
        
        // Priority 2: Find by station code
        if (!$station && $stationCode) {
            $station = $stationRepo->findOneBy(['code' => $stationCode]);
        }
        
        if (!$station) {
            return new JsonResponse(['error' => 'Station not found'], 404);
        }

        // Update device last seen
        if ($device) {
            $device->setLastSeen(new \DateTime());
            $entityManager->flush();
        }

        $iotData = new IoTData();
        $additionalSensors = isset($data['additional_sensors']) && is_array($data['additional_sensors'])
            ? $data['additional_sensors']
            : [];
        $ultrasonicDistanceCm = $this->extractUltrasonicDistanceCm($data, $additionalSensors);
        if ($ultrasonicDistanceCm !== null) {
            $additionalSensors['ultrasonic_distance_cm'] = $ultrasonicDistanceCm;
        }

        $iotData->setStation($station);
        $iotData->setTemperature($data['temperature'] ?? null);
        $iotData->setHumidity($data['humidity'] ?? null);
        $iotData->setPressure($data['pressure'] ?? null);
        $iotData->setBatteryLevel($data['battery'] ?? null);
        $iotData->setSignalStrength($data['signal_strength'] ?? null);
        $iotData->setDistance($ultrasonicDistanceCm !== null ? number_format($ultrasonicDistanceCm, 2, '.', '') : null);
        $iotData->setDogDetected($this->normalizeBool($data['dog_detected'] ?? null));
        $iotData->setFoodDispensed($this->normalizeBool($data['food_dispensed'] ?? null));
        $iotData->setDeviceType($data['device_type'] ?? 'ESP32');
        $iotData->setDeviceId($deviceId);
        $iotData->setFirmwareVersion($data['firmware_version'] ?? null);
        $iotData->setAdditionalSensors(!empty($additionalSensors) ? $additionalSensors : null);
        $iotData->setLastSeen(new \DateTime());
        $iotData->setCreatedAt(new \DateTime());

        $entityManager->persist($iotData);
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Data received',
            'id' => $iotData->getId(),
            'station_code' => $station->getCode(),
        ]);
    }

    /**
     * Send heartbeat - Universal endpoint
     * URL: /admin/stations/iot/heartbeat/{deviceId}
     */
    #[Route('/heartbeat/{deviceId}', name: 'app_iot_heartbeat_universal', methods: ['POST'])]
    public function heartbeat(
        string $deviceId,
        Request $request,
        EntityManagerInterface $entityManager,
        IoTDeviceRepository $deviceRepo
    ): JsonResponse {
        $device = $deviceRepo->findByDeviceId($deviceId);
        
        if (!$device) {
            return new JsonResponse(['error' => 'Device not found'], 404);
        }
        
        $data = json_decode($request->getContent(), true) ?? [];
        
        $device->setLastHeartbeat(new \DateTime());
        $device->setLastSeen(new \DateTime());
        $device->setStatus($data['status'] ?? 'active');
        
        if (isset($data['firmware_version'])) {
            $device->setFirmwareVersion($data['firmware_version']);
        }
        
        $entityManager->flush();

        return new JsonResponse([
            'success' => true,
            'message' => 'Heartbeat received',
            'station_id' => $device->getStation()->getId(),
            'station_code' => $device->getStation()->getCode(),
        ]);
    }

    private function extractUltrasonicDistanceCm(array $data, array $additionalSensors): ?float
    {
        $nestedUltrasonic = isset($data['ultrasonic']) && is_array($data['ultrasonic']) ? $data['ultrasonic'] : [];

        $candidates = [
            $data['ultrasonic_distance_cm'] ?? null,
            $data['ultrasonic_distance'] ?? null,
            $data['distance_cm'] ?? null,
            $nestedUltrasonic['distance_cm'] ?? null,
            $additionalSensors['ultrasonic_distance_cm'] ?? null,
            $additionalSensors['distance_cm'] ?? null,
            $data['distance'] ?? null,
        ];

        foreach ($candidates as $candidate) {
            $numeric = $this->normalizeNumeric($candidate);
            if ($numeric !== null) {
                return $numeric;
            }
        }

        return null;
    }

    private function normalizeNumeric(mixed $value): ?float
    {
        if ($value === null) {
            return null;
        }
        if (is_string($value)) {
            $value = trim($value);
            if ($value === '') {
                return null;
            }
            $value = str_replace(',', '.', $value);
        }
        if (!is_numeric($value)) {
            return null;
        }
        return (float) $value;
    }

    private function normalizeBool(mixed $value): ?bool
    {
        if ($value === null || $value === '') {
            return null;
        }
        if (is_bool($value)) {
            return $value;
        }

        $normalized = strtolower(trim((string) $value));
        if (in_array($normalized, ['1', 'true', 'yes', 'on'], true)) {
            return true;
        }
        if (in_array($normalized, ['0', 'false', 'no', 'off'], true)) {
            return false;
        }

        return null;
    }

    /**
     * Get servo command for device - ESP32 polls this to check for manual commands
     * URL: /admin/stations/iot/servo/{deviceId}
     */
    #[Route('/servo/{deviceId}', name: 'app_iot_servo_control', methods: ['GET'])]
    public function getServoCommand(
        string $deviceId,
        IoTDeviceRepository $deviceRepo,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $device = $deviceRepo->findByDeviceId($deviceId);
        
        if (!$device) {
            return new JsonResponse([
                'error' => 'Device not found',
                'command' => 'none'
            ], 404);
        }
        
        $command = $device->getServoCommand() ?? 'none';
        $autoFeedEnabled = $device->isAutoFeedEnabled();
        
        // Clear the command after reading (one-time command)
        $device->setServoCommand(null);
        $device->setUpdatedAt(new \DateTime());
        $entityManager->flush();
        
        return new JsonResponse([
            'command' => $command,
            'auto_feed_enabled' => $autoFeedEnabled
        ]);
    }

    /**
     * Set servo command for device (called from dashboard)
     * URL: /admin/stations/iot/servo/{deviceId}/set
     */
    #[Route('/servo/{deviceId}/set', name: 'app_iot_servo_set', methods: ['POST'])]
    public function setServoCommand(
        string $deviceId,
        Request $request,
        IoTDeviceRepository $deviceRepo,
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $device = $deviceRepo->findByDeviceId($deviceId);
        
        if (!$device) {
            return new JsonResponse([
                'error' => 'Device not found'
            ], 404);
        }
        
        $data = json_decode($request->getContent(), true);
        $command = $data['command'] ?? 'auto';
        
        // Valid commands: open, close, auto
        if (!in_array($command, ['open', 'close', 'auto'])) {
            $command = 'auto';
        }
        
        $device->setServoCommand($command);
        $device->setUpdatedAt(new \DateTime());
        $entityManager->flush();
        
        return new JsonResponse([
            'success' => true,
            'command' => $command,
            'message' => 'Servo command set to: ' . $command
        ]);
    }
}
