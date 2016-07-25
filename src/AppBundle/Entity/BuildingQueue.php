<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 25.07.16
 * Time: 12:34
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Directories\BuildingsDirectory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="BuildingQueue")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PlanetRepository")
 * */
class BuildingQueue
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var Planet
     * @ORM\ManyToOne(targetEntity="Planet")
     * @ORM\JoinColumn(name="planet", referencedColumnName="id")
     */
    private $planet;

    /**
     * @var BuildingsDirectory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Directories\BuildingsDirectory")
     * @ORM\JoinColumn(name="building_type", referencedColumnName="id")
     */
    private $building_type;
    /**
     * @var bool
     * @ORM\Column(name="is_completed", type="boolean")
     */
    private $is_completed;
    /**
     * @var int
     * @ORM\Column(name="from_level", type="integer")
     */
    private $from_level;
    /**
     * @var int
     * @ORM\Column(name="to_level", type="integer")
     */
    private $to_level;
    /**
     * @var \DateTime
     * @ORM\Column(name="date_start", type="datetime")
     */
    private $date_start;
    /**
     * @var \DateTime
     * @ORM\Column(name="date_end", type="datetime")
     */
    private $date_end;

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
     * @return Planet
     */
    public function getPlanet() : Planet
    {
        return $this->planet;
    }

    /**
     * @param Planet $planet
     */
    public function setPlanet(Planet $planet)
    {
        $this->planet = $planet;
    }

    /**
     * @return boolean
     */
    public function isIsCompleted() : bool
    {
        return $this->is_completed;
    }

    /**
     * @param boolean $is_completed
     */
    public function setIsCompleted(bool $is_completed)
    {
        $this->is_completed = $is_completed;
    }

    /**
     * @return int
     */
    public function getFromLevel() : int
    {
        return $this->from_level;
    }

    /**
     * @param int $from_level
     */
    public function setFromLevel(int $from_level)
    {
        $this->from_level = $from_level;
    }

    /**
     * @return int
     */
    public function getToLevel() : int
    {
        return $this->to_level;
    }

    /**
     * @param int $to_level
     */
    public function setToLevel(int $to_level)
    {
        $this->to_level = $to_level;
    }

    /**
     * @return \DateTime
     */
    public function getDateStart() : \DateTime
    {
        return $this->date_start;
    }

    /**
     * @param \DateTime $date_start
     */
    public function setDateStart(\DateTime $date_start)
    {
        $this->date_start = $date_start;
    }

    /**
     * @return \DateTime
     */
    public function getDateEnd() : \DateTime
    {
        return $this->date_end;
    }

    /**
     * @param \DateTime $date_end
     */
    public function setDateEnd(\DateTime $date_end)
    {
        $this->date_end = $date_end;
    }


}