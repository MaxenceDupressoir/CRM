<?php

namespace CRM\CRMCoreBundle\DataFixtures\ORM;

use CRM\CoreBundle\Entity\Status;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadStatusData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {

        $statuses = array(
            0 => array(
                'name' => 'Account',
            ),
            1 => array(
                'name' => 'Prospect',
            ),
            2 => array(
                'name' => 'Competitor',
            )
        );

        foreach ($statuses as $key => $data) {
            $status = new Status();
            $status->setName($data['name']);

            $manager->persist($status);
            $this->addReference('status'.$key, $status);
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