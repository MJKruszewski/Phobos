<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 22.07.16
 * Time: 20:15
 */

namespace AppBundle\Library\Utilities\Directories;

use AppBundle\Library\Utilities\Constants\Directories\HappinessConstants;

/**
 * Class HappinessDirectory
 * @package AppBundle\Library\Utilities\Directories
 */
class HappinessDirectory extends DirectoryAbstract
{

    /**
     * @see HappinessConstants
     * @param int $strategyId
     * @throws StrategyNotExistsException
     */
    public function prepareEntityByStrategy(int $strategyId)
    {
        if (HappinessConstants::checkIfValueIsValidConstant($strategyId)) {
            $this->setConstantRepresentation($strategyId);
            $this->setName("mood_" . $strategyId);
        } else {
            throw new StrategyNotExistsException("Strategy: $strategyId does not exists");
        }
    }
}