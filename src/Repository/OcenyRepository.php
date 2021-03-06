<?php

namespace App\Repository;

use App\Entity\Oceny;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Oceny|null find($id, $lockMode = null, $lockVersion = null)
 * @method Oceny|null findOneBy(array $criteria, array $orderBy = null)
 * @method Oceny[]    findAll()
 * @method Oceny[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OcenyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Oceny::class);
    }

    // /**
    //  * @return Oceny[] Returns an array of Oceny objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Oceny
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
