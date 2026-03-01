<?php

namespace App\Repository;

use App\Entity\ProduitComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProduitComment>
 */
class ProduitCommentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProduitComment::class);
    }

    /**
     * Find comments by product ID, ordered by newest first
     * @return ProduitComment[]
     */
    public function findByProduct(int $produitId): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.produit = :produitId')
            ->setParameter('produitId', $produitId)
            ->orderBy('c.createdAt', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Get average rating for a product
     */
    public function getAverageRating(int $produitId): ?float
    {
        $result = $this->createQueryBuilder('c')
            ->select('AVG(c.note) as avgRating')
            ->andWhere('c.produit = :produitId')
            ->setParameter('produitId', $produitId)
            ->getQuery()
            ->getOneOrNullResult();

        return $result['avgRating'] ?? null;
    }

    /**
     * Get comment count for a product
     */
    public function getCommentCount(int $produitId): int
    {
        return $this->createQueryBuilder('c')
            ->select('COUNT(c.id)')
            ->andWhere('c.produit = :produitId')
            ->setParameter('produitId', $produitId)
            ->getQuery()
            ->getSingleScalarResult();
    }
}
