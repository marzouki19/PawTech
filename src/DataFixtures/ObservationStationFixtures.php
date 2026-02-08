<?php

namespace App\DataFixtures;

use App\Entity\Alert;
use App\Entity\ObservationStation;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ObservationStationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $statuses = ['active', 'inactive', 'maintenance'];

        $stations = [];
        for ($i = 0; $i < 15; $i++) {
            $station = new ObservationStation();
            $station->setCode($faker->unique()->numerify('######'));
            $station->setZone($faker->randomElement(['djerba_Nord', 'djerba_Sud', 'houmt_Souk', 'midoun_Nord']));
            $station->setLocalisation($faker->latitude() . ', ' . $faker->longitude());
            $station->setStatut($faker->randomElement($statuses));
            $manager->persist($station);
            $stations[] = $station;
        }

        $manager->flush();

        $userId = null;
        if (method_exists($manager, 'getConnection')) {
            $userId = $manager->getConnection()->fetchOne('SELECT id FROM user ORDER BY id ASC LIMIT 1');
        }

        if ($userId) {
            foreach ($stations as $station) {
                if ($station->getStatut() !== 'inactive') {
                    continue;
                }

                $alert = (new Alert())
                    ->setType('TECHNICAL')
                    ->setMessage(sprintf('Station %s is inactive', $station->getCode()))
                    ->setPrioritee(1)
                    ->setStatut('unread')
                    ->setDate(new DateTime())
                    ->setUserId((int) $userId)
                    ->setStation($station);

                $manager->persist($alert);
            }

            $manager->flush();
        }
    }
}
