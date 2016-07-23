<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 21:14
 */

namespace AppBundle\Entity\Repository;


class RacesRepository extends AbstractRepository
{
    /**
     * @return array
     */
    public function findAllMainRacesToArray() : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('r')->from($this->getTableName(), 'r');
        $select->where('r.is_main = 1');

        return $select->getQuery()->getArrayResult();
    }
}