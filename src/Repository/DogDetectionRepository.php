<?php

namespace App\Repository;

use App\Entity\DogDetection;
use App\Entity\IpCamera;
use App\Entity\ObservationStation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DogDetection>
 */
class DogDetectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DogDetection::class);
    }

    public function save(DogDetection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DogDetection $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return list<DogDetection>
     */
    public function findRecentDetections(int $limit = 50): array
    {
        return $this->createQueryBuilder('d')
            ->orderBy('d.detectedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<DogDetection>
     */
    public function findByCamera(IpCamera $camera, int $limit = 50): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.camera = :camera')
            ->setParameter('camera', $camera)
            ->orderBy('d.detectedAt', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<DogDetection>
     */
    public function findHealthAlerts(): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.healthCondition IS NOT NULL')
            ->andWhere('d.severity IN (:severities)')
            ->setParameter('severities', ['serious', 'critical'])
            ->orderBy('d.detectedAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<array{behaviorType:string|null, count:numeric-string|int}>
     */
    public function countByBehaviorType(): array
    {
        return $this->createQueryBuilder('d')
            ->select('d.behaviorType, COUNT(d.id) as count')
            ->groupBy('d.behaviorType')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<array{healthCondition:string|null, count:numeric-string|int}>
     */
    public function countByHealthCondition(): array
    {
        return $this->createQueryBuilder('d')
            ->select('d.healthCondition, COUNT(d.id) as count')
            ->andWhere('d.healthCondition IS NOT NULL')
            ->groupBy('d.healthCondition')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<DogDetection>
     */
    public function findByDateRange(\DateTime $startDate, \DateTime $endDate): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.detectedAt >= :startDate')
            ->andWhere('d.detectedAt <= :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->orderBy('d.detectedAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countByDateRange(\DateTime $startDate, \DateTime $endDate): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->andWhere('d.detectedAt >= :startDate')
            ->andWhere('d.detectedAt <= :endDate')
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return list<DogDetection>
     */
    public function findSeriousDetections(): array
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.severity IN (:severities)')
            ->setParameter('severities', ['serious', 'critical'])
            ->orderBy('d.detectedAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    public function countTodayDetections(): int
    {
        $today = new \DateTime();
        $today->setTime(0, 0, 0);
        
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->andWhere('d.detectedAt >= :today')
            ->setParameter('today', $today)
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function countByStation(ObservationStation $station): int
    {
        return (int) $this->createQueryBuilder('d')
            ->select('COUNT(d.id)')
            ->innerJoin('d.camera', 'c')
            ->andWhere('c.station = :station')
            ->setParameter('station', $station)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
