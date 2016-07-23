<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:40
 */

namespace AppBundle\Library\Validate;

/**
 * Class Email
 * @package AppBundle\Library\Validate
 * <br />
 * <br />
 * Responsibility of Class: Validate Email
 * <br />
 * Reason for change: Change in validation logic
 */
class Email extends ValidationAbstract
{
    /**
     * @param string $email
     */
    public function setValueToValidate($email)
    {
        $this->valueToValidate = trim($email);
    }

    /**
     * @throws ValidationException
     */
    public function validate()
    {
        if (empty($this->getValueToValidate())) {
            throw new ValidationException();
        }
        $this->setResultOfValidation(filter_var($this->getValueToValidate(), FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $this->getValueToValidate()));
    }
    
}