<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\Group;

use RSchedule\Bundle\RScheduleBundle\Entity\Entity;
use RSchedule\Bundle\RScheduleBundle\Entity\Group\GroupRegion;
use RSchedule\Bundle\RScheduleBundle\Entity\Group\GroupOpenRange;
use RSchedule\Bundle\RScheduleBundle\Entity\Group\GroupGenre;

/**
 * Class Group
 * @package RSchedule\Bundle\RScheduleBundle\Entity\Group
 *
 */
class Group extends Entity
{
    /**
     * @param GroupGenre $groupGenre
     */
    private $groupGenre;

    /**
     * @param string $name
     */
    private $name;

    /**
     * @param string $introduction
     */
    private $introduction;

    /**
     * @param string $url
     */
    private $url;

    /**
     * @param GroupRegion $groupRegion
     */
    private $groupRegion;

    /**
     * @param GroupOpenRange $groupOpenRange
     */
    private $groupOpenRange;


    public function __construct($name, $activityContents, $url, GroupRegion $groupRegion)
    {
        parent::__construct();
    }

}