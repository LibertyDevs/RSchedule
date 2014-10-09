<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests\Entity\User;

use RSchedule\Bundle\RScheduleBundle\Tests\RScheduleBundleTestCase;
use RSchedule\Bundle\RScheduleBundle\Entity\User\User;
use RSchedule\Bundle\RScheduleBundle\Entity\User\UserAuthority;

class UserTest extends RScheduleBundleTestCase
{

    public function testConstruct()
    {
        $userRole = new UserAuthority(UserAuthority::ADMIN);
        $user = new User(1, "name", "password", "mailAddress", $userRole);

        $this->assertInstanceOf("GMan\Bundle\DomainBundle\Domain\User\User", $user);

        try {
            $user = new User("1", "name", "password", "mailAddress", $userRole);
            $this->fail("invalid validation");
        } catch (\InvalidArgumentException $e) {
            $this->assertTrue(true);
        }
        try {
            $user = new User(1, null, "password", "mailAddress", $userRole);
            $this->fail("invalid validation");
        } catch (\InvalidArgumentException $e) {
            $this->assertTrue(true);
        }
    }


}