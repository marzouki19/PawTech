<?php

namespace App\Repository;

use App\Entity\ObservationStation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ObservationStation>
 *
 * @method ObservationStation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ObservationStation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ObservationStation[]    findAll()
 * @method ObservationStation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ObservationStationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ObservationStation::class);
    }

    /**
     * @return ObservationStation[]
     */
    public function findAll(): array
    {
        return [];
    }
}
