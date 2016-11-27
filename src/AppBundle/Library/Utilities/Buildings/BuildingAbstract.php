<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 25.07.16
 * Time: 12:45
 */

namespace AppBundle\Library\Utilities\Buildings;

abstract class BuildingAbstract implements BuildingInterface
{

    /**
     * @var todo
     */
    protected $building_type;

    /**
     * @var int
     */
    protected $building_level;

    /**
     * @return string
     */
    public function getBuildingType() : string
    {
        return $this->building_type;
    }

    /**
     * @param string $building_type
     */
    public function setBuildingType(string $building_type)
    {
        $this->building_type = $building_type;
    }

    /**
     * @return int
     */
    public function getBuildingLevel() : int
    {
        return $this->building_level;
    }

    /**
     * @param int $mine_level
     */
    public function setBuildingLevel(int $mine_level)
    {
        $this->building_level = $mine_level;
    }
}