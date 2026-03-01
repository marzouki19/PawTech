<?php

namespace App\Repository;

use App\Entity\IpCamera;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IpCamera>
 */
class IpCameraRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IpCamera::class);
    }

    public function save(IpCamera $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(IpCamera $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);
        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * @return list<IpCamera>
     */
    public function findActiveCameras(): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.status = :status')
            ->setParameter('status', 'active')
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<IpCamera>
     */
    public function findByStationId(int $stationId): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.station = :stationId')
            ->setParameter('stationId', $stationId)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findOneByIpAddress(string $ipAddress): ?IpCamera
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.ipAddress = :ip')
            ->setParameter('ip', $ipAddress)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return list<IpCamera>
     */
    public function findByStatus(string $status): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.status = :status')
            ->setParameter('status', $status)
            ->orderBy('c.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @return list<array{status:string|null, count:numeric-string|int}>
     */
    public function countByStatus(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c.status, COUNT(c.id) as count')
            ->groupBy('c.status')
            ->getQuery()
            ->getResult();
    }
}
