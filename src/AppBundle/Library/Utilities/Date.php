<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 20:34
 */

namespace AppBundle\Library\Utilities;

/**
 * Class Date
 * @package AppBundle\Library\Utilities
 * <br />
 * <br />
 * Responsibility of Class: Operations on Date
 * <br />
 * Reason for change: Implement more operations on DateTime
 * */
class Date
{
    /**
     * @return \DateTime
     */
    public static function getDateTime(): \DateTime
    {
        return new \DateTime();
    }

    /**
     * @param string $sDateTime
     * @return \DateTime
     */
    public static function getDateTimeFromString(string $sDateTime) : \DateTime
    {
        return new \DateTime($sDateTime);
    }

    /**
     * @param \DateTime $oDateTime
     * @param int $iDaysToAdd
     * @return \DateTime
     */
    public static function addDaysToDateTime(\DateTime $oDateTime, int $iDaysToAdd) : \DateTime
    {
        if ($iDaysToAdd > 0) {
            $oDateTime->add(new \DateInterval('P' . $iDaysToAdd . 'D'));
        } else {
            $oDateTime->sub(new \DateInterval('P' . abs($iDaysToAdd) . 'D'));
        }

        return $oDateTime;
    }

    /**
     * @param \DateTime $oDateTimeStart
     * @param \DateTime $oDateTimeEnd
     * @return int
     */
    public static function countDateDaysAbsDiff(\DateTime $oDateTimeStart, \DateTime $oDateTimeEnd) : int
    {
        $oDateTimeStart->setTime(0, 0, 0);
        $oDateTimeEnd->setTime(0, 0, 0);
        return intval($oDateTimeStart->diff($oDateTimeEnd)->days);
    }

    /**
     * @param \DateTime $oDateTimeStart
     * @param \DateTime $oDateTimeEnd
     * @return int
     */
    public static function countDateDaysDiff(\DateTime $oDateTimeStart, \DateTime $oDateTimeEnd) : int
    {
        $oDateTimeStart->setTime(0, 0, 0);
        $oDateTimeEnd->setTime(0, 0, 0);
        $oDateDiff = $oDateTimeStart->diff($oDateTimeEnd);

        if ($oDateDiff->invert === 0) {
            $diff = -$oDateTimeStart->diff($oDateTimeEnd)->days;
        } else {
            $diff = $oDateTimeStart->diff($oDateTimeEnd)->days;
        }

        return intval($diff);
    }

    /**
     * @param \DateTime $oDateTimeStart
     * @param \DateTime $oDateTimeEnd
     * @return int
     */
    public static function countDateHoursAbsDiff(\DateTime $oDateTimeStart, \DateTime $oDateTimeEnd) : int
    {
        $oDateDiff = $oDateTimeStart->diff($oDateTimeEnd);
        return intval($oDateDiff->h + ($oDateDiff->days * 24));
    }

    /**
     * @param \DateTime $oDateTimeStart
     * @param \DateTime $oDateTimeEnd
     * @return int
     */
    public static function countDateMinutesDiff(\DateTime $oDateTimeStart, \DateTime $oDateTimeEnd) : int
    {
        $oDateDiff = $oDateTimeStart->diff($oDateTimeEnd);

        $minute = $oDateDiff->i;
        $hours = $oDateDiff->h;
        $hours = $hours + ($oDateDiff->days * 24);
        return intval($minute + ($hours * 60));
    }
}
