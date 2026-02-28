<?php

namespace App\Tests\Service;

use App\Entity\Evenement;
use App\Entity\Participation;
use App\Entity\User;
use App\Service\ParticipationManager;
use PHPUnit\Framework\TestCase;

class ParticipationManagerTest extends TestCase
{
    public function testValidParticipation(): void
    {
        $user = new User();
        $event = new Evenement();
        $participation = new Participation();
        $participation->setUser($user);
        $participation->setEvenement($event);
        $participation->setStatut('EN_ATTENTE');

        $manager = new ParticipationManager();
        $this->assertTrue($manager->validate($participation, []));
    }

    public function testSamePersonCannotParticipateTwiceInSameEvent(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Une personne ne peut participer qu\'une seule fois au même événement');

        $user = new User();
        $event = new Evenement();

        $existingParticipation = new Participation();
        $existingParticipation->setUser($user);
        $existingParticipation->setEvenement($event);
        $existingParticipation->setStatut('CONFIRMEE');

        $newParticipation = new Participation();
        $newParticipation->setUser($user);
        $newParticipation->setEvenement($event);
        $newParticipation->setStatut('EN_ATTENTE');

        $manager = new ParticipationManager();
        $manager->validate($newParticipation, [$existingParticipation]);
    }

    public function testParticipationWithoutUser(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le participant est obligatoire');

        $event = new Evenement();
        $participation = new Participation();
        $participation->setEvenement($event);
        $participation->setStatut('EN_ATTENTE');

        $manager = new ParticipationManager();
        $manager->validate($participation, []);
    }

    public function testParticipationWithInvalidStatus(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le statut doit être EN_ATTENTE, CONFIRMEE ou ANNULEE');

        $user = new User();
        $event = new Evenement();
        $participation = new Participation();
        $participation->setUser($user);
        $participation->setEvenement($event);
        $participation->setStatut('STATUT_INVALIDE');

        $manager = new ParticipationManager();
        $manager->validate($participation, []);
    }
}
