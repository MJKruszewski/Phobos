<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 26.11.16
 * Time: 10:36
 */

namespace AppBundle\Library\Utilities\Directories;

/**
 * Interface DirectoryStrategyInterface
 * @package AppBundle\Library\Utilities\Directories
 */
interface DirectoryStrategyInterface
{
    /**
     * @param int $strategyId
     * @return void
     */
    public function prepareEntityByStrategy(int $strategyId);
}