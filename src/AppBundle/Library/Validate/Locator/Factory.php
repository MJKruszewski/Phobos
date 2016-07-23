<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:21
 */

namespace AppBundle\Library\Validate\Locator;

use AppBundle\Library\Validate\Email;
use AppBundle\Library\Validate\Number;
use AppBundle\Library\Validate\ValidationInterface;

/**
 * Class Factory
 * @package AppBundle\Library\Validate\Locator
 */
class Factory
{
    /**
     * @return \AppBundle\Library\Validate\ValidationInterface
     */
    public static function getEmailValidation() : ValidationInterface
    {
        return new Email();
    }

    /**
     * @return \AppBundle\Library\Validate\ValidationInterface
     */
    public static function getNumberValidator() : ValidationInterface
    {
        return new Number();
    }

}