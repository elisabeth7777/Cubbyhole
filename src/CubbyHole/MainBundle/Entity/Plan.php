<?php

namespace CubbyHole\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plan
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CubbyHole\MainBundle\Entity\PlanRepository")
 */
class Plan
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
    
     /**
     * @var string
     *
     * @ORM\Column(name="soustitre", type="string", length=255)
     */
    private $soustitre;
    
     /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;    
    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", scale=2)
     */
    private $price;
    
    /**
     * @var boolean $available
     *
     * @ORM\Column(name="available", type="boolean")
     */
    private $available;
    /**
     * @var integer
     *
     * @ORM\Column(name="duration", type="integer")
     */
    private $duration;

    /**
     * @var integer
     *
     * @ORM\Column(name="spaceStorage", type="integer")
     */
    private $spaceStorage;

    /**
     * @var integer
     *
     * @ORM\Column(name="maxBandwidth", type="integer")
     */
    private $maxBandwidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="quotaSharedLink", type="integer")
     */
    private $quotaSharedLink;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreation", type="datetime")
     */
    private $dateCreation;
    
    function __construct() {
        $this->dateCreation = new \DateTime();
        $this->available = true;
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
     * Set price
     *
     * @param string $price
     * @return Plan
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Plan
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set spaceStorage
     *
     * @param integer $spaceStorage
     * @return Plan
     */
    public function setSpaceStorage($spaceStorage)
    {
        $this->spaceStorage = $spaceStorage;

        return $this;
    }

    /**
     * Get spaceStorage
     *
     * @return integer 
     */
    public function getSpaceStorage()
    {
        return $this->spaceStorage;
    }

    /**
     * Set maxBandwidth
     *
     * @param integer $maxBandwidth
     * @return Plan
     */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->maxBandwidth = $maxBandwidth;

        return $this;
    }

    /**
     * Get maxBandwidth
     *
     * @return integer 
     */
    public function getMaxBandwidth()
    {
        return $this->maxBandwidth;
    }

    /**
     * Set quotaSharedLink
     *
     * @param integer $quotaSharedLink
     * @return Plan
     */
    public function setQuotaSharedLink($quotaSharedLink)
    {
        $this->quotaSharedLink = $quotaSharedLink;

        return $this;
    }

    /**
     * Get quotaSharedLink
     *
     * @return integer 
     */
    public function getQuotaSharedLink()
    {
        return $this->quotaSharedLink;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Plan
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
     * Set soustitre
     *
     * @param string $soustitre
     * @return Plan
     */
    public function setSoustitre($soustitre)
    {
        $this->soustitre = $soustitre;

        return $this;
    }

    /**
     * Get soustitre
     *
     * @return string 
     */
    public function getSoustitre()
    {
        return $this->soustitre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Plan
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Plan
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set available
     *
     * @param boolean $available
     * @return Plan
     */
    public function setAvailable($available)
    {
        $this->available = $available;

        return $this;
    }

    /**
     * Get available
     *
     * @return boolean 
     */
    public function getAvailable()
    {
        return $this->available;
    }
    public function __toString() {
        return $this->name;
    }

}
