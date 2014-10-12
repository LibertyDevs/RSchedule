<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests\Entity\User;

use Doctrine\ORM\EntityRepository;
use RSchedule\Bundle\RScheduleBundle\Entity\User\User;
use RSchedule\Bundle\RScheduleBundle\Entity\User\UserAuthority;
use RSchedule\Bundle\RScheduleBundle\Tests\RScheduleBundleTestCase;

/**
 * UserRepositoryTest
 *
 */
class UserRepositoryTest extends RScheduleBundleTestCase
{

    public function _getObject()
    {
        return $this->getBundle()->getRepositoryRegistry()->getUserRepository();
    }

    public function testSave()
    {
        $user = new User(
            "name",
            "password",
            "mailAddress",
            new UserAuthority(UserAuthority::ADMIN)
        );

        $userRepository = $this->_getObject();
        $newUser = $userRepository->save($user);

    }

}
