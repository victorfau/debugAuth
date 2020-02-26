<?php

namespace App\Repository;

use App\Entity\SiteAccueil;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SiteAccueil|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteAccueil|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteAccueil[]    findAll()
 * @method SiteAccueil[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteAccueilRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteAccueil::class);
    }

    // /**
    //  * @return SiteAccueil[] Returns an array of SiteAccueil objects
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
    public function findOneBySomeField($value): ?SiteAccueil
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
