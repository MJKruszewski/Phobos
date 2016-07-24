<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Repository\NewsRepository;
use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Entity\Repository\ProjectProgressRepository;
use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends ControllerAbstract implements ActualisationInterface
{
    /**
     * @Route("/app", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        /**
         * @var PlanetRepository $planetRepository
         */
        $planetRepository = $this->getDoctrine()->getRepository('AppBundle:Planet');

        $createNewPlanet = false;

        if (empty($planetRepository->findAllToArrayByOwnerId($this->getUser()->getId()))) {
            $createNewPlanet = true;
        } elseif ($this->getSession()->get('actual_planet', 0) <= 0) {
            $this->getSession()->set('actual_planet', $this->getPlanetRepository()->getActiveUserCapitalPlanet($this->getUser()->getId())->getId());
        }

        return $this->render('@AppBundle/Resources/views/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'user_name' => $this->getUser()->getUsername(),
            'create_new_planet' => $createNewPlanet
        ]);
    }

}
