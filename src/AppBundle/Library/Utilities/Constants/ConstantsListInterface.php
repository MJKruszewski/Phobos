<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 26.11.16
 * Time: 10:45
 */

namespace AppBundle\Library\Utilities\Constants;


interface ConstantsListInterface
{
    /**
     * @return array
     */
    public static function getConstantsList() : array;

    public static function checkIfValueIsValidConstant(int $constant) : bool;
}