<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 22:39
 */

namespace AppBundle\Library\Utilities\Directories;

use AppBundle\Library\Utilities\Constants\Directories\ClimateConstants;

class ClimateDirectory extends DirectoryAbstract
{

    /**
     * @param int $strategyId
     * @throws StrategyNotExistsException
     */
    public function prepareEntityByStrategy(int $strategyId)
    {
        if (ClimateConstants::checkIfValueIsValidConstant($strategyId)) {
            $this->setConstantRepresentation($strategyId);
            $this->setName("climate_" . $strategyId);
        } else {
            throw new StrategyNotExistsException("Strategy: $strategyId does not exists");
        }
    }
}