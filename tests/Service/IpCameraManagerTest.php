<?php

namespace App\Tests\Service;

use App\Entity\IpCamera;
use App\Service\IpCameraManager;
use PHPUnit\Framework\TestCase;

class IpCameraManagerTest extends TestCase
{
    public function testValidCamera(): void
    {
        $camera = $this->makeValidCamera();
        $manager = new IpCameraManager();

        $this->assertTrue($manager->validate($camera));
    }

    public function testCameraWithoutName(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $camera = $this->makeValidCamera();
        $camera->setName('');

        (new IpCameraManager())->validate($camera);
    }

    public function testCameraWithInvalidIp(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $camera = $this->makeValidCamera();
        $camera->setIpAddress('not-an-ip');

        (new IpCameraManager())->validate($camera);
    }

    public function testCameraWithInvalidPort(): void
    {
        $this->expectException(\InvalidArgumentException::class);

        $camera = $this->makeValidCamera();
        $camera->setPort(70000);

        (new IpCameraManager())->validate($camera);
    }

    private function makeValidCamera(): IpCamera
    {
        $camera = new IpCamera();
        $camera->setName('Camera Nord 1');
        $camera->setIpAddress('192.168.1.50');
        $camera->setPort(554);
        $camera->setStatus('active');

        return $camera;
    }
}
