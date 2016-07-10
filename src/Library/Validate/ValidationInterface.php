<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:39
 */

namespace Library\Validate;

/**
 * Interface ValidationInterface
 * @package Library\Validate
 */
interface ValidationInterface
{

    public function validate();

    public function getResultOfValidation() : bool;
    
    public function setValueToValidate($valueToValidate);

}