<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 16.10.16
 * Time: 13:38
 */

namespace AppBundle\Library\Utilities\Constants;


use AppBundle\Library\Utilities\Buildings\BuildingInterface;
use AppBundle\Library\Utilities\NotImplementedException;

/**
 * Class BuildingsConstants
 * @package AppBundle\Library\Utilities\Constants
 */
class BuildingsConstants
{
    const HELIUM_MINE_BASE_VALUE = 100;
    const FERRUM_MINE_BASE_VALUE = 100;
    const SILICON_MINE_BASE_VALUE = 100;
    const URANIUM_MINE_BASE_VALUE = 100;

    /**
     * @return BuildingInterface
     */
    public static function getBaseBuildingAbstraction() : BuildingInterface
    {
        return new class implements BuildingInterface
        {
            /**
             * @return int
             */
            public function getBuildingLevel() : int
            {
                return 1;
            }

            /**
             * @param int $mine_level
             * @throws NotImplementedException
             */
            public function setBuildingLevel(int $mine_level)
            {
                throw new NotImplementedException("setBuildingLevel is not implemented in anonymous class");
            }
        };
    }

}