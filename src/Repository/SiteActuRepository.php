<?php

namespace App\Repository;

use App\Entity\SiteActu;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SiteActu|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteActu|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteActu[]    findAll()
 * @method SiteActu[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteActuRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteActu::class);
    }

    // /**
    //  * @return SiteActu[] Returns an array of SiteActu objects
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
    public function findOneBySomeField($value): ?SiteActu
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
