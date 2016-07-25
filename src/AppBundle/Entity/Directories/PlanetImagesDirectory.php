<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 11:10
 */

namespace AppBundle\Entity\Directories;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="PlanetImagesDirectory")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\PlanetImagesDirectoryRepository")
 * */
class PlanetImagesDirectory extends DirectoryAbstract
{

    /**
     * @var string
     * @ORM\Column(name="path", type="string", length=255 )
     */
    private $path;

    /**
     * @var ClimateDirectory
     * @ORM\ManyToOne(targetEntity="ClimateDirectory")
     * @ORM\JoinColumn(name="climate_type", referencedColumnName="id")
     */
    private $climate_type;

    /**
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return ClimateDirectory
     */
    public function getClimateType() : ClimateDirectory
    {
        return $this->climate_type;
    }

    /**
     * @param ClimateDirectory $climate_type
     */
    public function setClimateType(ClimateDirectory $climate_type)
    {
        $this->climate_type = $climate_type;
    }


}