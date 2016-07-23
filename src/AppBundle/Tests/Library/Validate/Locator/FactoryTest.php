<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 15:23
 */

namespace AppBundle\Tests\Library\Validate\Locator;


use AppBundle\Library\Validate\Locator\Factory;

class FactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testGetEmailValidation()
    {
        $this->assertInstanceOf('\AppBundle\Library\Validate\ValidationInterface', Factory::getEmailValidation());
    }

    public function testGetNumberValidator()
    {
        $this->assertInstanceOf('\AppBundle\Library\Validate\ValidationInterface', Factory::getNumberValidator());
    }

}
