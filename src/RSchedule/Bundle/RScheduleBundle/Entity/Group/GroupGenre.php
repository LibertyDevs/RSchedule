<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\Group;

use RSchedule\Bundle\RScheduleBundle\Entity\Enum;

final class GroupGenre extends Enum
{

    const SOCCER = 0;
    const BASEBALL = 1;

    private $genre;

    public function __construct($value)
    {
        $this->genre = parent::__construct($value);
    }

    public function getGenreName()
    {
        if ($this->valueOf() === self::SOCCER) {
            return "サッカー";
        } else if ($this->valueOf() === self::BASEBALL) {
            return "野球";
        }
    }

    /**
     * @return mixed
     */
    public function valueOf()
    {
        return $this->genre;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->genre;
    }

}