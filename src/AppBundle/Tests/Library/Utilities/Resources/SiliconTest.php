<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:39
 */

namespace AppBundle\Tests\Library\Utilities\Resources;


use AppBundle\Entity\Directories\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Library\Utilities\Buildings\Mines\SiliconMine;
use AppBundle\Library\Utilities\Resources\Silicon;

class SiliconTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider PrepareValuesProvider
     * @param $mineLevel
     * @param $happinessLevel
     * @param $siliconQuantity
     * @param $dateDiff
     * @param $exceptedValue
     * @internal param $baseValue
     */
    public function testCalculateResource($mineLevel, $happinessLevel, $siliconQuantity, $dateDiff, $exceptedValue)
    {
        $siliconMine = new SiliconMine();
        $siliconMine->setBuildingLevel($mineLevel);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setSilicon($siliconQuantity);
        $planet->setSiliconMine($siliconMine);
        $planet->setHappinessLevel($happniessDirectory);

        $silicon = new Silicon();
        $silicon->setPlanet($planet);
        $silicon->setDateDiff($dateDiff);

        $this->assertEquals($exceptedValue, $silicon->calculateResource());
    }

    public function PrepareValuesProvider()
    {
        return [
            [500, 5, 300, 60, 62800],
            [789, 3, 856, 99043, 97682014],
            [0, 3, 856, 99043, 856],
            [423, 4, 856, 456, 322336],
            [123, 1, 786, 456, 24156],
            [4786, 3, 0, 0, 0],
            [335, 2, 78, 78, 21853]
        ];
    }
}
