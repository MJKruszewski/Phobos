<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:40
 */

namespace AppBundle\Tests\Library\Utilities\Resources;


use AppBundle\Entity\Directories\HappinessDirectory;
use AppBundle\Entity\Planet;
use AppBundle\Library\Utilities\Buildings\Mines\HeliumMine;
use AppBundle\Library\Utilities\Resources\Helium;

class HeliumTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider PrepareValuesProvider
     * @param $mineLevel
     * @param $happinessLevel
     * @param $heliumQuantity
     * @param $dateDiff
     * @param $exceptedValue
     */
    public function testCalculateResource($mineLevel, $happinessLevel, $heliumQuantity, $dateDiff, $exceptedValue)
    {
        $heliumMine = new HeliumMine();
        $heliumMine->setBuildingLevel($mineLevel);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setHelium($heliumQuantity);
        $planet->setHeliumMine($heliumMine);
        $planet->setHappinessLevel($happniessDirectory);

        $helium = new Helium();
        $helium->setPlanet($planet);
        $helium->setDateDiff($dateDiff);

        $this->assertEquals($exceptedValue, $helium->calculateResource());
    }

    public function PrepareValuesProvider()
    {
        return [
            [1, 5, 300, 60, 425],
            [12, 3, 856, 99043, 1486501],
            [2, 3, 856, 99043, 248463],
            [3, 4, 856, 456, 3136],
            [8, 1, 786, 456, 2306],
            [0, 3, 0, 0, 0],
            [19, 2, 78, 78, 1313]
        ];
    }

}
