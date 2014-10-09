<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests\Entity\User;

use RSchedule\Bundle\RScheduleBundle\Tests\RScheduleBundleTestCase;
use RSchedule\Bundle\RScheduleBundle\Entity\Entity;

class EntityTest extends RScheduleBundleTestCase
{

    private function _getObject()
    {
        return new EntityImp();
    }

    public function testAssertInt()
    {
        $obj = $this->_getObject();
        $message = "exception message:";

        $expected_value = 0;
        $this->assertEquals(true, $obj->assertInteger($expected_value, $message));

        try {
            $expected_value = null;
            $obj->assertInteger($expected_value, $message);
            $this->fail("invalid validation");
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals($obj->createMessage($expected_value, $message), $e->getMessage());
        }
    }

    public function testAssertNotEmpty()
    {
        $obj = $this->_getObject();
        $message = "exception message:";
        $expected_value = 0;

        $this->assertEquals(true, $obj->assertNotEmpty($expected_value, $message));

        try {
            $expected_value = null;
            $this->assertEquals(true, $obj->assertInteger($expected_value, $message));
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals($obj->createMessage($expected_value, $message), $e->getMessage());
        }
        try {
            $expected_value = "";
            $this->assertEquals(true, $obj->assertInteger($expected_value, $message));
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals($obj->createMessage($expected_value, $message), $e->getMessage());
        }
        try {
            $expected_value = " _";
            $this->assertEquals(true, $obj->assertInteger($expected_value, $message));
        } catch (\InvalidArgumentException $e) {
            $this->assertEquals($obj->createMessage($expected_value, $message), $e->getMessage());
        }
    }
}

final class EntityImp extends Entity
{
    public function createMessage($value, $message)
    {
        return parent::createMessage($value, $message);
    }

    public function assertInteger($value, $message)
    {
        return parent::assertInteger($value, $message);
    }

    public function assertNotEmpty($value, $message)
    {
        return parent::assertNotEmpty($value, $message);
    }
}