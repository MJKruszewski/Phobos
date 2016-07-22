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
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @param int $int
     */
    public function setId(int $int)
    {
        $this->id = $int;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

}
