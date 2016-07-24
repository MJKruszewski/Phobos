<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 21:56
 */

namespace AppBundle\Library\Utilities\Resources;


class Silicon extends ResourceAbstract
{
    /**
     * @return int
     */
    public function calculateResource() : int
    {
        $baseValue = $this->getPlanet()->getSiliconMine()->getBaseValue() / 60;
        $happniesFactor = $this->getPlanet()->getHappinessLevel()->getLevel() * 0.25;

        /**
         * @todo implement factors like race technology etc etc
         */
        return $this->getPlanet()->getSilicon() + ($baseValue * $happniesFactor) * $this->getDateDiff();
    }
}