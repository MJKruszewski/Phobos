<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:39
 */

namespace AppBundle\Tests\Library\Utilities\Resources;


use AppBundle\Entity\Buildings\SiliconMine;
use AppBundle\Entity\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Library\Utilities\Resources\Silicon;

class SiliconTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider PrepareValuesProvider
     * @param $baseValue
     * @param $happinessLevel
     * @param $siliconQuantity
     * @param $dateDiff
     * @param $exceptedValue
     */
    public function testCalculateResource($baseValue, $happinessLevel, $siliconQuantity, $dateDiff, $exceptedValue)
    {
        $siliconMine = new SiliconMine();
        $siliconMine->setBaseValue($baseValue);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setSilicon($siliconQuantity);
        $planet->setSiliconMine($siliconMine);
        $planet->setHappinessLevel($happniessDirectory);

        $ferrum = new Silicon();
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
