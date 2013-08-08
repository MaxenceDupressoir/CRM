<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Appointment
 */
class Appointment
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var \DateTime
     */
    private $hourStart;

    /**
     * @var \DateTime
     */
    private $hourEnd;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set title
     *
     * @param string $title
     * @return Appointment
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set hourStart
     *
     * @param \DateTime $hourStart
     * @return Appointment
     */
    public function setHourStart($hourStart)
    {
        $this->hourStart = $hourStart;
    
        return $this;
    }

    /**
     * Get hourStart
     *
     * @return \DateTime 
     */
    public function getHourStart()
    {
        return $this->hourStart;
    }

    /**
     * Set hourEnd
     *
     * @param \DateTime $hourEnd
     * @return Appointment
     */
    public function setHourEnd($hourEnd)
    {
        $this->hourEnd = $hourEnd;
    
        return $this;
    }

    /**
     * Get hourEnd
     *
     * @return \DateTime 
     */
    public function getHourEnd()
    {
        return $this->hourEnd;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Appointment
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}