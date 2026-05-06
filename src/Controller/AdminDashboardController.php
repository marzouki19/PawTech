<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/admin')]
class AdminDashboardController extends AbstractController
{
    /**
     * All admin functionality disabled - redirect all routes to home
     */
    
    #[Route('', name: 'app_admin_dashboard', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'page_title' => 'Dashboard',
            'active' => 'dashboard',
        ]);
    }

    #[Route('/dashboard/data', name: 'app_admin_dashboard_data', methods: ['GET'])]
    public function getDashboardData(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/map', name: 'app_admin_map', methods: ['GET'])]
    public function map(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/map/data', name: 'app_admin_map_data', methods: ['GET'])]
    public function getMapData(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras', name: 'app_admin_cameras', methods: ['GET'])]
    public function cameras(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras/{id}', name: 'app_admin_camera_view', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function viewCamera(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras/{id}/stream', name: 'app_admin_camera_stream', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getCameraStream(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras/{id}/control', name: 'app_admin_camera_control', methods: ['POST'])]
    public function controlCamera(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras/{id}/mjpeg', name: 'app_admin_camera_mjpeg', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getMjpegStream(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cameras/{id}/frame', name: 'app_admin_camera_frame', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getCameraFrame(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/detections', name: 'app_admin_detections', methods: ['GET'])]
    public function detections(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/detections/recent', name: 'app_admin_detections_recent', methods: ['GET'])]
    public function getRecentDetections(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/statistics', name: 'app_admin_statistics', methods: ['GET'])]
    public function statistics(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/statistics/data', name: 'app_admin_statistics_data', methods: ['GET'])]
    public function getStatisticsData(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/system-alerts', name: 'app_admin_system_alerts', methods: ['GET'])]
    public function alerts(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/health-alerts', name: 'app_admin_health_alerts', methods: ['GET'])]
    public function healthAlerts(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/stations/{id}/data', name: 'app_admin_station_data', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function getStationData(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/api/iot/data', name: 'app_api_iot_data', methods: ['POST'])]
    public function receiveIoTData(): Response
    {
        return $this->redirectToRoute('app_home');
    }

    #[Route('/api/detection', name: 'app_api_detection', methods: ['POST'])]
    public function receiveDetection(): Response
    {
        return $this->redirectToRoute('app_home');
    }
}
