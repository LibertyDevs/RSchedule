<?php

namespace RSchedule\Bundle\RScheduleBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Class RScheduleBundleTestCase
 * @package RSchedule\Bundle\RScheduleBundle\Tests
 *
 */
class RScheduleBundleTestCase extends WebTestCase
{

    protected function setUp()
    {
        self::createClient();
    }

    protected function getEntityManager()
    {
        return static::$kernel->getContainer()->get('doctrine')->getManager();
    }

    /**
     * @return \RSchedule\Bundle\RScheduleBundle\RScheduleBundle
     */
    protected function getBundle()
    {
        return static::$kernel->getBundle('RScheduleBundle');
    }
//    /**
//     * @var \Doctrine\ORM\EntityManager
//     */
//    private $em;
//
//    /**
//     * {@inheritDoc}
//     */
//    public function setUp()
//    {
//        self::bootKernel();
//        $this->em = static::$kernel->getContainer()
//            ->get('doctrine')
//            ->getManager();
//    }
//
//    /**
//     * @return \Doctrine\ORM\EntityManager
//     */
//    protected function getEntityManager()
//    {
//        return $this->em;
//    }
//
//    /**
//     * @return  \RSchedule\Bundle\RScheduleBundle\GmanBundle
//     */
//    protected function getBundle()
//    {
//        return static::$kernel->getBundle('GmanBundle');
//    }
//
//    /**
//     * {@inheritDoc}
//     */
//    protected function tearDown()
//    {
//        parent::tearDown();
//        //$this->em->close();
//    }
//
//    protected function getContainer()
//    {
//        $container = static::$kernel->getContainer();
//        return $container;
//    }
}