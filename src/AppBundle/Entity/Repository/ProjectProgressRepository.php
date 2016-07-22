<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 17:41
 */

namespace AppBundle\Entity\Repository;


class ProjectProgressRepository extends AbstractRepository
{
    /**
     * @return array
     */
    public function findAllToArray() : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();
        
        $select = $oQueryBuilder->select('pp')->from($this->getTableName(), 'pp');

        return $select->getQuery()->getArrayResult();
    }
}