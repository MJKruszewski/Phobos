<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 25.07.16
 * Time: 12:45
 */

namespace AppBundle\Entity\Buildings;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Directories\BuildingsDirectory;

class BuildingAbstract
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var BuildingsDirectory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Directories\BuildingsDirectory")
     * @ORM\JoinColumn(name="building_type", referencedColumnName="id")
     */
    protected $building_type;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return BuildingsDirectory
     */
    public function getBuildingType() : BuildingsDirectory
    {
        return $this->building_type;
    }

    /**
     * @param BuildingsDirectory $building_type
     */
    public function setBuildingType(BuildingsDirectory $building_type)
    {
        $this->building_type = $building_type;
    }
}