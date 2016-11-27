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
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Buildings\Mines\FerrumMine;
use AppBundle\Library\Utilities\Resources\Ferrum;

class FerrumTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider PrepareValuesProvider
     * @param $mineLevel
     * @param $happinessLevel
     * @param $ferrumQuantity
     * @param $dateDiff
     * @param $exceptedValue
     * @internal param $baseValue
     */
    public function testCalculateResource($mineLevel, $happinessLevel, $ferrumQuantity, $dateDiff, $exceptedValue)
    {
        $ferrumMine = new FerrumMine();
        $ferrumMine->setBuildingLevel($mineLevel);

        $happniessDirectory = new HappinessDirectory();
        $happniessDirectory->setLevel($happinessLevel);

        $planet = new Planet();
        $planet->setFerrum($ferrumQuantity);
        $planet->setFerrumMine($ferrumMine);
        $planet->setHappinessLevel($happniessDirectory);

        $ferrum = new Ferrum();
        $ferrum->setPlanet($planet);
        $ferrum->setDateDiff($dateDiff);

        $this->assertEquals($exceptedValue, $ferrum->calculateResource());
    }

    public function PrepareValuesProvider()
    {
        return [
            [5, 5, 300, 60, 925],
            [7, 3, 856, 99043, 867482],
            [0, 3, 856, 99043, 856],
            [4, 4, 856, 456, 3896],
            [1, 1, 786, 456, 976],
            [4, 3, 0, 0, 0],
            [3, 2, 78, 78, 273]
        ];
    }

}
