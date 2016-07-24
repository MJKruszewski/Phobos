<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:11
 */

namespace AppBundle\Library\Utilities\Resources\Locator;


use AppBundle\Entity\Planet;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Resources\Credits;
use AppBundle\Library\Utilities\Resources\Ferrum;
use AppBundle\Library\Utilities\Resources\Helium;
use AppBundle\Library\Utilities\Resources\ResourceBuilder;
use AppBundle\Library\Utilities\Resources\ResourceInterface;
use AppBundle\Library\Utilities\Resources\Silicon;
use AppBundle\Library\Utilities\Resources\Uranium;

class Factory
{
    /**
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public static function creditsResource(User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceBuilder = new ResourceBuilder();
        return $resourceBuilder->build(new Credits(), $user, $planet, $dateDiff);
    }

    /**
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public static function uraniumResource(User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceBuilder = new ResourceBuilder();
        return $resourceBuilder->build(new Uranium(), $user, $planet, $dateDiff);
    }

    /**
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public static function ferrumResource(User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceBuilder = new ResourceBuilder();
        return $resourceBuilder->build(new Ferrum(), $user, $planet, $dateDiff);
    }

    /**
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public static function siliconResource(User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceBuilder = new ResourceBuilder();
        return $resourceBuilder->build(new Silicon(), $user, $planet, $dateDiff);
    }

    /**
     * @param User $user
     * @param Planet $planet
     * @param int $dateDiff
     * @return ResourceInterface
     */
    public static function heliumResource(User $user, Planet $planet, int $dateDiff) : ResourceInterface
    {
        $resourceBuilder = new ResourceBuilder();
        return $resourceBuilder->build(new Helium(), $user, $planet, $dateDiff);
    }


}