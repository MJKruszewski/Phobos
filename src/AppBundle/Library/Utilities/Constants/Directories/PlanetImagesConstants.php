<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 26.11.16
 * Time: 09:01
 */

namespace AppBundle\Library\Utilities\Constants\Directories;

use AppBundle\Library\Utilities\Constants\ConstantsListInterface;

/**
 * Class PlanetImagesConstants
 * @package AppBundle\Library\Utilities\Constants\Directories
 */
class PlanetImagesConstants implements ConstantsListInterface
{
    const TYPE_IMAGE_1 = 1;
    const TYPE_IMAGE_2 = 2;
    const TYPE_IMAGE_3 = 3;
    const TYPE_IMAGE_4 = 4;

    /**
     * @return array
     */
    public static function getConstantsList() : array
    {
        return
            [
                self::TYPE_IMAGE_1,
                self::TYPE_IMAGE_2,
                self::TYPE_IMAGE_3,
                self::TYPE_IMAGE_4
            ];
    }

    public static function checkIfValueIsValidConstant(int $constant) : bool
    {
        return in_array($constant, self::getConstantsList());
    }
}