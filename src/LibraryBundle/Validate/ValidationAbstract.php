<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:46
 */

namespace LibraryBundle\Validate;

/**
 * Class ValidationAbstract
 * @package LibraryBundle\Validate
 */
abstract class ValidationAbstract implements ValidationInterface
{
    /**
     * @var bool
     */
    private $resultOfValidation = false;

    /**
     * @var string|int
     */
    protected $valueToValidate;

    /**
     * @return bool
     */
    public function getResultOfValidation() : bool
    {
        return $this->resultOfValidation;
    }

    /**
     * @param $valueToValidate
     */
    abstract public function setValueToValidate($valueToValidate);

    /**
     * @throws ValidationException
     */
    abstract public function validate();

    /**
     * @param boolean $resultOfValidation
     */
    protected function setResultOfValidation(bool $resultOfValidation)
    {
        $this->resultOfValidation = $resultOfValidation;
    }

    /**
     * @return int|string
     */
    protected function getValueToValidate()
    {
        return $this->valueToValidate;
    }

}