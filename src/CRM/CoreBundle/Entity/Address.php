<?php

namespace CRM\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Address
 */
class Address
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $flatFlor;

    /**
     * @var string
     */
    private $building;

    /**
     * @var string
     */
    private $numberAndStreet;

    /**
     * @var string
     */
    private $postBox;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $town;

    /**
     * @var string
     */
    private $country;


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
     * Set flatFlor
     *
     * @param string $flatFlor
     * @return Address
     */
    public function setFlatFlor($flatFlor)
    {
        $this->flatFlor = $flatFlor;
    
        return $this;
    }

    /**
     * Get flatFlor
     *
     * @return string 
     */
    public function getFlatFlor()
    {
        return $this->flatFlor;
    }

    /**
     * Set building
     *
     * @param string $building
     * @return Address
     */
    public function setBuilding($building)
    {
        $this->building = $building;
    
        return $this;
    }

    /**
     * Get building
     *
     * @return string 
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set numberAndStreet
     *
     * @param string $numberAndStreet
     * @return Address
     */
    public function setNumberAndStreet($numberAndStreet)
    {
        $this->numberAndStreet = $numberAndStreet;
    
        return $this;
    }

    /**
     * Get numberAndStreet
     *
     * @return string 
     */
    public function getNumberAndStreet()
    {
        return $this->numberAndStreet;
    }

    /**
     * Set postBox
     *
     * @param string $postBox
     * @return Address
     */
    public function setPostBox($postBox)
    {
        $this->postBox = $postBox;
    
        return $this;
    }

    /**
     * Get postBox
     *
     * @return string 
     */
    public function getPostBox()
    {
        return $this->postBox;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    
        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set town
     *
     * @param string $town
     * @return Address
     */
    public function setTown($town)
    {
        $this->town = $town;
    
        return $this;
    }

    /**
     * Get town
     *
     * @return string 
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
}