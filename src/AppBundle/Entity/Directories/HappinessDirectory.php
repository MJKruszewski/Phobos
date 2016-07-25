<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 20:15
 */

namespace AppBundle\Entity\Directories;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="HappinessDirectory")
 * */
class HappinessDirectory extends DirectoryAbstract
{

    /**
     * @var int
     * @ORM\Column(name="level", type="integer" )
     */
    private $level;

    /**
     * @return int
     */
    public function getLevel() : int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
        $this->level = $level;
    }

}