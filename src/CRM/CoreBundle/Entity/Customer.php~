<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 */
class Customer
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
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $phone;

    /**
     * @var integer
     */
    private $landLine;

    /**
     * @var boolean
     */
    private $newsLetter;

    /**
     * @var \CRM\CoreBundle\Entity\Physic
     */
    private $physic;

    /**
     * @var \CRM\CoreBundle\Entity\Address
     */
    private $address;

    /**
     * @var \CRM\CoreBundle\Entity\CustomerType
     */
    private $type;


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
     * @return Customer
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
     * Set firstName
     *
     * @param string $firstName
     * @return Customer
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param integer $phone
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return integer 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set landLine
     *
     * @param integer $landLine
     * @return Customer
     */
    public function setLandLine($landLine)
    {
        $this->landLine = $landLine;
    
        return $this;
    }

    /**
     * Get landLine
     *
     * @return integer 
     */
    public function getLandLine()
    {
        return $this->landLine;
    }

    /**
     * Set newsLetter
     *
     * @param boolean $newsLetter
     * @return Customer
     */
    public function setNewsLetter($newsLetter)
    {
        $this->newsLetter = $newsLetter;
    
        return $this;
    }

    /**
     * Get newsLetter
     *
     * @return boolean 
     */
    public function getNewsLetter()
    {
        return $this->newsLetter;
    }

    /**
     * Set physic
     *
     * @param \CRM\CoreBundle\Entity\Physic $physic
     * @return Customer
     */
    public function setPhysic(\CRM\CoreBundle\Entity\Physic $physic = null)
    {
        $this->physic = $physic;
    
        return $this;
    }

    /**
     * Get physic
     *
     * @return \CRM\CoreBundle\Entity\Physic
     */
    public function getPhysic()
    {
        return $this->physic;
    }

    /**
     * Set address
     *
     * @param \CRM\CoreBundle\Entity\Address $address
     * @return Customer
     */
    public function setAddress(\CRM\CoreBundle\Entity\Address $address = null)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return \CRM\CoreBundle\Entity\Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set type
     *
     * @param \CRM\CoreBundle\Entity\CustomerType $type
     * @return Customer
     */
    public function setType(\CRM\CoreBundle\Entity\CustomerType $type = null)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return \CRM\CoreBundle\Entity\CustomerType
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $orders;

    /**
     * @var \CRM\CoreBundle\Entity\Status
     */
    private $status;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add orders
     *
     * @param \CRM\CoreBundle\Entity\Order $orders
     * @return Customer
     */
    public function addOrder(\CRM\CoreBundle\Entity\Order $orders)
    {
        $this->orders[] = $orders;
    
        return $this;
    }

    /**
     * Remove orders
     *
     * @param \CRM\CoreBundle\Entity\Feature $orders
     */
    public function removeOrder(\CRM\CoreBundle\Entity\Feature $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set status
     *
     * @param \CRM\CoreBundle\Entity\Status $status
     * @return Customer
     */
    public function setStatus(\CRM\CoreBundle\Entity\Status $status = null)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return \CRM\CoreBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }
}