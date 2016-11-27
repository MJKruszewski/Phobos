<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 13.11.16
 * Time: 16:48
 */

namespace AppBundle\Library\Utilities\Buildings;


interface BuildingInterface
{
    /**
     * @return int
     */
    public function getBuildingLevel() : int;

    /**
     * @param int $mine_level
     */
    public function setBuildingLevel(int $mine_level);
}