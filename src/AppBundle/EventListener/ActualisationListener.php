<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 18:43
 */

namespace AppBundle\EventListener;

use AppBundle\Controller\ActualisationInterface;
use AppBundle\Entity\Planet;
use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Date;
use AppBundle\Library\Utilities\Resources\Locator\Factory;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ActualisationListener
{
    /**
     * @var Session
     */
    private $session;
    /**
     * @var TokenStorageInterface
     */
    private $tokenStorage;
    /**
     * @var Doctrine
     */
    private $doctrine;

    public function __construct(Session $session, TokenStorageInterface $tokenStorage, Doctrine $doctrine)
    {
        $this->session = $session;
        $this->tokenStorage = $tokenStorage;
        $this->doctrine = $doctrine;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        $controller = $event->getController();

        if (!is_array($controller)) {
            return;
        }

        if ($controller[0] instanceof ActualisationInterface && $this->getUser() instanceof User) {

            $dateNow = Date::getDateTime();
            $userPlanets = $this->getPlanetRepository()->findAllToArrayOfObjectsByOwnerId($this->getUser()->getId());

            try {
                $entityManager = $this->getDoctrine()->getManager();
                /**
                 * @var Planet $userPlanet
                 */
                foreach ($userPlanets as $userPlanet) {

                    $dateDiff = Date::countDateMinutesDiff($userPlanet->getLastActualisation(), $dateNow);
                    if ($dateDiff > 0) {
                        $userPlanet->setLastActualisation($dateNow);
                        $userPlanet->setUranium(Factory::uraniumResource($this->getUser(), $userPlanet, $dateDiff)->calculateResource());
                        $userPlanet->setHelium(Factory::heliumResource($this->getUser(), $userPlanet, $dateDiff)->calculateResource());
                        $userPlanet->setFerrum(Factory::ferrumResource($this->getUser(), $userPlanet, $dateDiff)->calculateResource());
                        $userPlanet->setSilicon(Factory::siliconResource($this->getUser(), $userPlanet, $dateDiff)->calculateResource());
//                        $this->getUser()->setCredits(Factory::creditsResource($this->getUser(), $userPlanet, $dateDiff)->calculateResource());

                        $entityManager->persist($userPlanet);
                    }
                    $entityManager->flush();
                }
            } catch (\Exception $e) {

            }

        }
    }

    /**
     * @return \AppBundle\Entity\User
     */
    private function getUser()
    {
        return $this->getTokenStorage()->getToken()->getUser();
    }

    /**
     * @return \AppBundle\Entity\Repository\PlanetRepository
     */
    private function getPlanetRepository() : PlanetRepository
    {
        return $this->getDoctrine()->getRepository('AppBundle:Planet');
    }

    /**
     * @return TokenStorageInterface
     */
    private function getTokenStorage() : TokenStorageInterface
    {
        return $this->tokenStorage;
    }

    /**
     * @return Doctrine
     */
    private function getDoctrine() : Doctrine
    {
        return $this->doctrine;
    }


}