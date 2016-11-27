<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 16.10.16
 * Time: 15:08
 */

namespace AppBundle\Library\Utilities\Buildings\Mines;


use AppBundle\Library\Utilities\Buildings\BuildingInterface;

interface MinesInterface extends BuildingInterface
{
    /**
     * @return int
     */
    public function getBaseMiningValue() : int;
}