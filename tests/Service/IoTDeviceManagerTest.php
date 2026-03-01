<?php

namespace App\Tests\Service;

use App\Entity\IoTDevice;
use App\Entity\ObservationStation;
use App\Service\IoTDeviceManager;
use PHPUnit\Framework\TestCase;

class IoTDeviceManagerTest extends TestCase
{
    public function testValidIoTDevice(): void
    {
        $device = $this->makeValidDevice();
        $manager = new IoTDeviceManager();

        $this->assertTrue($manager->validate($device));
    }

    public function testIoTDeviceWithoutStation(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $device = $this->makeValidDevice();
        $device->setStation(null);

        (new IoTDeviceManager())->validate($device);
    }

    public function testIoTDeviceWithInvalidReportingInterval(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $device = $this->makeValidDevice();
        $device->setReportingInterval(0);

        (new IoTDeviceManager())->validate($device);
    }

    public function testIoTDeviceWithInvalidHeartbeatInterval(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $device = $this->makeValidDevice();
        $device->setHeartbeatInterval(20);
        $device->setReportingInterval(60);

        (new IoTDeviceManager())->validate($device);
    }

    private function makeValidDevice(): IoTDevice
    {
        $station = new ObservationStation();
        $station->setCode('654321');
        $station->setZone('ghazela_Sud');
        $station->setLocalisation('36.8065, 10.1815');
        $station->setStatut('active');

        $device = new IoTDevice();
        $device->setName('ESP32 Temp Sensor');
        $device->setDeviceType('ESP32');
        $device->setDeviceId('ESP32_001');
        $device->setStatus('active');
        $device->setStation($station);
        $device->setReportingInterval(60);
        $device->setHeartbeatInterval(300);
        $device->setApiServerUrl('http://127.0.0.1:8000');

        return $device;
    }
}
