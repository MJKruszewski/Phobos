<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:23
 */

namespace AppBundle\Library\Utilities\Buildings\Mines;

use AppBundle\Library\Utilities\Buildings\BuildingAbstract;
use AppBundle\Library\Utilities\Constants\BuildingsConstants;

class SiliconMine extends BuildingAbstract implements MinesInterface
{

    /**
     * @return int
     */
    public function getBaseMiningValue() : int
    {
        return BuildingsConstants::SILICON_MINE_BASE_VALUE * $this->getBuildingLevel();
    }
}