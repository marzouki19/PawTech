<?php

namespace App\Tests\Service;

use App\Entity\ObservationStation;
use App\Service\ObservationStationManager;
use PHPUnit\Framework\TestCase;

class ObservationStationManagerTest extends TestCase
{
    public function testValidStation(): void
    {
        $station = $this->makeValidStation();
        $this->assertTrue((new ObservationStationManager())->validate($station));
    }

    public function testInvalidCode(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $station = $this->makeValidStation();
        $station->setCode('123');
        (new ObservationStationManager())->validate($station);
    }

    public function testInvalidLocalisation(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $station = $this->makeValidStation();
        $station->setLocalisation('Tunis');
        (new ObservationStationManager())->validate($station);
    }

    private function makeValidStation(): ObservationStation
    {
        $station = new ObservationStation();
        $station->setCode('123456');
        $station->setZone('ghazela_Nord');
        $station->setLocalisation('36.8065, 10.1815');
        $station->setStatut('active');

        return $station;
    }
}
