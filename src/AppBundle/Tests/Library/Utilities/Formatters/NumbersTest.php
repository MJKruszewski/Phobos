<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 09.07.16
 * Time: 13:51
 */

namespace AppBundle\Tests\Library\Utilities\Formatters;


use AppBundle\Library\Utilities\Formatters\Numbers;

class NumbersTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider castStringToIntProvider
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberCastException
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberException
     */
    public function testCastStringToIntPositive($valueToCast)
    {
        $this->assertEquals($valueToCast, Numbers::castStringToInt("$valueToCast"));
    }

    /**
     * @dataProvider castStringToIntDoubleProvider
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberCastException
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberException
     */
    public function testCastStringToIntDoubleNegativeException($exceptedValue, $valueToCast)
    {
        $this->expectException('\AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberCastException');
        $this->expectExceptionMessage("$exceptedValue not equals $valueToCast");
        $this->assertEquals($exceptedValue, Numbers::castStringToInt("$valueToCast"));
    }

    /**
     * @dataProvider castStringToIntNegativeProvider
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberCastException
     * @throws \AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberException
     */
    public function testCastStringToIntDoubleNegative($valueToCast)
    {
        $this->expectException('\AppBundle\Library\Utilities\Formatters\FormatterExceptions\NumberException');
        $this->expectExceptionMessage("$valueToCast is not a number");
        Numbers::castStringToInt("$valueToCast");
    }

    /**
     * @return array
     */
    public function castStringToIntProvider() : array
    {
        $arrayOfTestCases = [];

        for ($i = 0; $i < 100; $i++) {
            $arrayOfTestCases[] = [random_int(-1000, 1000)];
        }

        return $arrayOfTestCases;
    }

    /**
     * @return array
     */
    public function castStringToIntNegativeProvider() : array
    {
        $arrayOfTestCases = [];

        for ($i = 0; $i < 100; $i++) {
            $arrayOfTestCases[] = [random_int(-1000, 1000) . chr(64 + rand(0, 26))];
        }

        return $arrayOfTestCases;
    }

    /**
     * @return array
     */
    public function castStringToIntDoubleProvider() : array
    {
        $arrayOfTestCases = [];

        for ($i = 0; $i < 100; $i++) {
            $int = random_int(-1000, 1000);
            $arrayOfTestCases[] = [$int, $int . '.' . random_int(0, 999999)];
        }

        return $arrayOfTestCases;
    }


}
