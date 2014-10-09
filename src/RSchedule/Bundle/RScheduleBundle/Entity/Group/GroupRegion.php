<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\Group;

use RSchedule\Bundle\RScheduleBundle\Entity\Entity;

class GroupRegion extends Entity
{

    /**
     * @param $name
     */
    private $name;


    /**
     * @param string $name
     */
    public function __construct( $name)
    {
        parent::__construct();
    }

}