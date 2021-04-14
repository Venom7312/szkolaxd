<?php

namespace App\Repository;

use App\Entity\SkalaOcen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SkalaOcen|null find($id, $lockMode = null, $lockVersion = null)
 * @method SkalaOcen|null findOneBy(array $criteria, array $orderBy = null)
 * @method SkalaOcen[]    findAll()
 * @method SkalaOcen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkalaOcenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SkalaOcen::class);
    }

    // /**
    //  * @return SkalaOcen[] Returns an array of SkalaOcen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SkalaOcen
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
