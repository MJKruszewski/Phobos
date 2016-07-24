<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:11
 */

namespace AppBundle\Library\Utilities\Resources;


use AppBundle\Entity\Planet;
use AppBundle\Entity\User;

class ResourceBuilder
{
    /**
     * @param ResourceAbstract $resourceAbstract
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public function build(ResourceAbstract $resourceAbstract, User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceAbstract->setUser($user);
        $resourceAbstract->setPlanet($planet);
        $resourceAbstract->setDateDiff($dateDiff);

        return $resourceAbstract;
    }
}