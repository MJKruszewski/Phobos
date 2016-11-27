<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:59
 */

namespace AppBundle\Entity;

use AppBundle\Library\Utilities\Buildings\BuildingInterface;
use AppBundle\Library\Utilities\Buildings\Mines\FerrumMine;
use AppBundle\Library\Utilities\Buildings\Mines\HeliumMine;
use AppBundle\Library\Utilities\Buildings\Mines\MinesInterface;
use AppBundle\Library\Utilities\Buildings\Mines\SiliconMine;
use AppBundle\Library\Utilities\Buildings\Mines\UraniumMine;
use AppBundle\Library\Utilities\Directories\ClimateDirectory;
use AppBundle\Library\Utilities\Directories\HappinessDirectory;
use AppBundle\Library\Utilities\Directories\PlanetImagesDirectory;
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
     * @var int
     * @ORM\Column(name="happiness_level", columnDefinition="ENUM('1','2','3','4','5')")
     */
    private $happiness_level;

    /**
     * @var int
     * @ORM\Column(name="planet_climate", columnDefinition="ENUM('1','2','3','4','5','6','7','8')")
     */
    private $planet_climate;

    /**
     * @var int
     * @ORM\Column(name="planet_image", columnDefinition="ENUM('1','2','3','4')")
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
     * @var int
     * @ORM\Column(name="uranium_mine", type="integer")
     */
    private $uranium_mine;

    /**
     * @var int
     * @ORM\Column(name="ferrum_mine", type="integer")
     */
    private $ferrum_mine;

    /**
     * @var int
     * @ORM\Column(name="helium_mine", type="integer")
     */
    private $helium_mine;

    /**
     * @var int
     * @ORM\Column(name="silicon_mine", type="integer")
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
        $happinessDirectory = new HappinessDirectory();
        $happinessDirectory->prepareEntityByStrategy($this->happiness_level);
        return $happinessDirectory;
    }

    /**
     * @param HappinessDirectory $happiness_level
     */
    public function setHappinessLevel(HappinessDirectory $happiness_level)
    {
        $this->happiness_level = $happiness_level->getConstantRepresentation();
    }

    /**
     * @return PlanetImagesDirectory
     */
    public function getPlanetImage() : PlanetImagesDirectory
    {
        $planetImagesDirectory = new PlanetImagesDirectory($this->getPlanetClimate());
        $planetImagesDirectory->prepareEntityByStrategy($this->planet_image);
        return $planetImagesDirectory;
    }

    /**
     * @param PlanetImagesDirectory $planet_image
     */
    public function setPlanetImage(PlanetImagesDirectory $planet_image)
    {
        $this->planet_image = $planet_image->getConstantRepresentation();
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
        $climateDirectory = new ClimateDirectory();
        $climateDirectory->prepareEntityByStrategy($this->planet_climate);
        return $climateDirectory;
    }

    /**
     * @param ClimateDirectory $planet_climate
     */
    public function setPlanetClimate(ClimateDirectory $planet_climate)
    {
        $this->planet_climate = $planet_climate->getConstantRepresentation();
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
     * @return MinesInterface
     */
    public function getUraniumMine() : MinesInterface
    {
        $uraniumMine = new UraniumMine();
        $uraniumMine->setBuildingLevel($this->uranium_mine);
        return $uraniumMine;
    }

    /**
     * @param BuildingInterface $uranium_mine
     */
    public function setUraniumMine(BuildingInterface $uranium_mine)
    {
        $this->uranium_mine = $uranium_mine->getBuildingLevel();
    }

    /**
     * @return MinesInterface
     */
    public function getFerrumMine() : MinesInterface
    {
        $ferrumMine = new FerrumMine();
        $ferrumMine->setBuildingLevel($this->ferrum_mine);
        return $ferrumMine;
    }

    /**
     * @param BuildingInterface $ferrum_mine
     */
    public function setFerrumMine(BuildingInterface $ferrum_mine)
    {
        $this->ferrum_mine = $ferrum_mine->getBuildingLevel();
    }

    /**
     * @return MinesInterface
     */
    public function getHeliumMine() : MinesInterface
    {
        $heliumMine = new HeliumMine();
        $heliumMine->setBuildingLevel($this->helium_mine);
        return $heliumMine;
    }

    /**
     * @param BuildingInterface $helium_mine
     */
    public function setHeliumMine(BuildingInterface $helium_mine)
    {
        $this->helium_mine = $helium_mine->getBuildingLevel();
    }

    /**
     * @return MinesInterface
     */
    public function getSiliconMine() : MinesInterface
    {
        $siliconMine = new SiliconMine();
        $siliconMine->setBuildingLevel($this->silicon_mine);
        return $siliconMine;
    }

    /**
     * @param BuildingInterface $silicon_mine
     */
    public function setSiliconMine(BuildingInterface $silicon_mine)
    {
        $this->silicon_mine = $silicon_mine->getBuildingLevel();
    }

}