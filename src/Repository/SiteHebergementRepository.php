<?php

namespace App\Repository;

use App\Entity\SiteHebergement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SiteHebergement|null find($id, $lockMode = null, $lockVersion = null)
 * @method SiteHebergement|null findOneBy(array $criteria, array $orderBy = null)
 * @method SiteHebergement[]    findAll()
 * @method SiteHebergement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SiteHebergementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SiteHebergement::class);
    }

    // /**
    //  * @return SiteHebergement[] Returns an array of SiteHebergement objects
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
    public function findOneBySomeField($value): ?SiteHebergement
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
