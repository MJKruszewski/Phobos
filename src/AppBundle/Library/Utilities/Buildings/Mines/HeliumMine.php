<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:10
 */

namespace AppBundle\Library\Utilities\Buildings\Mines;

use AppBundle\Library\Utilities\Buildings\BuildingAbstract;
use AppBundle\Library\Utilities\Constants\BuildingsConstants;

/**
 * Class HeliumMine
 * @package AppBundle\Library\Utilities\Buildings\Mines
 */
class HeliumMine extends BuildingAbstract implements MinesInterface
{
    /**
     * @return int
     */
    public function getBaseMiningValue() : int
    {
        return BuildingsConstants::HELIUM_MINE_BASE_VALUE * $this->getBuildingLevel();
    }
}