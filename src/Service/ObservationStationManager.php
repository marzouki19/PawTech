<?php

namespace App\Service;

use App\Entity\ObservationStation;

class ObservationStationManager
{
    public function validate(ObservationStation $station): bool
    {
        if (!preg_match('/^\d{6}$/', (string) $station->getCode())) {
            throw new \InvalidArgumentException('Le code doit contenir exactement 6 chiffres');
        }

        if (!preg_match('/^-?\d{1,3}\.\d+,\s*-?\d{1,3}\.\d+$/', (string) $station->getLocalisation())) {
            throw new \InvalidArgumentException('La localisation doit être au format "48.8566, 2.3522"');
        }

        return true;
    }
}
