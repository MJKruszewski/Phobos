<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:59
 */

namespace AppBundle\Entity\Repository;


use AppBundle\Entity\Planet;

class PlanetRepository extends AbstractRepository
{
    /**
     * @param int $userId
     * @return array
     */
    public function findAllToArrayByOwnerId(int $userId) : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('p')->from($this->getTableName(), 'p');
        $select->where('p.owner_id = :userId');
        $select->setParameter('userId', $userId);

        return $select->getQuery()->getArrayResult();
    }

    public function getActiveUserPlanet(int $planetId, int $userId)
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('p')->from($this->getTableName(), 'p');
        $select->where('p.id = :planetId');
        $select->setParameter('planetId', $planetId);
        $select->andWhere('p.owner_id = :userId');
        $select->setParameter('userId', $userId);
        $select->setMaxResults(1);

        return $select->getQuery()->getResult()[0];
    }

    /**
     * @param int $userId
     * @return Planet
     */
    public function getActiveUserCapitalPlanet(int $userId) : Planet
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('p')->from($this->getTableName(), 'p');
        $select->andWhere('p.owner_id = :userId');
        $select->andWhere('p.is_capital = :is_capital');
        $select->setParameter('userId', $userId);
        $select->setParameter('is_capital', true);
        $select->setMaxResults(1);

        return $select->getQuery()->getResult()[0];
    }
}