<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:10
 */

namespace AppBundle\Entity\Buildings;

use Doctrine\ORM\Mapping as ORM;

abstract class MinesAbstract extends BuildingAbstract
{

    /**
     * @var int
     * @ORM\Column(name="mine_level", type="integer")
     */
    protected $mine_level;

    /**
     * @var int
     * @ORM\Column(name="base_value", type="integer")
     */
    protected $base_value;

    /**
     * @return int
     */
    public function getBaseValue() : int
    {
        return $this->base_value;
    }

    /**
     * @param int $base_value
     */
    public function setBaseValue(int $base_value)
    {
        $this->base_value = $base_value;
    }

    /**
     * @return int
     */
    public function getMineLevel() : int
    {
        return $this->mine_level;
    }

    /**
     * @param int $mine_level
     */
    public function setMineLevel(int $mine_level)
    {
        $this->mine_level = $mine_level;
    }
}