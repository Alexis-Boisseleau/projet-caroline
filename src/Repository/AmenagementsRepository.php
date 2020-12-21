<?php

namespace App\Repository;

use App\Entity\Amenagements;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Amenagements|null find($id, $lockMode = null, $lockVersion = null)
 * @method Amenagements|null findOneBy(array $criteria, array $orderBy = null)
 * @method Amenagements[]    findAll()
 * @method Amenagements[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AmenagementsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Amenagements::class);
    }




    /**
 
     *
     * @return Amenagements[]
     */
    public function findDesign(): array
    {

        return $this->createQueryBuilder('d')
            ->where('d.type = 0')
            ->getQuery()
            ->getResult();
    }


    /**
 
     *
     * @return Amenagements[]
     */
    public function findArchi(): array
    {

        return $this->createQueryBuilder('a')
            ->where('a.type = 1')
            ->getQuery()
            ->getResult();
    }



    // /**
    //  * @return Amenagements[] Returns an array of Amenagements objects
    //  */
    /*

    
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Amenagements
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
