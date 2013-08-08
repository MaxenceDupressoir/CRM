<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agenda
 */
class Agenda
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $appointments;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->appointments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
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
     * @return Agenda
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
     * Add appointments
     *
     * @param \CRM\CoreBundle\Entity\Appointment $appointments
     * @return Agenda
     */
    public function addAppointment(\CRM\CoreBundle\Entity\Appointment $appointments)
    {
        $this->appointments[] = $appointments;
    
        return $this;
    }

    /**
     * Remove appointments
     *
     * @param \CRM\CoreBundle\Entity\Appointment $appointments
     */
    public function removeAppointment(\CRM\CoreBundle\Entity\Appointment $appointments)
    {
        $this->appointments->removeElement($appointments);
    }

    /**
     * Get appointments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAppointments()
    {
        return $this->appointments;
    }
}