<?php

namespace App\Service;

use App\Entity\Alert;
use App\Repository\AlertRepository;
use Doctrine\ORM\EntityManagerInterface;

class NotificationService
{
    private AlertRepository $alertRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(
        AlertRepository $alertRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->alertRepository = $alertRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @return list<Alert>
     */
    public function getNotifications(): array
    {
        return $this->alertRepository->findAllOrderedByDateDesc();
    }

    /**
     * @return list<Alert>
     */
    public function getLatestNotifications(int $limit = 5): array
    {
        return $this->alertRepository->findLatestOrderedByDateDesc($limit);
    }

    public function getUnreadCount(): int
    {
        return $this->alertRepository->countUnread();
    }

    public function getNotificationById(int $id): ?Alert
    {
        return $this->alertRepository->find($id);
    }

    public function markAsRead(int $id): void
    {
        $alert = $this->alertRepository->find($id);
        if ($alert) {
            $alert->setStatut('read');
            $this->entityManager->persist($alert);
            $this->entityManager->flush();
        }
    }

    public function markAsUnread(int $id): void
    {
        $alert = $this->alertRepository->find($id);
        if ($alert) {
            $alert->setStatut('unread');
            $this->entityManager->persist($alert);
            $this->entityManager->flush();
        }
    }
}
