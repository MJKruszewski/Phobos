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
 * Class ClimateConstants
 * @package AppBundle\Library\Utilities\Constants\Directories
 */
class ClimateConstants implements ConstantsListInterface
{

    const VOLCANO_PLANET = 1;
    const VOLCANO_PLANET_PREFIX = 'volcano';

    const SWAMP_PLANET = 2;
    const SWAMP_PLANET_PREFIX = 'swamp';

    const OCEAN_PLANET = 3;
    const OCEAN_PLANET_PREFIX = 'ocean';

    const JUNGLE_PLANET = 4;
    const JUNGLE_PLANET_PREFIX = 'jungle';

    const ICE_PLANET = 5;
    const ICE_PLANET_PREFIX = 'ice';

    const FOREST_PLANET = 6;
    const FOREST_PLANET_PREFIX = 'forest';

    const DESERT_PLANET = 7;
    const DESERT_PLANET_PREFIX = 'desert';

    const DEATH_WORLD = 8;
    const DEATH_WORLD_PREFIX = 'death';

    /**
     * @return array
     */
    public static function getConstantsList() : array
    {
        return
            [
                self::VOLCANO_PLANET,
                self::SWAMP_PLANET,
                self::OCEAN_PLANET,
                self::JUNGLE_PLANET,
                self::ICE_PLANET,
                self::FOREST_PLANET,
                self::DEATH_WORLD,
                self::DESERT_PLANET
            ];
    }

    public static function getConstantPrefix(int $constant) : string
    {
        switch ($constant) {
            case self::VOLCANO_PLANET:
                return self::VOLCANO_PLANET_PREFIX;
            case self::SWAMP_PLANET:
                return self::SWAMP_PLANET_PREFIX;
            case self::OCEAN_PLANET:
                return self::OCEAN_PLANET_PREFIX;
            case self::JUNGLE_PLANET:
                return self::JUNGLE_PLANET_PREFIX;
            case self::ICE_PLANET:
                return self::ICE_PLANET_PREFIX;
            case self::FOREST_PLANET:
                return self::FOREST_PLANET_PREFIX;
            case self::DESERT_PLANET:
                return self::DESERT_PLANET_PREFIX;
            case self::DEATH_WORLD:
                return self::DEATH_WORLD_PREFIX;
            default :
                return '';
        }
    }

    /**
     * @param int $constant
     * @return bool
     */
    public static function checkIfValueIsValidConstant(int $constant) : bool
    {
        return in_array($constant, self::getConstantsList());
    }
}