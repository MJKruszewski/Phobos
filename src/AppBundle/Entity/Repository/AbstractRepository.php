<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:09
 */

namespace AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class AbstractRepository
 * @package AppBundle\Entity\Repository
 */
abstract class AbstractRepository extends EntityRepository
{

    const BUNDLE_NAME = 'AppBundle';

    /**
     * @return string
     */
    protected function getTableName() : string
    {
        return self::BUNDLE_NAME . ":" . $this->getClassMetadata()->getTableName();
    }

}