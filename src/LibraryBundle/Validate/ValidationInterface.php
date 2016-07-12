<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:39
 */

namespace LibraryBundle\Validate;

/**
 * Interface ValidationInterface
 * @package LibraryBundle\Validate
 */
interface ValidationInterface
{

    public function validate();

    public function getResultOfValidation() : bool;
    
    public function setValueToValidate($valueToValidate);

}