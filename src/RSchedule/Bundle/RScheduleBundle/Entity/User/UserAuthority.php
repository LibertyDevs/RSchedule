<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\User;

use RSchedule\Bundle\RScheduleBundle\Entity\Enum;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class UserAuthority
 * @package RSchedule\Bundle\RScheduleBundle\Entity\User
 *
 * @ORM\Embeddable
 */
final class UserAuthority extends Enum
{
    /**
     * 管理者権限
     */
    const ADMIN = 0;
    /**
     * 管理者権限なし
     */
    const OTHER = 1;

    /**
     * @ORM\Column(name="authority", columnDefinition="TINYINT(1) DEFAULT 1 NOT NULL", options={"comment" = "権限"})
     */
    private $authority;


    /**
     * @param $value
     */
    public function __construct($value)
    {
        $this->authority = parent::__construct($value);
    }

    /**
     * @return bool
     */
    public function isAdmin()
    {
        if ($this->valueOf() === self::ADMIN) {
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    public function isOther()
    {
        if ($this->valueOf() === self::OTHER) {
            return true;
        }

        return false;
    }

    /**
     * @return mixed
     */
    public function valueOf()
    {
        return $this->authority;
    }


    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->authority;
    }

}