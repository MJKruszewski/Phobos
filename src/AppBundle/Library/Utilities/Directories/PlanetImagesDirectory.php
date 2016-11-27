<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 11:10
 */

namespace AppBundle\Library\Utilities\Directories;

use AppBundle\Library\Utilities\Constants\Directories\ClimateConstants;
use AppBundle\Library\Utilities\Constants\Directories\PlanetImagesConstants;

/**
 * Class PlanetImagesDirectory
 * @package AppBundle\Library\Utilities\Directories
 */
class PlanetImagesDirectory extends DirectoryAbstract
{
    const PLANET_PREFIX = 'planet';

    /**
     * @var string
     */
    private $path;

    /**
     * @var ClimateDirectory
     */
    private $climate_type;

    /**
     * PlanetImagesDirectory constructor.
     * @param ClimateDirectory $climate_type
     */
    public function __construct(ClimateDirectory $climate_type)
    {
        $this->climate_type = $climate_type;
    }

    /**
     * @return string
     */
    public function getPath() : string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    /**
     * @return ClimateDirectory
     */
    public function getClimateType() : ClimateDirectory
    {
        return $this->climate_type;
    }

    /**
     * @param ClimateDirectory $climate_type
     */
    public function setClimateType(ClimateDirectory $climate_type)
    {
        $this->climate_type = $climate_type;
    }

    /**
     * @param int $strategyId
     * @throws StrategyNotExistsException
     */
    public function prepareEntityByStrategy(int $strategyId)
    {
        if (PlanetImagesConstants::checkIfValueIsValidConstant($strategyId)) {
            $this->setConstantRepresentation($strategyId);
            $this->setName("mood_" . $strategyId);
            $this->setPath(
                "/public/imgs/Planets/" . $this->getClimateType()->getName() . "/"
                . ClimateConstants::getConstantPrefix($this->getClimateType()->getConstantRepresentation())
                . self::PLANET_PREFIX . $strategyId . ".jpg"
            );

        } else {
            throw new StrategyNotExistsException("Strategy: $strategyId does not exists");
        }
    }
}