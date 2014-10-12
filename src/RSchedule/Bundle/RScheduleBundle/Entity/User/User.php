<?php


namespace RSchedule\Bundle\RScheduleBundle\Entity\User;

use RSchedule\Bundle\RScheduleBundle\Entity\Entity;
use RSchedule\Bundle\RScheduleBundle\Entity\User\UserAuthority;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 * @package RSchedule\Bundle\RScheduleBundle\Entity\User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="RSchedule\Bundle\RScheduleBundle\Entity\User\UserRepository")
 */
class User extends Entity
{

    /**
     * @param string $name
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false, options={"comment" = "ユーザ名"})
     */
    private $name;

    /**
     * @param string $password
     *
     * @ORM\Column(name="password", type="string", length=128, nullable=false, options={"comment" = "パスワード"})
     */
    private $password;

    /**
     * @param string $mailAddress
     *
     * @ORM\Column(name="mail_address", type="string", length=128, nullable=false, options={"comment" = "メールアドレス"})
     */
    private $mailAddress;

    /**
     * @param UserAuthority $userAuthority
     *
     * @ORM\Embedded(class = "UserAuthority", columnPrefix = false))
     */
    private $userAuthority;

    public function __construct($name, $password, $mailAddress, UserAuthority $userAuthority)
    {
        $this->name = $name;
        $this->password = $password;
        $this->mailAddress = $mailAddress;
        $this->userAuthority = $userAuthority;
    }
}