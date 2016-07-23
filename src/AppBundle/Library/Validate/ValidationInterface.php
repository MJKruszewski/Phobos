<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:39
 */

namespace AppBundle\Library\Validate;

/**
 * Interface ValidationInterface
 * @package AppBundle\Library\Validate
 */
interface ValidationInterface
{

    public function validate();

    public function getResultOfValidation() : bool;
    
    public function setValueToValidate($valueToValidate);

}