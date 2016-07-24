<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 24.07.16
 * Time: 20:03
 */

namespace AppBundle\Tests\Library\Utilities\Resources;


use AppBundle\Entity\Planet;
use AppBundle\Entity\User;
use AppBundle\Library\Utilities\Resources\Ferrum;
use AppBundle\Library\Utilities\Resources\ResourceBuilder;

class ResourceBuilderTest extends \PHPUnit_Framework_TestCase
{

    public function testBuild()
    {
        $resourceBuilder = new ResourceBuilder();
        $resource = $resourceBuilder->build(new Ferrum(), new User(), new Planet(), random_int(0, 10000));

        $this->assertInstanceOf('AppBundle\Library\Utilities\Resources\ResourceInterface', $resource);
    }

}
