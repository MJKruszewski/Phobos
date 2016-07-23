<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 12:15
 */

namespace AppBundle\Entity\Repository;


class PlanetImagesDirectoryRepository extends AbstractRepository
{

    public function getAllImagesArrayForClimateType(int $climateTypeId)
    {
        $oQueryBuilder = $this->getEntityManager()->createQueryBuilder();

        $select = $oQueryBuilder->select('pid')->from($this->getTableName(), 'pid');
        $select->where('pid.climate_type = :climateType');
        $select->setParameter('climateType', $climateTypeId);

        return $select->getQuery()->getResult();
    }

}