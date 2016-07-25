<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 25.07.16
 * Time: 12:39
 */

namespace AppBundle\Entity\Directories;

use Doctrine\ORM\Mapping as ORM;

abstract class DirectoryAbstract
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="name", type="string", length=20 )
     */
    protected $name;

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