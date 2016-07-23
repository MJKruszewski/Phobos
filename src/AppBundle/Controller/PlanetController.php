<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:48
 */

namespace AppBundle\Controller;

use AppBundle\Entity\ClimateDirectory;
use AppBundle\Entity\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Entity\Races;
use AppBundle\Entity\Repository\PlanetImagesDirectoryRepository;
use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Entity\Repository\RacesRepository;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Date;
use AppBundle\Library\Utilities\Formatters\Numbers;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Library\Utilities\Helpers\ControllerAbstract;

class PlanetController extends ControllerAbstract
{
    /**
     * @Route("/app/planet/createplanet", name="createPlanetForNewUser")
     */
    public function createPlanetForNewUserAction(Request $request)
    {
        /**
         * @var PlanetRepository $planetRepository
         */
        $planetRepository = $this->getDoctrine()->getRepository('AppBundle:Planet');

        if (empty($planetRepository->findAllToArrayByOwnerId($this->getUser()->getId()))) {
            try {
                $this->getDoctrine()->getManager()->beginTransaction();
                /**
                 * @var User $user
                 * @var Races $race
                 * @var HappinessDirectory $happinessDirectory
                 * @var ClimateDirectory $climateDirectory
                 * @var PlanetImagesDirectoryRepository $planetImagesDirectoryRepository
                 */
                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($this->getUser()->getId());
                $race = $this->getDoctrine()->getRepository('AppBundle:Races')->find(Numbers::castStringToInt($request->get('race', '1')));
                $happinessDirectory = $this->getDoctrine()->getRepository('AppBundle:HappinessDirectory')->find(5);
                $climateDirectory = $this->getDoctrine()->getRepository('AppBundle:ClimateDirectory')->find(random_int(1, 6));
                $planetImagesDirectoryRepository = $this->getDoctrine()->getRepository('AppBundle:PlanetImagesDirectory');
                $planetImagesDirectory = $planetImagesDirectoryRepository->getAllImagesArrayForClimateType($climateDirectory->getId());

                $planet = new Planet();
                $planet->setDateAdd(Date::getDateTime());
                $planet->setFirstOwnerId($user);
                $planet->setOwnerId($user);
                $planet->setHappinessLevelId($happinessDirectory);
                $planet->setPlanetClimate($climateDirectory);
                $planet->setPlanetDominantRace($race);
                $planet->setPlanetImage($planetImagesDirectory[array_rand($planetImagesDirectory, 1)]);
                $planet->setName($request->get('planet_name', 'Invalid'));
                $planet->setSizeOfPlanet(random_int(10, 20));

                $this->getDoctrine()->getManager()->persist($planet);
                $this->getDoctrine()->getManager()->flush();
                $this->getDoctrine()->getManager()->commit();

            } catch (\Exception $e) {
                $this->getDoctrine()->getManager()->rollback();
            }
        } else {
            return $this->redirect('/app');
        }

        return $this->redirect('/app');
    }

    /**
     * @Route("/app/planet/createplanetform", name="createPlanetForNewUserForm")
     */
    public function createPlanetForNewUserFormAction()
    {
        /**
         * @var RacesRepository $racesRepository
         */
        $racesRepository = $this->getDoctrine()->getRepository('AppBundle:Races');
        $races = $racesRepository->findAllMainRacesToArray();

        return $this->render('@AppBundle/Resources/views/Planet/Forms/createPlanetForm.html.twig',
            [
                'races' => $races
            ]);
    }


    /**
     * @Route("/app/planet/overview", name="overview")
     */
    public function overviewAction()
    {
        $planetId = $this->getSession()->get('actual_planet');
        /**
         * @var Planet $userPlanet
         */
        $userPlanet = $this->getPlanetRepository()->getActiveUserPlanet($planetId, $this->getUser()->getId());
        return $this->render('@AppBundle/Resources/views/Planet/overview.html.twig',
            [
                'planet_image_path' => $userPlanet->getPlanetImage()->getPath(),
                'credits' => $this->getUser()->getCredits(),
                'uranium' => $userPlanet->getUranium(),
                'ferrum' => $userPlanet->getFerrum(),
                'silicon' => $userPlanet->getSilicon(),
                'helium' => $userPlanet->getHelium(),
                'user_planet' => $userPlanet
            ]);
    }


}