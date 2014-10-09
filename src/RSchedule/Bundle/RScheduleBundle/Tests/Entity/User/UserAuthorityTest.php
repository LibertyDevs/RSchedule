<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests\Entity\User;

use RSchedule\Bundle\RScheduleBundle\Tests\RScheduleBundleTestCase;
use RSchedule\Bundle\RScheduleBundle\Entity\User\UserAuthority;

/**
 * Class UserAuthorityTest
 * @package RSchedule\Bundle\RScheduleBundle\Tests\Entity\User
 *
 */
class UserAuthorityTest extends RScheduleBundleTestCase
{

    public function testConstruct()
    {
        try {
            $userAuthority = new UserAuthority(null);
            $this->fail("定数定義がありません");
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals("does not definition:", $e->getMessage());
        }
        try {
            $userAuthority = new UserAuthority(2);
            $this->fail("定数定義がありません");
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals("does not definition:2", $e->getMessage());
        }
        try {
            $userAuthority = new UserAuthority("0");
            $this->fail("定数定義がありません");
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals("does not definition:0", $e->getMessage());
        }

        $userAuthority = new UserAuthority(UserAuthority::OPERATOR);
        $this->assertInstanceOf("RSchedule\Bundle\RScheduleBundle\Entity\User\UserAuthority", $userAuthority);
    }

    public function testIsAdmin()
    {
        $userAuthority = new UserAuthority(UserAuthority::ADMIN);
        $this->assertEquals(true, $userAuthority->isAdmin());

        $userAuthority = new UserAuthority(UserAuthority::OPERATOR);
        $this->assertEquals(false, $userAuthority->isAdmin());
    }

    public function testIsOperator()
    {
        $userAuthority = new UserAuthority(UserAuthority::ADMIN);
        $this->assertEquals(false, $userAuthority->isOperator());

        $userAuthority = new UserAuthority(UserAuthority::OPERATOR);
        $this->assertEquals(true, $userAuthority->isOperator());
    }

}