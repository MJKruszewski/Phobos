<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:02
 */

namespace AppBundle\Library\Utilities\Resources;


use AppBundle\Entity\Planet;
use AppBundle\Entity\User;

abstract class ResourceAbstract implements ResourceInterface
{
    /**
     * @var Planet
     */
    private $planet;
    /**
     * @var User
     */
    private $user;
    /**
     * @var int
     */
    private $dateDiff;

    public abstract function calculateResource() : int;

    /**
     * @return Planet
     */
    public function getPlanet() : Planet
    {
        return $this->planet;
    }

    /**
     * @return User
     */
    public function getUser() : User
    {
        return $this->user;
    }

    /**
     * @param Planet $planet
     */
    public function setPlanet(Planet $planet)
    {
        $this->planet = $planet;
    }

    /**
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return int
     */
    public function getDateDiff() : int
    {
        return $this->dateDiff;
    }

    /**
     * @param int $dateDiff
     */
    public function setDateDiff(int $dateDiff)
    {
        $this->dateDiff = $dateDiff;
    }

}