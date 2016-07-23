<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:12
 */

namespace AppBundle\Library\Utilities\Formatters;

use AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberCastException;
use AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberException;
use AppBundle\Library\Validate\Locator\Factory;

/**
 * Class Numbers
 * @package AppBundle\Library\Utilities\Formatters
 * <br />
 * <br />
 * Responsibility of Class: Operations on scalar type of numbers
 * <br />
 * Reason for change: Implement more operations of casting to other types of numbers
 * */
class Numbers
{
    /**
     * @param string $stringValue
     * @return int
     * @throws NumberCastException
     * @throws NumberException
     */
    public static function castStringToInt(string $stringValue) : int
    {
        $numberValidator = Factory::getNumberValidator();

        $numberValidator->setValueToValidate($stringValue);
        $numberValidator->validate();
        $resultOfValidation = $numberValidator->getResultOfValidation();

        $intValue = intval($stringValue);

        if (!$resultOfValidation) throw new NumberException("$stringValue is not a number");
        if (!($intValue == $stringValue)) throw new NumberCastException("$intValue not equals $stringValue");

        return $intValue;
    }

    public static function castStringToDouble(string $stringValue) : double
    {
        throw new \Exception("castStringToDouble is not implemented");
    }


}