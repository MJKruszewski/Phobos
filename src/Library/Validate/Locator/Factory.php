<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:21
 */

namespace Library\Validate\Locator;

use Library\Validate\Email;
use Library\Validate\Number;
use Library\Validate\ValidationInterface;

/**
 * Class Factory
 * @package Library\Validate\Locator
 */
class Factory
{
    /**
     * @return \Library\Validate\ValidationInterface
     */
    public static function getEmailValidation() : ValidationInterface
    {
        return new Email();
    }

    /**
     * @return \Library\Validate\ValidationInterface
     */
    public static function getNumberValidator() : ValidationInterface
    {
        return new Number();
    }

}