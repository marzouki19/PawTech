<?php

namespace App\Service;

use App\Entity\IpCamera;

class IpCameraManager
{
    public function validate(IpCamera $camera): bool
    {
        if (trim((string) $camera->getName()) === '') {
            throw new \InvalidArgumentException('Le nom de la caméra est obligatoire');
        }

        $ipAddress = trim((string) $camera->getIpAddress());
        if ($ipAddress === '' || filter_var($ipAddress, FILTER_VALIDATE_IP) === false) {
            throw new \InvalidArgumentException('Adresse IP invalide');
        }

        $port = $camera->getPort();
        if ($port < 1 || $port > 65535) {
            throw new \InvalidArgumentException('Le port doit être entre 1 et 65535');
        }

        $status = $camera->getStatus();
        if (!in_array($status, ['active', 'inactive', 'error'], true)) {
            throw new \InvalidArgumentException('Statut caméra invalide');
        }

        return true;
    }
}
