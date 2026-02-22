<?php

namespace App\Twig;

use App\Repository\AlertRepository;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class AlertExtension extends AbstractExtension
{
    public function __construct(private AlertRepository $alertRepository)
    {
    }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('total_alerts_count', [$this, 'getTotalAlertsCount']),
        ];
    }

    public function getTotalAlertsCount(): int
    {
        return $this->alertRepository->count([]);
    }
}
