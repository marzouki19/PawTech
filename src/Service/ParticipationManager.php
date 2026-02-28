<?php

namespace App\Service;

use App\Entity\Participation;

class ParticipationManager
{
    public function validate(Participation $participation, iterable $existingParticipations = []): bool
    {
        if ($participation->getUser() === null) {
            throw new \InvalidArgumentException('Le participant est obligatoire');
        }
        if ($participation->getEvenement() === null) {
            throw new \InvalidArgumentException("L'événement est obligatoire");
        }
        if (!in_array($participation->getStatut(), Participation::STATUTS, true)) {
            throw new \InvalidArgumentException('Le statut doit être EN_ATTENTE, CONFIRMEE ou ANNULEE');
        }
        foreach ($existingParticipations as $p) {
            if ($p === $participation) {
                continue;
            }
            if ($p->getUser() && $p->getEvenement()
                && $participation->getUser() && $participation->getEvenement()
                && $p->getUser() === $participation->getUser()
                && $p->getEvenement() === $participation->getEvenement()) {
                throw new \InvalidArgumentException('Une personne ne peut participer qu\'une seule fois au même événement');
            }
        }
        return true;
    }
}
