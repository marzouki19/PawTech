<?php

namespace App\Controller;

use App\Repository\IoTDataRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamingHttpResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class IoTStreamController extends AbstractController
{
    /**
     * Server-Sent Events (SSE) endpoint for real-time IoT data
     * Usage: Connect with EventSource in JavaScript
     * 
     * Example JavaScript:
     * const source = new EventSource('/iot/stream/79');
     * source.onmessage = (event) => {
     *     const data = JSON.parse(event.data);
     *     console.log('New IoT data:', data);
     * };
     */
    #[Route('/iot/stream/{stationId}', name: 'app_iot_stream', methods: ['GET'])]
    public function streamData(int $stationId, IoTDataRepository $iotRepo): Response
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'text/event-stream');
        $response->headers->set('Cache-Control', 'no-cache');
        $response->headers->set('Connection', 'keep-alive');
        $response->headers->set('X-Accel-Buffering', 'no');

        // Set SSE headers
        $response->sendHeaders();

        // Send initial data
        $lastData = $iotRepo->findLatestByStationId($stationId);
        if ($lastData) {
            $this->sendEvent($response, $this->serializeIoTData($lastData));
        }

        // Long polling loop - check for new data every 2 seconds
        $lastId = $lastData?->getId() ?? 0;
        $timeout = 30; // 30 seconds timeout
        $startTime = time();
        
        while (true) {
            // Check for timeout
            if ((time() - $startTime) > $timeout) {
                break;
            }

            // Check for new data
            $newData = $iotRepo->findNewerThan($stationId, $lastId);
            
            if ($newData) {
                foreach ($newData as $data) {
                    $this->sendEvent($response, $this->serializeIoTData($data));
                    $lastId = $data->getId();
                }
            }

            // Flush output and wait
            if (ob_get_level()) {
                ob_flush();
            }
            flush();
            
            sleep(2);
        }

        return $response;
    }

    /**
     * Simple endpoint that returns the latest IoT data as JSON
     * Use this for polling or initial data load
     */
    #[Route('/iot/latest/{stationId}', name: 'app_iot_latest', methods: ['GET'])]
    public function getLatest(int $stationId, IoTDataRepository $iotRepo): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $data = $iotRepo->findLatestByStationId($stationId);
        
        if (!$data) {
            return $this->json([
                'error' => 'No data found',
                'station_id' => $stationId,
            ], 404);
        }

        return $this->json($this->serializeIoTData($data));
    }

    /**
     * Endpoint that waits for new data (long polling)
     * Returns when new data is available or timeout
     */
    #[Route('/iot/wait/{stationId}', name: 'app_iot_wait', methods: ['GET'])]
    public function waitForData(int $stationId, IoTDataRepository $iotRepo): \Symfony\Component\HttpFoundation\JsonResponse
    {
        $lastId = (int) $_GET['after'] ?? 0;
        $timeout = 25; // 25 second timeout
        
        $startTime = time();
        
        while ((time() - $startTime) < $timeout) {
            $newData = $iotRepo->findNewerThan($stationId, $lastId);
            
            if ($newData) {
                $latest = end($newData);
                return $this->json([
                    'data' => array_map([$this, 'serializeIoTData'], $newData),
                    'latest_id' => $latest->getId(),
                ]);
            }
            
            usleep(500000); // 0.5 second
        }

        return $this->json([
            'data' => [],
            'latest_id' => $lastId,
            'timeout' => true,
        ]);
    }

    /**
     * Publish update via Mercure (requires Mercure hub to be running)
     */
    #[Route('/iot/publish/{stationId}', name: 'app_iot_publish', methods: ['POST'])]
    public function publish(
        int $stationId,
        IoTDataRepository $iotRepo,
        HubInterface $hub
    ): \Symfony\Component\HttpFoundation\JsonResponse {
        $data = $iotRepo->findLatestByStationId($stationId);
        
        if (!$data) {
            return $this->json(['error' => 'No data found'], 404);
        }

        $update = new Update(
            sprintf('iot/station/%d', $stationId),
            json_encode($this->serializeIoTData($data)),
            false
        );

        $hub->publish($update);

        return $this->json(['success' => true]);
    }

    private function sendEvent(Response $response, array $data): void
    {
        $response->getContent();
        echo "data: " . json_encode($data) . "\n\n";
    }

    private function serializeIoTData($iotData): array
    {
        return [
            'id' => $iotData->getId(),
            'station_id' => $iotData->getStation()?->getId(),
            'station_code' => $iotData->getStation()?->getCode(),
            'temperature' => $iotData->getTemperature(),
            'humidity' => $iotData->getHumidity(),
            'pressure' => $iotData->getPressure(),
            'distance' => $iotData->getDistance(),
            'dog_detected' => $iotData->isDogDetected(),
            'food_dispensed' => $iotData->isFoodDispensed(),
            'device_type' => $iotData->getDeviceType(),
            'device_id' => $iotData->getDeviceId(),
            'last_seen' => $iotData->getLastSeen()?->format('c'),
            'created_at' => $iotData->getCreatedAt()?->format('c'),
        ];
    }
}
