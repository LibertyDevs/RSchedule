<?php

namespace RSchedule\Bundle\RScheduleBundle\Entity;


use Doctrine\ORM\EntityManager;

class RepositoryRegistry
{

    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * @return User\UserRepository
     */
    public function getUserRepository()
    {
        return $this->em->getRepository('RScheduleBundle:User\User');
    }

} 