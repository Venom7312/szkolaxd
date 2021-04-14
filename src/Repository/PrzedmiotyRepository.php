<?php

namespace App\Repository;

use App\Entity\Przedmioty;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Przedmioty|null find($id, $lockMode = null, $lockVersion = null)
 * @method Przedmioty|null findOneBy(array $criteria, array $orderBy = null)
 * @method Przedmioty[]    findAll()
 * @method Przedmioty[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PrzedmiotyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Przedmioty::class);
    }

    // /**
    //  * @return Przedmioty[] Returns an array of Przedmioty objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Przedmioty
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
