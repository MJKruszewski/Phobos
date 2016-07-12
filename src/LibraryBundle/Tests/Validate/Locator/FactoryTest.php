<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 15:23
 */

namespace LibraryBundle\Tests\Validate\Locator;


use LibraryBundle\Validate\Locator\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testGetEmailValidation()
    {
        $this->assertInstanceOf('\LibraryBundle\Validate\ValidationInterface', Factory::getEmailValidation());
    }

    public function testGetNumberValidator()
    {
        $this->assertInstanceOf('\LibraryBundle\Validate\ValidationInterface', Factory::getNumberValidator());
    }

}
