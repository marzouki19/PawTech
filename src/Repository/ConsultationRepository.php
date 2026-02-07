<?php

namespace App\Repository;

use App\Entity\Consultation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ConsultationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Consultation::class);
    }

    /**
     * Recherche les consultations par type OU par nom d'utilisateur
     */
    public function search(string $searchTerm): array
    {
        return $this->createQueryBuilder('c')
            ->leftJoin('c.user', 'u')
            ->where('c.type LIKE :searchTerm')
            ->orWhere('u.nom LIKE :searchTerm')
            ->orWhere('u.prenom LIKE :searchTerm')
            ->orWhere('CONCAT(u.prenom, \' \', u.nom) LIKE :searchTerm')
            ->orWhere('CONCAT(u.nom, \' \', u.prenom) LIKE :searchTerm')
            ->setParameter('searchTerm', '%' . $searchTerm . '%')
            ->orderBy('c.date', 'DESC')
            ->addOrderBy('c.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Retourne toutes les consultations ordonnées par date décroissante
     */
    public function findAllOrdered(): array
    {
        return $this->createQueryBuilder('c')
            ->orderBy('c.date', 'DESC')
            ->addOrderBy('c.id', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Compatible avec le workshop - recherche par type
     */
    public function findConsultationByType(string $type): array
    {
        return $this->createQueryBuilder('c')
            ->where('c.type LIKE :type')
            ->setParameter('type', '%' . $type . '%')
            ->orderBy('c.date', 'DESC')
            ->addOrderBy('c.id', 'DESC')
            ->getQuery()
            ->getResult();
    }
}