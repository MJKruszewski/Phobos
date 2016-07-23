<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 12.07.16
 * Time: 19:57
 */

namespace AppBundle\Library\Utilities\Helpers;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

/**
 * Class ControllerAbstract
 * @package AppBundle\Library\Utilities\Helpers
 */
abstract class ControllerAbstract extends Controller
{
    /**
     * @return \AppBundle\Entity\User
     */
    public function getUser() : User
    {
        return $this->get('security.token_storage')->getToken()->getUser();
    }

    /**
     * @return \Symfony\Component\Security\Core\Authentication\Token\TokenInterface
     */
    public function getToken() : TokenInterface
    {
        return $this->get('security.token_storage')->getToken();
    }

    /**
     * @return AuthorizationCheckerInterface
     */
    public function getAuthorizationChecker() : AuthorizationCheckerInterface
    {
        return $this->get('security.authorization_checker');
    }

}