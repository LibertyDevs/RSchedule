<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 */
interface IUserRepository
{
    public function findByUserId($id);
}
