<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:17
 */

namespace Library\Validate;


class Number extends ValidationAbstract
{
    /**
     * @param string|int $number
     */
    public function setValueToValidate($number)
    {
        is_string($number) ? $this->valueToValidate = trim($number) : $this->valueToValidate = $number;
    }

    /**
     * @throws ValidationException
     */
    public function validate()
    {
        if (empty($this->getValueToValidate())) {
            throw new ValidationException();
        }
        $this->setResultOfValidation(is_numeric($this->getValueToValidate()));
    }
}