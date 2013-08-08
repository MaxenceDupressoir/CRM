<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Physic
 */
class Physic
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var integer
     */
    private $weight;

    /**
     * @var string
     */
    private $hair;

    /**
     * @var integer
     */
    private $chest;

    /**
     * @var integer
     */
    private $cup;

    /**
     * @var integer
     */
    private $waist;

    /**
     * @var integer
     */
    private $hips;

    /**
     * @var integer
     */
    private $feet;


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
     * Set height
     *
     * @param integer $height
     * @return Physic
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return integer 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Physic
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set hair
     *
     * @param string $hair
     * @return Physic
     */
    public function setHair($hair)
    {
        $this->hair = $hair;
    
        return $this;
    }

    /**
     * Get hair
     *
     * @return string 
     */
    public function getHair()
    {
        return $this->hair;
    }

    /**
     * Set chest
     *
     * @param integer $chest
     * @return Physic
     */
    public function setChest($chest)
    {
        $this->chest = $chest;
    
        return $this;
    }

    /**
     * Get chest
     *
     * @return integer 
     */
    public function getChest()
    {
        return $this->chest;
    }

    /**
     * Set cup
     *
     * @param integer $cup
     * @return Physic
     */
    public function setCup($cup)
    {
        $this->cup = $cup;
    
        return $this;
    }

    /**
     * Get cup
     *
     * @return integer 
     */
    public function getCup()
    {
        return $this->cup;
    }

    /**
     * Set waist
     *
     * @param integer $waist
     * @return Physic
     */
    public function setWaist($waist)
    {
        $this->waist = $waist;
    
        return $this;
    }

    /**
     * Get waist
     *
     * @return integer 
     */
    public function getWaist()
    {
        return $this->waist;
    }

    /**
     * Set hips
     *
     * @param integer $hips
     * @return Physic
     */
    public function setHips($hips)
    {
        $this->hips = $hips;
    
        return $this;
    }

    /**
     * Get hips
     *
     * @return integer 
     */
    public function getHips()
    {
        return $this->hips;
    }

    /**
     * Set feet
     *
     * @param integer $feet
     * @return Physic
     */
    public function setFeet($feet)
    {
        $this->feet = $feet;
    
        return $this;
    }

    /**
     * Get feet
     *
     * @return integer 
     */
    public function getFeet()
    {
        return $this->feet;
    }
}