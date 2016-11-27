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
use AppBundle\Library\Utilities\Buildings\Mines\UraniumMine;
use AppBundle\Library\Utilities\Resources\Uranium;

class UraniumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider PrepareValuesProvider
     * @param $mineLevel
     * @param $happinessLevel
     * @param $uraniumQuantity
     * @param $dateDiff
     * @param $exceptedValue
     * @internal param $baseValue
     */
    public function testCalculateResource($mineLevel, $happinessLevel, $uraniumQuantity, $dateDiff, $exceptedValue)
    {
        $uraniumMine = new UraniumMine();
        $uraniumMine->setBuildingLevel($mineLevel);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setUranium($uraniumQuantity);
        $planet->setUraniumMine($uraniumMine);
        $planet->setHappinessLevel($happniessDirectory);

        $uranium = new Uranium();
        $uranium->setPlanet($planet);
        $uranium->setDateDiff($dateDiff);

        $this->assertEquals($exceptedValue, $uranium->calculateResource());
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
