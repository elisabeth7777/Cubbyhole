<?php

namespace CubbyHole\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subscription
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CubbyHole\MainBundle\Entity\SubscriptionRepository")
 */
class Subscription
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
     * @ORM\OneToOne(targetEntity="CubbyHole\UserBundle\Entity\User")
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="CubbyHole\MainBundle\Entity\Plan")
     */    
    private $plan;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateSubscription", type="datetime")
     */
    private $dateSubscription;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateExpiration", type="datetime")
     */
    private $dateExpiration;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isPaid", type="boolean")
     */
    private $isPaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="spaceUsed", type="integer")
     */
    private $spaceUsed;

    function __construct() {
        $this->dateSubscription =  new \DateTime();
        $this->isPaid = false;
        $this->spaceUsed = 0;
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
     * Set dateSubscription
     *
     * @param \DateTime $dateSubscription
     * @return Subscription
     */
    public function setDateSubscription($dateSubscription)
    {
        $this->dateSubscription = $dateSubscription;

        return $this;
    }

    /**
     * Get dateSubscription
     *
     * @return \DateTime 
     */
    public function getDateSubscription()
    {
        return $this->dateSubscription;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     * @return Subscription
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;

        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime 
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set isPaid
     *
     * @param boolean $isPaid
     * @return Subscription
     */
    public function setIsPaid($isPaid)
    {
        $this->isPaid = $isPaid;

        return $this;
    }

    /**
     * Get isPaid
     *
     * @return boolean 
     */
    public function getIsPaid()
    {
        return $this->isPaid;
    }

    /**
     * Set spaceUsed
     *
     * @param integer $spaceUsed
     * @return Subscription
     */
    public function setSpaceUsed($spaceUsed)
    {
        $this->spaceUsed = $spaceUsed;

        return $this;
    }

    /**
     * Get spaceUsed
     *
     * @return integer 
     */
    public function getSpaceUsed()
    {
        return $this->spaceUsed;
    }

    /**
     * Set user
     *
     * @param \CubbyHole\UserBundle\Entity\User $user
     * @return Subscription
     */
    public function setUser(\CubbyHole\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \CubbyHole\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set plan
     *
     * @param \CubbyHole\MainBundle\Entity\Plan $plan
     * @return Subscription
     */
    public function setPlan(\CubbyHole\MainBundle\Entity\Plan $plan = null)
    {
        $this->plan = $plan;

        return $this;
    }

    /**
     * Get plan
     *
     * @return \CubbyHole\MainBundle\Entity\Plan 
     */
    public function getPlan()
    {
        return $this->plan;
    }
}
