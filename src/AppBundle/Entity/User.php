<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 07.07.16
 * Time: 22:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\UserRepository")
 * */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="string", length=32, unique=true)
     */
    protected $id;

    /**
     * @param string $int
     */
    public function setId(string $int)
    {
        $this->id = $int;
    }

    /**
     * @return string
     */
    public function getId() : string
    {
        return $this->id;
    }

}
