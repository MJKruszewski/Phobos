<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 14:12
 */

namespace AppBundle\Tests\Library\Validate;


use AppBundle\Library\Validate\Number;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider numberPositiveProvider
     * @param string $number
     * @throws \AppBundle\Library\Validate\ValidationException
     */
    public function testValidatePositive(string $number)
    {
        $numberValidation = new Number();
        $numberValidation->setValueToValidate($number);
        $numberValidation->validate();

        $this->assertTrue($numberValidation->getResultOfValidation(), 'Validation of numbers is broken');
    }

    /**
     * @dataProvider numberNegativeProvider
     * @param string $number
     * @throws \AppBundle\Library\Validate\ValidationException
     */
    public function testValidateNegative(string $number)
    {
        $numberValidation = new Number();
        $numberValidation->setValueToValidate($number);
        $numberValidation->validate();

        $this->assertNotTrue($numberValidation->getResultOfValidation(), 'Validation of numbers is broken');
    }

    /**
     * @dataProvider numberExceptionProvider
     * @param string $number
     * @param $errorType
     * @throws \AppBundle\Library\Validate\ValidationException
     */
    public function testValidateException($number, $errorType)
    {
        $numberValidation = new Number();
        $this->expectException($errorType);

        $numberValidation->setValueToValidate($number);
        $numberValidation->validate();

        $this->assertNotTrue($numberValidation->getResultOfValidation(), 'Validation of Email is broken');
    }

    /**
     * @return array
     */
    public function numberPositiveProvider() : array
    {
        return [
            ['1'],
            ['15'],
            ['-25'],
            ['23'],
            ['3'],
            [-6],
            [-52],
            [123],
            ['65456.20']
        ];
    }

    /**
     * @return array
     */
    public function numberNegativeProvider() : array
    {
        return [
            ['4s'],
            ['441s123'],
            ['as2'],
            ['124~'],
            ['465*5'],
            ['(8+5)'],
            ['765,2']
        ];
    }

    /**
     * @return array
     */
    public function numberExceptionProvider() : array
    {
        return [
            [null, '\AppBundle\Library\Validate\ValidationException'],
            ['', '\AppBundle\Library\Validate\ValidationException'],
            [' ', '\AppBundle\Library\Validate\ValidationException']
        ];
    }

}

