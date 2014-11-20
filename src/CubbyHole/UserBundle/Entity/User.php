<?php

namespace CubbyHole\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="ch_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="urlFolder", type="string", length=255, nullable=true)
     */    
    protected $urlFolder;
    
 

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
     * Set urlFolder
     *
     * @param string $urlFolder
     * @return User
     */
    public function setUrlFolder($urlFolder)
    {
        $this->urlFolder = $urlFolder;

        return $this;
    }

    /**
     * Get urlFolder
     *
     * @return string 
     */
    public function getUrlFolder()
    {
        return $this->urlFolder;
    }
}
