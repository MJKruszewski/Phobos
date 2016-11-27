<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 12:40
 */

namespace AppBundle\Controller;

use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
use /** @noinspection PhpUnusedAliasInspection */
    Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use /** @noinspection PhpUnusedAliasInspection */
    Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends ControllerAbstract
{
    /**
     * @Route("/topMenu", name="top_menu")
     * @return \Symfony\Component\HttpFoundation\Response
     * @todo move positions of menu to database
     */
    public function topMenuAction()
    {
        $isAuthorized = $this->getAuthorizationChecker()->isGranted('IS_AUTHENTICATED_REMEMBERED');

        if ($isAuthorized) {
            $menuPositions = [
                ['name' => 'Home', 'clear_path' => 'app', 'path' => '/app'],
                ['name' => 'Planet', 'clear_path' => 'planet', 'path' => '/planet'],
                ['name' => 'Messages', 'clear_path' => 'register', 'path' => '/'],
                ['name' => 'Smfn', 'clear_path' => 'register', 'path' => '/'],
            ];
        } else {
            $menuPositions = [
                ['name' => 'Register', 'clear_path' => 'register', 'path' => '/register'],
            ];
        }

        return $this->render('@AppBundle/Resources/views/Menu/TopMenu.html.twig', [
            'menu_positions' => $menuPositions,
            'is_authenticated' => $isAuthorized,
        ]);
    }

    /**
     * @Route("/sidePlanetMenu", name="sidePlanetMenu")
     * @return \Symfony\Component\HttpFoundation\Response
     * @todo move positions of menu to database or consts
     */
    public function sidePlanetMenuAction()
    {
        $isAuthorized = $this->getAuthorizationChecker()->isGranted('IS_AUTHENTICATED_REMEMBERED');

        if ($isAuthorized) {
            $menuPositions = [
                ['name' => 'Overview', 'clear_path' => 'planet', 'path' => '/planet'],
                ['name' => 'Buildings', 'clear_path' => 'buildings', 'path' => '/planet/buildings'],
                ['name' => 'Hangar', 'clear_path' => 'hangar', 'path' => '/planet/hangar'],
                ['name' => 'Barracks', 'clear_path' => 'barracks', 'path' => '/planet/barracks'],
            ];
        } else {
            $menuPositions = [
                ['name' => 'Register', 'clear_path' => 'register', 'path' => '/register'],
            ];
        }

        return $this->render('@AppBundle/Resources/views/Menu/SidePlanetMenu.html.twig', [
            'menu_positions' => $menuPositions,
            'is_authenticated' => $isAuthorized,
        ]);
    }
}