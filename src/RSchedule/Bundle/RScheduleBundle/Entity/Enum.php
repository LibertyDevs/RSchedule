<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity;

abstract class Enum
{

    public function __construct($value)
    {
        $ref = new \ReflectionClass(get_class($this));
        $constants = $ref->getConstants();
        if (!in_array($value, $constants, true)) {
            throw new \InvalidArgumentException("does not definition:{$value}");
        }

        return $value;
    }

    abstract public function valueOf();

    abstract public function __toString();

}