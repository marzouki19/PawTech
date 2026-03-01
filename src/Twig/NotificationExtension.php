<?php

namespace App\Twig;

use App\Entity\Alert;
use App\Service\NotificationService;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class NotificationExtension extends AbstractExtension
{
    public function __construct(private NotificationService $notificationService)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('header_notifications', [$this, 'getHeaderNotifications']),
        ];
    }

    /**
     * @return array{unread_count:int,latest:list<Alert>}
     */
    public function getHeaderNotifications(): array
    {
        return [
            'unread_count' => $this->notificationService->getUnreadCount(),
            'latest' => $this->notificationService->getLatestNotifications(5),
        ];
    }
}
