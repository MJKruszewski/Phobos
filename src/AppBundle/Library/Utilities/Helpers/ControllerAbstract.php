<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 12.07.16
 * Time: 19:57
 */

namespace AppBundle\Library\Utilities\Helpers;

use AppBundle\Entity\Repository\PlanetRepository;
use AppBundle\Entity\User;
use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Class ControllerAbstract
 * @package AppBundle\Library\Utilities\Helpers
 */
abstract class ControllerAbstract extends Controller
{
    /**
     * @return \AppBundle\Entity\User
     */
    protected function getUser() : User
    {
        return $this->get('security.token_storage')->getToken()->getUser();
    }

    /**
     * @return \AppBundle\Entity\Repository\PlanetRepository
     */
    protected function getPlanetRepository() : PlanetRepository
    {
        return $this->getDoctrine()->getRepository('AppBundle:Planet');
    }

    /**
     * @return \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
     */
    protected function getToken() : TokenInterface
    {
        return $this->get('security.token_storage')->getToken();
    }

    /**
     * @return AuthorizationCheckerInterface
     */
    protected function getAuthorizationChecker() : AuthorizationCheckerInterface
    {
        return $this->get('security.authorization_checker');
    }

    /**
     * @return Session
     */
    protected function getSession() : Session
    {
        return $this->get('session');
    }

    /**
     * @return Connection
     */
    protected function getConnection() : Connection
    {
        return $this->getDoctrine()->getConnection();
    }

}