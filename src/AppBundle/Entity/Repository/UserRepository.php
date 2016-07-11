<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 17:56
 */

namespace AppBundle\Entity\Repository;

class UserRepository extends AbstractRepository
{
    public function findAllOrderedByName() : array
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('u')->from($this->getTableName(), 'u');
        $select->where('u.id > :userId');
        $select->setParameter('userId', 1);

        return $select->getQuery()->getArrayResult();
    }
}