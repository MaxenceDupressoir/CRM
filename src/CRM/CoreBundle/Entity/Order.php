<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 */
class Order
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \CRM\CoreBundle\Entity\OrderType
     */
    private $type;

    /**
     * @var \CRM\CoreBundle\Entity\Customer
     */
    private $customer;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Order
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param \CRM\CoreBundle\Entity\OrderType $type
     * @return Order
     */
    public function setType(\CRM\CoreBundle\Entity\OrderType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \CRM\CoreBundle\Entity\OrderType 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set customer
     *
     * @param \CRM\CoreBundle\Entity\Customer $customer
     * @return Order
     */
    public function setCustomer(\CRM\CoreBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;
    
        return $this;
    }

    /**
     * Get customer
     *
     * @return \CRM\CoreBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}
