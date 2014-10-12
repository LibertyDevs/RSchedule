<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests\Entity\User;

use Doctrine\ORM\EntityRepository;
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

    public function testGetUser()
    {

        $userRepository = $this->_getObject();
        $user = $userRepository->findByUserId(1);
        var_dump($user);

    }

}
