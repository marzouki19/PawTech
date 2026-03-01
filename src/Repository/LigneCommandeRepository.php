<?php

namespace App\Repository;

use App\Entity\Produit;
use App\Entity\LigneCommande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LigneCommande>
 */
class LigneCommandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LigneCommande::class);
    }

    /**
     * Search order lines by product name or order id
     * @return LigneCommande[]
     */
    public function search(string $q): array
    {
        $qb = $this->createQueryBuilder('l')
            ->join('l.produit', 'p')
            ->leftJoin('l.commande', 'c')
            ->where('LOWER(p.nom) LIKE :q')
            ->setParameter('q', '%' . mb_strtolower($q) . '%')
            ->orderBy('l.id', 'DESC');

        // If the query is numeric, also search by commande id
        if (ctype_digit($q)) {
            $qb->orWhere('c.id = :cid')
               ->setParameter('cid', (int) $q);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Return order lines for a product, excluding orphan lines linked to missing orders.
     *
     * @return LigneCommande[]
     */
    public function findByProductWithExistingOrder(Produit $product): array
    {
        return $this->createQueryBuilder('l')
            ->innerJoin('l.commande', 'c')
            ->where('l.produit = :product')
            ->setParameter('product', $product)
            ->orderBy('l.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
