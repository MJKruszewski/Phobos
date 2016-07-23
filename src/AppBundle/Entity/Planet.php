<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:59
 */

namespace AppBundle\Entity;

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
     * @var Races
     * @ORM\ManyToOne(targetEntity="Races")
     * @ORM\JoinColumn(name="planet_dominant_race", referencedColumnName="id")
     */
    private $planet_dominant_race;

    /**
     * @var HappinessDirectory
     * @ORM\ManyToOne(targetEntity="HappinessDirectory")
     * @ORM\JoinColumn(name="happiness_level_id", referencedColumnName="id")
     */
    private $happiness_level_id;

    /**
     * @var ClimateDirectory
     * @ORM\ManyToOne(targetEntity="ClimateDirectory")
     * @ORM\JoinColumn(name="planet_climate", referencedColumnName="id")
     */
    private $planet_climate;

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
    public function getHappinessLevelId() : HappinessDirectory
    {
        return $this->happiness_level_id;
    }

    /**
     * @param HappinessDirectory $happiness_level_id
     */
    public function setHappinessLevelId(HappinessDirectory $happiness_level_id)
    {
        $this->happiness_level_id = $happiness_level_id;
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

}