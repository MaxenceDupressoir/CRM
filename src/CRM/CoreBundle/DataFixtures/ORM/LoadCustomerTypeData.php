<?php

namespace CRM\CRMCoreBundle\DataFixtures\ORM;

use CRM\CoreBundle\Entity\CustomerType;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCustomerTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {

        $customerTypes = array(
            0 => array(
                'name' => 'Customer',
            ),
            1 => array(
                'name' => 'Agency',
            )
        );

        foreach ($customerTypes as $key => $data) {
            $customerType = new CustomerType();
            $customerType->setName($data['name']);

            $manager->persist($customerType);
            $this->addReference('customerType'.$key, $customerType);
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