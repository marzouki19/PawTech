<?php

namespace App\Service;

use App\Entity\IoTDevice;

class IoTDeviceManager
{
    public function validate(IoTDevice $device): bool
    {
        if (trim((string) $device->getName()) === '') {
            throw new \InvalidArgumentException('Le nom de l\'appareil IoT est obligatoire');
        }

        if ($device->getStation() === null) {
            throw new \InvalidArgumentException('L\'appareil IoT doit être lié à une station');
        }

        $reportingInterval = $device->getReportingInterval();
        if ($reportingInterval === null || $reportingInterval < 1) {
            throw new \InvalidArgumentException('Le reporting interval doit être supérieur à 0');
        }

        $heartbeatInterval = $device->getHeartbeatInterval();
        if ($heartbeatInterval === null || $heartbeatInterval < 1) {
            throw new \InvalidArgumentException('Le heartbeat interval doit être supérieur à 0');
        }

        if ($heartbeatInterval < $reportingInterval) {
            throw new \InvalidArgumentException('Le heartbeat interval doit être supérieur ou égal au reporting interval');
        }

        $status = $device->getStatus();
        if ($status !== null && !in_array($status, ['active', 'inactive', 'maintenance', 'error'], true)) {
            throw new \InvalidArgumentException('Statut IoT invalide');
        }

        $apiServerUrl = trim((string) $device->getApiServerUrl());
        if ($apiServerUrl !== '' && filter_var($apiServerUrl, FILTER_VALIDATE_URL) === false) {
            throw new \InvalidArgumentException('URL serveur API invalide');
        }

        return true;
    }
}
