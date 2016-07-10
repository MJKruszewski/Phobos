<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 15:23
 */

namespace Library\Tests\Validate\Locator;


use Library\Validate\Locator\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testGetEmailValidation()
    {
        $this->assertInstanceOf('\Library\Validate\ValidationInterface', Factory::getEmailValidation());
    }

    public function testGetNumberValidator()
    {
        $this->assertInstanceOf('\Library\Validate\ValidationInterface', Factory::getNumberValidator());
    }

}
