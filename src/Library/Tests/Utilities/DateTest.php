<?php
/**
 * Created by PhpStorm.
 * User: maciej
 * Date: 08.07.16
 * Time: 20:44
 */

namespace Library\Tests\Utilities;


use Library\Utilities\Date;

class DateTest extends \PHPUnit_Framework_TestCase
{

    public function testGetDateTime()
    {
        $this->assertInstanceOf('\DateTime', Date::getDateTime());
        $this->assertEquals(date('Y-m-d H:i'), Date::getDateTime()->format('Y-m-d H:i'));
    }

    /**
     * @dataProvider getDateTimeFromStringProvider
     * @param string $dateString
     */
    public function testGetDateTimeFromString(string $dateString)
    {
        $date = Date::getDateTimeFromString($dateString);
        $dateCheck = new \DateTime($dateString);

        $this->assertInstanceOf('\DateTime', $date);
        $this->assertEquals($dateCheck->format('Y-m-d H:i'), $date->format('Y-m-d H:i'));
    }

    /**
     * @dataProvider addDaysToDateTimeProvider
     * @param string $dateString
     * @param int $daysToAdd
     * @param string $dateExcepted
     */
    public function testAddDaysToDateTime(string $dateString, int $daysToAdd, string $dateExcepted)
    {
        $date = new \DateTime($dateString);
        $date = Date::addDaysToDateTime($date, $daysToAdd);

        $this->assertInstanceOf('\DateTime', $date);
        $this->assertEquals($dateExcepted, $date->format('Y-m-d'));
    }

    /**
     * @dataProvider countDateDaysAbsDiffProvider
     * @param string $dateStartString
     * @param string $dateEndString
     * @param int $daysDiffExcepted
     */
    public function testCountDateDaysAbsDiff(string $dateStartString, string $dateEndString, int $daysDiffExcepted)
    {
        $dateStart = new \DateTime($dateStartString);
        $dateEnd = new \DateTime($dateEndString);
        $daysDiff = Date::countDateDaysAbsDiff($dateStart, $dateEnd);

        $this->assertEquals($daysDiffExcepted, $daysDiff);
    }

    /**
     * @dataProvider countDateDaysDiffProvider
     * @param string $dateStartString
     * @param string $dateEndString
     * @param int $daysDiffExcepted
     */
    public function testCountDateDaysDiff(string $dateStartString, string $dateEndString, int $daysDiffExcepted)
    {
        $dateStart = new \DateTime($dateStartString);
        $dateEnd = new \DateTime($dateEndString);
        $daysDiff = Date::countDateDaysDiff($dateStart, $dateEnd);

        $this->assertEquals($daysDiffExcepted, $daysDiff);
    }

    /**
     * @dataProvider countDateHoursAbsDiffProvider
     * @param string $dateStartString
     * @param string $dateEndString
     * @param int $hoursDiffExcepted
     */
    public function testCountDateHoursDiff(string $dateStartString, string $dateEndString, int $hoursDiffExcepted)
    {
        $dateStart = new \DateTime($dateStartString);
        $dateEnd = new \DateTime($dateEndString);
        $hoursDiff = Date::countDateHoursAbsDiff($dateStart, $dateEnd);

        $this->assertEquals($hoursDiffExcepted, $hoursDiff);
    }

    /**
     * @dataProvider countDateMinutesAbsDiffProvider
     * @param string $dateStartString
     * @param string $dateEndString
     * @param int $MinutesDiffExcepted
     */
    public function testCountDateMinutesDiff(string $dateStartString, string $dateEndString, int $MinutesDiffExcepted)
    {
        $dateStart = new \DateTime($dateStartString);
        $dateEnd = new \DateTime($dateEndString);
        $MinutesDiff = Date::countDateMinutesDiff($dateStart, $dateEnd);

        $this->assertEquals($MinutesDiffExcepted, $MinutesDiff);
    }

    /**
     * @return array
     */
    public function getDateTimeFromStringProvider() : array
    {
        return [
            ['2015-06-15'],
            ['2015-06-16'],
            ['2015-06-17'],
            ['2015-06-18'],
            ['2015-06-19'],
            ['2015-06-20'],
            ['2015-06-30'],
            ['1415-06-19']
        ];
    }

    /**
     * @return array
     */
    public function addDaysToDateTimeProvider() : array
    {
        return [
            ['2015-06-15', 5, '2015-06-20'],
            ['2015-06-16', 10, '2015-06-26'],
            ['2015-06-17', 30, '2015-07-17'],
            ['2015-06-18', 40, '2015-07-28'],
            ['2015-06-19', -19, '2015-05-31'],
            ['2015-06-20', -5, '2015-06-15'],
            ['2015-06-30', -9, '2015-06-21'],
            ['1415-06-19', -6, '1415-06-13']
        ];
    }

    /**
     * @return array
     */
    public function countDateDaysAbsDiffProvider() : array
    {
        return [
            ['2015-06-15', '2015-06-15', 0],
            ['2015-06-16', '2015-07-07', 21],
            ['2015-06-17', '2012-02-17', 1216],
            ['2015-06-18', '2019-07-11', 1484],
            ['2015-06-19', '2015-02-15', 124]
        ];
    }

    /**
     * @return array
     */
    public function countDateDaysDiffProvider() : array
    {
        return [
            ['2015-06-15', '2015-06-15', 0],
            ['2015-06-16', '2015-07-07', -21],
            ['2015-06-17', '2012-02-17', 1216],
            ['2015-06-18', '2019-07-11', -1484],
            ['2015-06-19', '2015-02-15', 124]
        ];
    }

    /**
     * @return array
     */
    public function countDateHoursAbsDiffProvider() : array
    {
        return [
            ['2015-06-15 15:00:00', '2015-06-15 14:00:00', 1],
            ['2015-06-16 14:00:00', '2015-07-07 14:00:00', 504],
            ['2015-06-17 16:59:59', '2015-06-17 17:00:00', 0],
            ['2015-06-18 14:00:00', '2019-07-11 14:00:00', 35616],
            ['2015-06-19 14:00:00', '2015-02-15 14:00:00', 2976]
        ];
    }

    /**
     * @return array
     */
    public function countDateMinutesAbsDiffProvider() : array
    {
        return [
            ['2015-06-15 15:45:00', '2015-06-15 14:15:00', 90],
            ['2015-06-16 14:58:00', '2015-07-07 14:12:00', 30194],
            ['2015-06-17 16:59:59', '2015-06-17 17:00:00', 0],
            ['2015-06-18 14:37:00', '2019-07-11 14:18:00', 2136941],
            ['2015-06-19 14:23:00', '2015-02-15 14:56:00', 178527]
        ];
    }

}
