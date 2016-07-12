<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 12.07.16
 * Time: 19:57
 */

namespace Library\Utilities\Helpers;

use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ControllerAbstract
 * @package Library\Utilities\Helpers
 */
abstract class ControllerAbstract extends Controller
{
    /**
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->get('security.token_storage')->getToken()->getUser();
    }

}