<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\Schedule;

use RSchedule\Bundle\RScheduleBundle\Entity\Entity;
use RSchedule\Bundle\RScheduleBundle\Entity\Schedule\ScheduleOpenRange;

class Schedule extends Entity
{
    /**
     * @param string $title
     */
    private $title;

    /**
     * @param string $place
     */
    private $place;

    /**
     * @param string $notes
     */
    private $notes;

    /**
     * @param ScheduleOpenRange $scheduleOpenRange
     */
    private $scheduleOpenRange;

    /**
     * @param \DateTime $scheduleDateTime
     */
    private $scheduleDateTime;

    public function __construct( $title, $place, $notes, ScheduleOpenRange $scheduleOpenRange, \DateTime $scheduleDateTime)
    {
        parent::__construct();
    }

}