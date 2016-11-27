<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
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
        }

        return $this->render('@AppBundle/Resources/views/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'user_name' => $this->getUser()->getUsername(),
            'create_new_planet' => $createNewPlanet
        ]);
    }

}
