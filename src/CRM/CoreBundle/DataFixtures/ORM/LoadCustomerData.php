<?php

namespace CRM\CRMCoreBundle\DataFixtures\ORM;

use CRM\CoreBundle\Entity\Customer;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCustomerData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
    * {@inheritDoc}
    */
    public function load(ObjectManager $manager)
    {

        $customers = array(
            0 => array(
                'name' => 'Doe',
                'firstName' => 'Jon',
                'email' => 'jon.doe@exemple.com',
                'phone' => '0659874135',
                'landLine' => '0326589425',
                'newsLetter' => 0,
                'type' => 1,
                'status' => 1,
            ),
            1 => array(
                'name' => 'Doe',
                'firstName' => 'Jane',
                'email' => 'jane.doe@exemple.com',
                'phone' => '0659874135',
                'landLine' => '0326589425',
                'newsLetter' => 1,
                'type' => 1,
                'status' => 0,
            ),
            2 => array(
                'name' => 'Darth',
                'firstName' => 'Vader',
                'email' => 'vader.darth@deathstar.com',
                'phone' => '0666666666',
                'landLine' => '0326584825',
                'newsLetter' => 0,
                'type' => 0,
                'status' => 2,
            ),
            3 => array(
                'name' => 'Darth',
                'firstName' => 'Maul',
                'email' => 'maul.darth@darkside.com',
                'phone' => '0659874135',
                'landLine' => '0326589425',
                'newsLetter' => 1,
                'type' => 0,
                'status' => 1,
            ),
            4 => array(
                'name' => 'Skywalker',
                'firstName' => 'Anakin',
                'email' => 'anakin.skywalker@gmail.com',
                'phone' => '0659874135',
                'landLine' => '0326589425',
                'newsLetter' => 0,
                'type' => 1,
                'status' => 0,
            ),
            5 => array(
                'name' => 'Jinn',
                'firstName' => 'Qui-gon',
                'email' => 'qui-gon.jinn@gmail.com',
                'phone' => '0659874135',
                'landLine' => '0326589425',
                'newsLetter' => 0,
                'type' => 1,
                'status' => 2,
            )

        );

        foreach ($customers as $key => $data) {

            $customer = new Customer();
            $customer->setName($data['name']);
            $customer->setFirstName($data['firstName']);
            $customer->setEmail($data['email']);
            $customer->setPhone($data['landLine']);
            $customer->setNewsLetter($data['newsLetter']);
            $customer->setType($this->getReference('customerType'.$data['type']));
            $customer->setStatus($this->getReference('status'.$data['status']));

            $manager->persist($customer);
            $this->addReference('customer'.$key, $customer);
        }

        $manager->flush();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 100;
    }
}