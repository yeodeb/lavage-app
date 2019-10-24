<?php

namespace App\Repository;

use App\Entity\LavagePrestation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method LavagePrestation|null find($id, $lockMode = null, $lockVersion = null)
 * @method LavagePrestation|null findOneBy(array $criteria, array $orderBy = null)
 * @method LavagePrestation[]    findAll()
 * @method LavagePrestation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LavagePrestationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LavagePrestation::class);
    }

    // /**
    //  * @return LavagePrestation[] Returns an array of LavagePrestation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?LavagePrestation
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
