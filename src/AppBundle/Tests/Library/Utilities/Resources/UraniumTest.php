<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:39
 */

namespace AppBundle\Tests\Library\Utilities\Resources;


use AppBundle\Entity\Buildings\UraniumMine;
use AppBundle\Entity\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Library\Utilities\Resources\Uranium;

class UraniumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider PrepareValuesProvider
     * @param $baseValue
     * @param $happinessLevel
     * @param $uraniumQuantity
     * @param $dateDiff
     * @param $exceptedValue
     */
    public function testCalculateResource($baseValue, $happinessLevel, $uraniumQuantity, $dateDiff, $exceptedValue)
    {
        $uraniummine = new UraniumMine();
        $uraniummine->setBaseValue($baseValue);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setUranium($uraniumQuantity);
        $planet->setUraniumMine($uraniummine);
        $planet->setHappinessLevel($happniessDirectory);

        $ferrum = new Uranium();
        $ferrum->setPlanet($planet);
        $ferrum->setDateDiff($dateDiff);

        $this->assertEquals($exceptedValue, $ferrum->calculateResource());
    }

    public function PrepareValuesProvider()
    {
        return [
            [500, 5, 300, 60, 925],
            [789, 3, 856, 99043, 977667],
            [0, 3, 856, 99043, 856],
            [423, 4, 856, 456, 4070],
            [123, 1, 786, 456, 1019],
            [4786, 3, 0, 0, 0],
            [335, 2, 78, 78, 295]
        ];
    }
}
