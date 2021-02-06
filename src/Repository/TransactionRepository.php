<?php

namespace App\Repository;

use App\Entity\Transaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Transaction|null find($id, $lockMode = null, $lockVersion = null)
 * @method Transaction|null findOneBy(array $criteria, array $orderBy = null)
 * @method Transaction[]    findAll()
 * @method Transaction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    public function findFarmersByProduct(string $category)
    {
        $queryBuilder = $this->createQueryBuilder('transaction')
            ->select('farmer')
            ->join('App\Entity\Farmer', 'farmer', 'WITH', 'farmer.id = transaction.farmer')
            ->join('App\Entity\City', 'city', 'WITH', 'city.id = farmer.city')
            ->join('App\Entity\Product', 'product', 'WITH', 'product.id = transaction.product')
            ->join('App\Entity\Category', 'category', 'WITH', 'category.id = product.category')
            ->where('category.name = :category')
            ->setMaxResults(50)
            ->setParameter('category', $category)
            ->getQuery();

        return $queryBuilder->getResult();
    }
    // /**
    //  * @return Transaction[] Returns an array of Transaction objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Transaction
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
