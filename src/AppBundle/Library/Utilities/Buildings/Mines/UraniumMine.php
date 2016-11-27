<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:37
 */

namespace AppBundle\Library\Utilities\Buildings\Mines;

use AppBundle\Library\Utilities\Buildings\BuildingAbstract;
use AppBundle\Library\Utilities\Constants\BuildingsConstants;

class UraniumMine extends BuildingAbstract implements MinesInterface
{
    /**
     * @return int
     */
    public function getBaseMiningValue() : int
    {
        return BuildingsConstants::URANIUM_MINE_BASE_VALUE * $this->getBuildingLevel();
    }
}