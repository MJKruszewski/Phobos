<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 16:36
 */

namespace AppBundle\Entity\Repository;


class NewsRepository extends AbstractRepository
{
    const MAX_RESULTS_ON_PAGE = 5;

    public function getLastNews(int $numberOfPage) : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('n')->from($this->getTableName(), 'n');
        $select->orderBy('n.id');
        $select->setMaxResults(self::MAX_RESULTS_ON_PAGE);
        $select->setFirstResult($numberOfPage * self::MAX_RESULTS_ON_PAGE);

        return $select->getQuery()->getArrayResult();
    }

}