<?php
// src/OC/PlatformBundle/Repository/AdvertRepository.php

namespace OC\PlatformBundle\Repository;

use Datetime;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository
{
    public function getAdverts($page, $nbPerPage)
    {
        $query = $this->createQueryBuilder('a')
            ->leftJoin('a.image', 'i')
            ->addSelect('i')
            ->leftJoin('a.categories', 'c')
            ->addSelect('c')
            ->orderBy('a.date', 'DESC')
            ->getQuery();
        $query->setFirstResult(($page - 1) * $nbPerPage)->setMaxResults($nbPerPage);
        return new Paginator($query, true);
    }

    public function myFindAll()
    {
        $queryBuilder = $this->_em
            ->createQueryBuilder()
            ->select('a')
            ->from($this->_entityName, 'a');
        $queryBuilder = $this->createQueryBuilder('a');
        $query = $queryBuilder->getQuery();
        $results = $query->getResult();
        return $results;
    }

    public function myFind()
    {
        $qb = $this->createQueryBuilder('a');
        $qb->where('a.author = :author')->setParameter('author', 'Marine');
        $this->whereCurrentYear($qb);
        $qb->orderBy('a.date', 'DESC');

        return $qb->getQuery()->getResult();
    }

    public function getAdvertWithCategories(array $categoryNames)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->innerJoin('a.categories', 'c')->addSelect('c');
        $qb->where($qb->expr()->in('c.name', $categoryNames));
        return $qb->getQuery()->getResult();
    }

    protected function whereCurrentYear(QueryBuilder $qb)
    {
        $qb->andWhere('a.date BETWEEN :start AND :end')
            ->setParameter('start', new Datetime(date('Y') . '-01-01'))
            ->setParameter('end', new Datetime(date('Y') . '-12-31'));
    }

    public function myFindDays($days)
    {
        $qb = $this->createQueryBuilder('a');
        $qb->delete();
        $qb->where('a.date BETWEEN :start AND :end')
            ->setParameter('start', $days)
            ->setParameter('end', new Datetime(date('Y-m-d 00:00:01')));
        $qb->andWhere('a.applications is empty')
        ;
        return $qb->getQuery()->getResult();
    }
}
