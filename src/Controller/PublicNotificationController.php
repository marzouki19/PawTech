<?php

namespace App\Controller;

use App\Service\NotificationService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * PublicNotificationController - Notification pages
 * Part of the ObservationStations module
 */
#[Route('/notifications')]
final class PublicNotificationController extends AbstractController
{
    #[Route('', name: 'app_notifications')]
    public function index(NotificationService $notificationService): Response
    {
        return $this->render('notifications.html.twig', [
            'notifications' => $notificationService->getNotifications(),
        ]);
    }

    #[Route('/{id}/read', name: 'app_notifications_read', methods: ['POST'])]
    public function markAsRead(
        int $id,
        Request $request,
        NotificationService $notificationService
    ): Response {
        $token = $request->request->get('_token');
        
        if ($this->isCsrfTokenValid('mark_read_' . $id, $token)) {
            $notificationService->markAsRead($id);
        }

        return $this->redirectToRoute('app_notifications');
    }
}
