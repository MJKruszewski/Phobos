<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 12:40
 */

namespace AppBundle\Controller;

use AppBundle\Library\Utilities\Helpers\ControllerAbstract;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
                ['name' => 'Planet', 'clear_path' => 'register', 'path' => '/register'],
                ['name' => 'Messages', 'clear_path' => 'register', 'path' => '/register'],
                ['name' => 'Smfn', 'clear_path' => 'register', 'path' => '/register'],
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
}