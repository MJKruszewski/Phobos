<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 17:37
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="ProjectProgress")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ProjectProgressRepository")
 * */
class ProjectProgress
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(name="progress_percentage", type="integer")
     */
    private $progress_percentage;
    /**
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

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
     * @return int
     */
    public function getProgressPercentage() : int
    {
        return $this->progress_percentage;
    }

    /**
     * @param int $progress_percentage
     */
    public function setProgressPercentage(int $progress_percentage)
    {
        $this->progress_percentage = $progress_percentage;
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

}