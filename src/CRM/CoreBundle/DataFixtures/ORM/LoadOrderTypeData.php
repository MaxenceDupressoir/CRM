<?php

namespace CRM\CRMCoreBundle\DataFixtures\ORM;

use CRM\CoreBundle\Entity\OrderType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadOrderTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {

        $orderTypes = array(
            0 => array(
                'name' => 'Solo',
            ),
            1 => array(
                'name' => 'Duo',
            ),
            2 => array(
                'name' => 'Group',
            ),
            3 => array(
                'name' => 'Wedding',
            ),
            4 => array(
                'name' => 'Minishoot',
            ),
            5 => array(
                'name' => 'Lookbook',
            ),
            6 => array(
                'name' => 'Childbearing',
            ),
            7 => array(
                'name' => 'Designer',
            )
        );

        foreach ($orderTypes as $key => $data) {
            $orderType = new OrderType();
            $orderType->setName($data['name']);

            $manager->persist($orderType);
            $this->addReference('orderTypes'.$key, $orderType);
        }

        $manager->flush();
    }


    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }

}