<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 07.07.16
 * Time: 22:54
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="User")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\UserRepository")
 * */
class User
{

    /** @ORM\Column(type="integer", length=1) */
    protected $status;

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="string", length=32, unique=true)
     */
    protected $id;

    /** @ORM\Column(type="string", length=20, unique=true) */
    protected $login;

    /** @ORM\Column(type="string", length=20, unique=true) */
    protected $email;

    /** @ORM\Column(type="string") */
    protected $password;

    /** @ORM\Column(type="datetime") */
    protected $date_add;

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

    /**
     * @param int $int
     */
    public function setStatus(int $int)
    {
        $this->status = $int;
    }

    /**
     * @return int
     */
    public function getStatus() : int
    {
        return $this->status;
    }

    /**
     * @param string $login
     */
    public function setLogin(string $login)
    {
        $this->login = $login;
    }

    /**
     * @return String
     */
    public function getLogin() : string
    {
        return $this->login;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password)
    {
        $this->password = md5($password);
    }

    /**
     * @return string
     */
    public function getPassword() : string
    {
        return $this->password;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }

    /**
     * @param \DateTime $dateTime
     */
    public function setDateAdd(\DateTime $dateTime)
    {
        $this->date_add = $dateTime;
    }

    /**
     * @return string
     */
    public function getDateAdd() : string
    {
        return $this->date_add;
    }


}
