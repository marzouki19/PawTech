<?php

namespace App\Repository;

use App\Entity\DemandForecast;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DemandForecast>
 *
 * @method DemandForecast|null find($id, $lockMode = null, $lockVersion = null)
 * @method DemandForecast|null findOneBy(array $criteria, array $orderBy = null)
 * @method DemandForecast[]    findAll()
 * @method DemandForecast[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DemandForecastRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DemandForecast::class);
    }

    /**
     * Find high demand products based on predicted demand
     */
    public function findHighDemandProducts(int $limit = 10): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.predictedDemand', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * Find products with rising trend
     */
    public function findRisingTrendProducts(): array
    {
        return $this->createQueryBuilder('d')
            ->where('d.trend = :trend')
            ->setParameter('trend', 'rising')
            ->orderBy('d.growthRate', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
