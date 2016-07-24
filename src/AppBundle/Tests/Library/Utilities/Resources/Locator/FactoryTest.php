<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 19:40
 */

namespace AppBundle\Tests\Library\Utilities\Resources\Locator;


use AppBundle\Entity\Planet;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Resources\Credits;
use AppBundle\Library\Utilities\Resources\Ferrum;
use AppBundle\Library\Utilities\Resources\Helium;
use AppBundle\Library\Utilities\Resources\Locator\Factory;
use AppBundle\Library\Utilities\Resources\ResourceBuilder;
use AppBundle\Library\Utilities\Resources\Silicon;
use AppBundle\Library\Utilities\Resources\Uranium;

class FactoryTest extends \PHPUnit_Framework_TestCase
{
    public function testCreditsResource()
    {
        $this->markTestIncomplete();

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }

    public function testUraniumResource()
    {
        $resource = Factory::uraniumResource(new User(), new Planet(), random_int(0, 5000000));

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }

    public function testFerrumResource()
    {
        $resource = Factory::ferrumResource(new User(), new Planet(), random_int(0, 5000000));

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }

    public function testSiliconResource()
    {
        $resource = Factory::siliconResource(new User(), new Planet(), random_int(0, 5000000));

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }

    public function testHeliumResource()
    {
        $resource = Factory::heliumResource(new User(), new Planet(), random_int(0, 5000000));

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }
}
