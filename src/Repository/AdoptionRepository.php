<?php

namespace App\Repository;

use App\Entity\Adoption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Adoption>
 */
class AdoptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Adoption::class);
    }

    /**
     * @return Adoption[]
     */
    public function searchAdoptions(string $query): array
    {
        return $this->createQueryBuilder('a')
            ->leftJoin('a.user', 'u')
            ->leftJoin('a.dog', 'd')
            ->where('LOWER(u.nom) LIKE :q')
            ->orWhere('LOWER(u.prenom) LIKE :q')
            ->orWhere('LOWER(u.email) LIKE :q')
            ->orWhere('LOWER(d.name) LIKE :q')
            ->orWhere('LOWER(a.housingType) LIKE :q')
            ->setParameter('q', '%'.mb_strtolower($query).'%')
            ->orderBy('a.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
