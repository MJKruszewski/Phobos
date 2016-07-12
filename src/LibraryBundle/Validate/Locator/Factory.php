<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:21
 */

namespace LibraryBundle\Validate\Locator;

use LibraryBundle\Validate\Email;
use LibraryBundle\Validate\Number;
use LibraryBundle\Validate\ValidationInterface;

/**
 * Class Factory
 * @package LibraryBundle\Validate\Locator
 */
class Factory
{
    /**
     * @return \LibraryBundle\Validate\ValidationInterface
     */
    public static function getEmailValidation() : ValidationInterface
    {
        return new Email();
    }

    /**
     * @return \LibraryBundle\Validate\ValidationInterface
     */
    public static function getNumberValidator() : ValidationInterface
    {
        return new Number();
    }

}