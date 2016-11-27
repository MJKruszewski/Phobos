<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 22:08
 */

namespace AppBundle\Library\Utilities\Resources;


class Uranium extends ResourceAbstract
{
    /**
     * @return int
     */
    public function calculateResource() : int
    {
        $baseValue = $this->getPlanet()->getUraniumMine()->getBaseMiningValue() / 60;
        $happniesFactor = $this->getPlanet()->getHappinessLevel()->getConstantRepresentation() * 0.25;

        /**
         * @todo implement factors like race technology etc etc
         */
        return $this->getPlanet()->getUranium() + ($baseValue * $happniesFactor) * $this->getDateDiff();
    }
}