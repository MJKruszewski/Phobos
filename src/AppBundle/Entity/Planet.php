<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:59
 */

namespace AppBundle\Entity;

use AppBundle\Entity\Buildings\FerrumMine;
use AppBundle\Entity\Buildings\HeliumMine;
use AppBundle\Entity\Buildings\SiliconMine;
use AppBundle\Entity\Buildings\UraniumMine;
use AppBundle\Entity\Directories\ClimateDirectory;
use AppBundle\Entity\Directories\HappinessDirectory;
use AppBundle\Entity\Directories\PlanetImagesDirectory;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Planet")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PlanetRepository")
 * */
class Planet
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner_id;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="first_owner_id", referencedColumnName="id")
     */
    private $first_owner_id;

    /**
     * @var int
     * @ORM\Column(name="size_of_planet", type="integer")
     */
    private $size_of_planet;

    /**
     * @var int
     * @ORM\Column(name="uranium", type="bigint", length=18)
     */
    private $uranium;

    /**
     * @var int
     * @ORM\Column(name="ferrum", type="bigint", length=18)
     */
    private $ferrum;

    /**
     * @var int
     * @ORM\Column(name="silicon", type="bigint", length=18)
     */
    private $silicon;

    /**
     * @var int
     * @ORM\Column(name="helium", type="bigint", length=18)
     */
    private $helium;

    /**
     * @var bool
     * @ORM\Column(name="is_capital", type="boolean")
     */
    private $is_capital;

    /**
     * @var Races
     * @ORM\ManyToOne(targetEntity="Races")
     * @ORM\JoinColumn(name="planet_dominant_race", referencedColumnName="id")
     */
    private $planet_dominant_race;

    /**
     * @var HappinessDirectory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Directories\HappinessDirectory")
     * @ORM\JoinColumn(name="happiness_level", referencedColumnName="id")
     */
    private $happiness_level;

    /**
     * @var ClimateDirectory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Directories\ClimateDirectory")
     * @ORM\JoinColumn(name="planet_climate", referencedColumnName="id")
     */
    private $planet_climate;

    /**
     * @var PlanetImagesDirectory
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Directories\PlanetImagesDirectory")
     * @ORM\JoinColumn(name="planet_image", referencedColumnName="id")
     */
    private $planet_image;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=20 )
     */
    private $name;

    /**
     * @var \DateTime
     * @ORM\Column(name="date_add", type="date")
     */
    private $date_add;

    /**
     * @var \DateTime
     * @ORM\Column(name="last_actualisation", type="datetime")
     */
    private $last_actualisation;

    /**
     * @var UraniumMine
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Buildings\UraniumMine")
     * @ORM\JoinColumn(name="uranium_mine", referencedColumnName="id")
     */
    private $uranium_mine;

    /**
     * @var Buildings\FerrumMine
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Buildings\FerrumMine")
     * @ORM\JoinColumn(name="ferrum_mine", referencedColumnName="id")
     */
    private $ferrum_mine;

    /**
     * @var HeliumMine
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Buildings\HeliumMine")
     * @ORM\JoinColumn(name="helium_mine", referencedColumnName="id")
     */
    private $helium_mine;

    /**
     * @var SiliconMine
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Buildings\SiliconMine")
     * @ORM\JoinColumn(name="silicon_mine", referencedColumnName="id")
     */
    private $silicon_mine;

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
     * @return User
     */
    public function getOwnerId() : User
    {
        return $this->owner_id;
    }

    /**
     * @param User $owner_id
     */
    public function setOwnerId(User $owner_id)
    {
        $this->owner_id = $owner_id;
    }

    /**
     * @return User
     */
    public function getFirstOwnerId() : User
    {
        return $this->first_owner_id;
    }

    /**
     * @param User $first_owner_id
     */
    public function setFirstOwnerId(User $first_owner_id)
    {
        $this->first_owner_id = $first_owner_id;
    }

    /**
     * @return int
     */
    public function getSizeOfPlanet() : int
    {
        return $this->size_of_planet;
    }

    /**
     * @param int $size_of_planet
     */
    public function setSizeOfPlanet(int $size_of_planet)
    {
        $this->size_of_planet = $size_of_planet;
    }

    /**
     * @return Races
     */
    public function getPlanetDominantRace() : Races
    {
        return $this->planet_dominant_race;
    }

    /**
     * @param Races $planet_dominant_race
     */
    public function setPlanetDominantRace(Races $planet_dominant_race)
    {
        $this->planet_dominant_race = $planet_dominant_race;
    }

    /**
     * @return HappinessDirectory
     */
    public function getHappinessLevel() : HappinessDirectory
    {
        return $this->happiness_level;
    }

    /**
     * @param HappinessDirectory $happiness_level
     */
    public function setHappinessLevel(HappinessDirectory $happiness_level)
    {
        $this->happiness_level = $happiness_level;
    }

    /**
     * @return PlanetImagesDirectory
     */
    public function getPlanetImage() : PlanetImagesDirectory
    {
        return $this->planet_image;
    }

    /**
     * @param PlanetImagesDirectory $planet_image
     */
    public function setPlanetImage(PlanetImagesDirectory $planet_image)
    {
        $this->planet_image = $planet_image;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdd() : \DateTime
    {
        return $this->date_add;
    }

    /**
     * @param \DateTime $date_add
     */
    public function setDateAdd(\DateTime $date_add)
    {
        $this->date_add = $date_add;
    }

    /**
     * @return ClimateDirectory
     */
    public function getPlanetClimate() : ClimateDirectory
    {
        return $this->planet_climate;
    }

    /**
     * @param ClimateDirectory $planet_climate
     */
    public function setPlanetClimate(ClimateDirectory $planet_climate)
    {
        $this->planet_climate = $planet_climate;
    }

    /**
     * @return bool
     */
    public function getIsCapital() : bool
    {
        return $this->is_capital;
    }

    /**
     * @param bool $is_capital
     */
    public function setIsCapital(bool $is_capital)
    {
        $this->is_capital = $is_capital;
    }

    /**
     * @return int
     */
    public function getUranium() : int
    {
        return $this->uranium;
    }

    /**
     * @param int $uranium
     */
    public function setUranium(int $uranium)
    {
        $this->uranium = $uranium;
    }

    /**
     * @return int
     */
    public function getFerrum() : int
    {
        return $this->ferrum;
    }

    /**
     * @param int $ferrum
     */
    public function setFerrum(int $ferrum)
    {
        $this->ferrum = $ferrum;
    }

    /**
     * @return int
     */
    public function getSilicon() : int
    {
        return $this->silicon;
    }

    /**
     * @param int $silicon
     */
    public function setSilicon(int $silicon)
    {
        $this->silicon = $silicon;
    }

    /**
     * @return int
     */
    public function getHelium() : int
    {
        return $this->helium;
    }

    /**
     * @param int $helium
     */
    public function setHelium(int $helium)
    {
        $this->helium = $helium;
    }

    /**
     * @return \DateTime
     */
    public function getLastActualisation() : \DateTime
    {
        return $this->last_actualisation;
    }

    /**
     * @param \DateTime $last_actualisation
     */
    public function setLastActualisation(\DateTime $last_actualisation)
    {
        $this->last_actualisation = $last_actualisation;
    }

    /**
     * @return UraniumMine
     */
    public function getUraniumMine() : UraniumMine
    {
        return $this->uranium_mine;
    }

    /**
     * @param UraniumMine $uranium_mine
     */
    public function setUraniumMine(UraniumMine $uranium_mine)
    {
        $this->uranium_mine = $uranium_mine;
    }

    /**
     * @return FerrumMine
     */
    public function getFerrumMine() : FerrumMine
    {
        return $this->ferrum_mine;
    }

    /**
     * @param FerrumMine $ferrum_mine
     */
    public function setFerrumMine(FerrumMine $ferrum_mine)
    {
        $this->ferrum_mine = $ferrum_mine;
    }

    /**
     * @return HeliumMine
     */
    public function getHeliumMine() : HeliumMine
    {
        return $this->helium_mine;
    }

    /**
     * @param HeliumMine $helium_mine
     */
    public function setHeliumMine(HeliumMine $helium_mine)
    {
        $this->helium_mine = $helium_mine;
    }

    /**
     * @return SiliconMine
     */
    public function getSiliconMine() : SiliconMine
    {
        return $this->silicon_mine;
    }

    /**
     * @param SiliconMine $silicon_mine
     */
    public function setSiliconMine(SiliconMine $silicon_mine)
    {
        $this->silicon_mine = $silicon_mine;
    }

}