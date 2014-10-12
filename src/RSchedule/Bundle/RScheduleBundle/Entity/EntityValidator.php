<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity;


trait EntityValidator
{
    private function createMessage($value, $message)
    {
        return $message . ":" . $value;
    }

    protected function assertInteger($value, $message)
    {
        if (is_int($value)) {
            return true;
        }
        throw new \InvalidArgumentException($this->createMessage($value, $message));
    }

    protected function assertNotEmpty($value, $message)
    {
        if (strlen($value) > 0) {
            return true;
        }
        throw new \InvalidArgumentException($this->createMessage($value, $message));
    }
} 