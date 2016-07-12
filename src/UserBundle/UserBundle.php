<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 12.07.16
 * Time: 20:11
 */

namespace UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent() : string
    {
        return 'FOSUserBundle';
    }
}