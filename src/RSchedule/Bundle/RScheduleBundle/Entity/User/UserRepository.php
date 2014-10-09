<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 */
class UserRepository extends EntityRepository
{

    public function getUser($id)
    {
        return $this->find('1');
    }
}
