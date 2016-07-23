<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:59
 */

namespace AppBundle\Entity\Repository;


class PlanetRepository extends AbstractRepository
{
    /**
     * @param int $userId
     * @return array
     */
    public function findAllByOwnerId(int $userId) : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('p')->from($this->getTableName(), 'p');
        $select->where('p.owner_id = :userId');
        $select->setParameter('userId', $userId);
        
        return $select->getQuery()->getArrayResult();
    }
}