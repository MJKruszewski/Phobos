<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 22:00
 */

namespace UserBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\Security;

/**
 * Class SecurityController
 * @package UserBundle\Controller
 */
class SecurityController extends Controller
{
    /**
     * @Route("/user/login", name="login")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'UserBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(Security::LAST_USERNAME),
                'error' => $error,
            )
        );
    }

    /**
     * @Route("/user/authorization", name="authorization")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function authorizationAction(Request $request)
    {
        
    }


    /**
     * @Route("/user/logout", name="logout")
     */
    public function logoutAction()
    {
    }


}