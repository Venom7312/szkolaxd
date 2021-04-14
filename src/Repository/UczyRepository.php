<?php

namespace App\Repository;

use App\Entity\Uczy;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Uczy|null find($id, $lockMode = null, $lockVersion = null)
 * @method Uczy|null findOneBy(array $criteria, array $orderBy = null)
 * @method Uczy[]    findAll()
 * @method Uczy[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UczyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Uczy::class);
    }

    // /**
    //  * @return Uczy[] Returns an array of Uczy objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Uczy
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
