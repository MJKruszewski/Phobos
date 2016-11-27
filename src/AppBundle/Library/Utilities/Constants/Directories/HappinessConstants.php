<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 26.11.16
 * Time: 09:00
 */

namespace AppBundle\Library\Utilities\Constants\Directories;

use AppBundle\Library\Utilities\Constants\ConstantsListInterface;

/**
 * Class HappinessConstants
 * @package AppBundle\Library\Utilities\Constants\Directories
 */
class HappinessConstants implements ConstantsListInterface
{
    const UNHAPPY = 1;
    const LOW_HAPPY = 2;
    const MED_HAPPY = 3;
    const HAPPY = 4;
    const MAX_HAPPY = 5;

    /**
     * @return array
     */
    public static function getConstantsList() : array
    {
        return
            [
                self::UNHAPPY,
                self::LOW_HAPPY,
                self::MED_HAPPY,
                self::HAPPY,
                self::MAX_HAPPY
            ];
    }

    public static function checkIfValueIsValidConstant(int $constant) : bool
    {
        return in_array($constant, self::getConstantsList());
    }
}