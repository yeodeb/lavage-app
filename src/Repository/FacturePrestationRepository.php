<?php

namespace App\Repository;

use App\Entity\FacturePrestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method FacturePrestation|null find($id, $lockMode = null, $lockVersion = null)
 * @method FacturePrestation|null findOneBy(array $criteria, array $orderBy = null)
 * @method FacturePrestation[]    findAll()
 * @method FacturePrestation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FacturePrestationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FacturePrestation::class);
    }

    // /**
    //  * @return FacturePrestation[] Returns an array of FacturePrestation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FacturePrestation
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
