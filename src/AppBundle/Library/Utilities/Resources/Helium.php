<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 23.07.16
 * Time: 21:56
 */

namespace AppBundle\Library\Utilities\Resources;


class Helium extends ResourceAbstract
{

    public function calculateResource() : int
    {
        $baseValue = $this->getPlanet()->getHeliumMine()->getBaseValue() / 60;
        $happniesFactor = $this->getPlanet()->getHappinessLevel()->getLevel() * 0.25;

        /**
         * @todo implement factors like race technology etc etc
         */
        return $this->getPlanet()->getHelium() + ($baseValue * $happniesFactor) * $this->getDateDiff();
    }
}