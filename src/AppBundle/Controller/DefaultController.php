<?php

namespace AppBundle\Controller;

use LibraryBundle\Utilities\Helpers\ControllerAbstract;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends ControllerAbstract
{
    /**
     * @Route("/app", name="homepage")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        return $this->render('@AppBundle/Resources/views/Default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..'),
            'user_name' => $this->getUser()->getUsername()
        ]);
    }

    /**
     * @Route("/topMenu", name="top_menu")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function topMenuAction()
    {
        $menuPositions = [];

//        if ($this->getUser()->isEnabled()) {
            $menuPositions = [
              ['name' => 'logout', 'path' => '/logout'],
              ['name' => 'register', 'path' => '/register'],
              ['name' => 'login', 'path' => '/']
            ];
//        } else {
//
//        }

        return $this->render('@AppBundle/Resources/views/Menu/TopMenu.html.twig', [
            'menu_positions' => $menuPositions
        ]);
    }
}
