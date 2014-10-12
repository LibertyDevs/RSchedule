<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity\User;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 */
class UserRepository extends EntityRepository implements IUserRepository
{

    public function findByUserId($user_id)
    {
        return $this->find($user_id);
    }

    public function save(User $newUser)
    {
        $this->getEntityManager()->persist($newUser);
        $this->getEntityManager()->flush();
        return $newUser;
    }
}
