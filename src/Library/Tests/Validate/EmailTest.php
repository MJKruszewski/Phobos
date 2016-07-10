<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 19:45
 */

namespace Library\Tests\Validate;


use Library\Validate\Email;
use Library\Validate\ValidationException;

class EmailTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider emailPositiveProvider
     * @param string $email
     * @throws \Library\Validate\ValidationException
     */
    public function testValidatePositive(string $email)
    {
        $emailValidation = new Email();
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
        $emailValidation = new Email();
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
        $emailValidation = new Email();
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
            ['test@test.pl'],
            ['asdd#112@test.com'],
            ['asdfg%^h@asdf.uk'],
            ['asdfg%^h@asdf.ru'],
            ['Lovor1970@superrito.com'],
            ['asfdg@gustr.com'],
            ['asf.dg@gustr.com']
        ];
    }

    /**
     * @return array
     */
    public function emailNegativeProvider() : array
    {
        return [
            ['te@st@test.pl'],
            ['asdd#112@testcom'],
            ['asdfg%^hasdf.uk'],
            ['asdfg%^hasdfru'],
            ['Lovor1970@superrito.co@m'],
            ['asf@.dg@gustr.com'],
            ['a'],
            ['1']
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
