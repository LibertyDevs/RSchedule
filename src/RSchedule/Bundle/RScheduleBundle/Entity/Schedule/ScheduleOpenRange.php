<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\Schedule;

use RSchedule\Bundle\RScheduleBundle\Entity\Enum;

final class ScheduleOpenRange extends Enum
{

    const GROUP_MEMBER = 0;
    const ANYONE = 1;

    private $open_range;

    public function __construct($value)
    {
        $this->open_range = parent::__construct($value);
    }

    /**
     * @return bool
     */
    public function isGroupMember()
    {
        if ($this->valueOf() === self::GROUP_MEMBER) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isAnyone()
    {
        if ($this->valueOf() === self::ANYONE) {
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function valueOf()
    {
        return $this->open_range;
    }

}