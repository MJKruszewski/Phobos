<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 19:48
 */

namespace AppBundle\Controller;

//use AppBundle\Entity\Directories\ClimateDirectory;
//use AppBundle\Entity\Directories\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Entity\Races;
use AppBundle\Entity\Repository\PlanetImagesDirectoryRepository;
use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Entity\Repository\RacesRepository;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Constants\BuildingsConstants;
use AppBundle\Library\Utilities\Date;
use AppBundle\Library\Utilities\Formatters\Numbers;
use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
use Symfony\Component\HttpFoundation\Request;

class PlanetController extends ControllerAbstract implements ActualisationInterface
{
    /**
     * @Route("/app/planet/createplanet", name="createPlanetForNewUser")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function createPlanetForNewUserAction(Request $request)
    {
        /**
         * @var PlanetRepository $planetRepository
         */
        $planetRepository = $this->getDoctrine()->getRepository('AppBundle:Planet');

        if (empty($planetRepository->findAllToArrayByOwnerId($this->getUser()->getId()))) {
            try {
                /**
                 * @var User $user
                 * @var Races $race
                 * @var HappinessDirectory $happinessDirectory
                 * @var ClimateDirectory $climateDirectory
                 * @var PlanetImagesDirectoryRepository $planetImagesDirectoryRepository
                 */
                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($this->getUser()->getId());
                $race = $this->getDoctrine()->getRepository('AppBundle:Races')->find(Numbers::castStringToInt($request->get('race', '1')));

                $happinessDirectory = $this->getDoctrine()->getRepository('AppBundle:Directories\HappinessDirectory')->find(5);
                $climateDirectory = $this->getDoctrine()->getRepository('AppBundle:Directories\ClimateDirectory')->find(random_int(1, 6));
                $planetImagesDirectoryRepository = $this->getDoctrine()->getRepository('AppBundle:Directories\PlanetImagesDirectory');

                $planetImagesDirectory = $planetImagesDirectoryRepository->getAllImagesArrayForClimateType($climateDirectory->getId());

                $planet = new Planet();

                $planet->setDateAdd(Date::getDateTime());
                $planet->setLastActualisation(Date::getDateTime());
                $planet->setFirstOwnerId($user);
                $planet->setOwnerId($user);
                $planet->setHappinessLevel($happinessDirectory);
                $planet->setPlanetClimate($climateDirectory);
                $planet->setPlanetDominantRace($race);
                $planet->setPlanetImage($planetImagesDirectory[array_rand($planetImagesDirectory, 1)]);
                $planet->setFerrumMine(BuildingsConstants::getBaseBuildingAbstraction());
                $planet->setHeliumMine(BuildingsConstants::getBaseBuildingAbstraction());
                $planet->setSiliconMine(BuildingsConstants::getBaseBuildingAbstraction());
                $planet->setUraniumMine(BuildingsConstants::getBaseBuildingAbstraction());
                $planet->setName($request->get('planet_name', 'Invalid'));
                $planet->setSizeOfPlanet(random_int(10, 20));
                $planet->setUranium(2500);
                $planet->setSilicon(2500);
                $planet->setHelium(250);
                $planet->setFerrum(2500);
                $planet->setIsCapital(true);

                $em = $this->getDoctrine()->getManager();
                $em->persist($planet);
                $em->flush();

                $this->getSession()->set('actual_planet', $this->getPlanetRepository()->getActiveUserCapitalPlanet($this->getUser()->getId())->getId());

            } catch (\Exception $e) {
                var_dump($e->getMessage());
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

    /**
     * @Route("/planet/buildings", name="buildings")
     */
    public function buildingsAction()
    {
        $planetId = $this->getSession()->get('actual_planet');
        /**
         * @var Planet $userPlanet
         */
        $userPlanet = $this->getPlanetRepository()->getActiveUserPlanet($planetId, $this->getUser()->getId());
        return $this->render('@AppBundle/Resources/views/Planet/buildings.html.twig',
            [
                'user_planet' => $userPlanet,
                'buildings' => $buildings
            ]);
    }

    /**
     * @Route("/planet/hangar", name="hangar")
     */
    public function hangarAction()
    {
        $planetId = $this->getSession()->get('actual_planet');
        /**
         * @var Planet $userPlanet
         */
        $userPlanet = $this->getPlanetRepository()->getActiveUserPlanet($planetId, $this->getUser()->getId());
        return $this->render('@AppBundle/Resources/views/Planet/buildings.html.twig',
            [
                'user_planet' => $userPlanet
            ]);
    }

    /**
     * @Route("/planet", name="planet")
     */
    public function planetAction()
    {
        return $this->render('@AppBundle/Resources/views/Planet/main.html.twig');
    }


}