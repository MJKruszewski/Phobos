<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 14:12
 */

namespace Library\Tests\Validate;


use Library\Validate\Number;

class NumberTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider emailPositiveProvider
     * @param string $email
     * @throws \Library\Validate\ValidationException
     */
    public function testValidatePositive(string $email)
    {
        $emailValidation = new Number();
        $emailValidation->setValueToValidate($email);
        $emailValidation->validate();

        $this->assertTrue($emailValidation->getResultOfValidation(), 'Validation of Email is broken');
    }

    /**
     * @dataProvider emailNegativeProvider
     * @param string $email
     * @throws \Library\Validate\ValidationException
     */
    public function testValidateNegative(string $email)
    {
        $emailValidation = new Number();
        $emailValidation->setValueToValidate($email);
        $emailValidation->validate();

        $this->assertNotTrue($emailValidation->getResultOfValidation(), 'Validation of Email is broken');
    }

    /**
     * @dataProvider emailExceptionProvider
     * @param string $email
     * @throws \Library\Validate\ValidationException
     */
    public function testValidateException($email, $errorType)
    {
        $emailValidation = new Number();
        $this->expectException($errorType);

        $emailValidation->setValueToValidate($email);
        $emailValidation->validate();

        $this->assertNotTrue($emailValidation->getResultOfValidation(), 'Validation of Email is broken');
    }

    /**
     * @return array
     */
    public function emailPositiveProvider() : array
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
    public function emailNegativeProvider() : array
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
    public function emailExceptionProvider() : array
    {
        return [
            [null, '\Library\Validate\ValidationException'],
            ['', '\Library\Validate\ValidationException'],
            [' ', '\Library\Validate\ValidationException']
        ];
    }

}

