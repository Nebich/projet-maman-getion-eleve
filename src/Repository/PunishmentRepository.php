<?php

namespace App\Repository;

use App\Entity\Punishment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Punishment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Punishment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Punishment[]    findAll()
 * @method Punishment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PunishmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Punishment::class);
    }

    // /**
    //  * @return Punishment[] Returns an array of Punishment objects
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
    public function findOneBySomeField($value): ?Punishment
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
