<?php

namespace CubbyHole\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sharing
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CubbyHole\MainBundle\Entity\SharingRepository")
 */
class Sharing
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
    private $userFriend;
    
    /**
     * @ORM\OneToOne(targetEntity="CubbyHole\MainBundle\Entity\File")
     */
    private $file;
    
    /**
     * @var string
     *
     * @ORM\Column(name="permission", type="string", length=255)
     */
    private $permission;


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
     * Set permission
     *
     * @param string $permission
     * @return Sharing
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission
     *
     * @return string 
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set userFriend
     *
     * @param \CubbyHole\UserBundle\Entity\User $userFriend
     * @return Sharing
     */
    public function setUserFriend(\CubbyHole\UserBundle\Entity\User $userFriend = null)
    {
        $this->userFriend = $userFriend;

        return $this;
    }

    /**
     * Get userFriend
     *
     * @return \CubbyHole\UserBundle\Entity\User 
     */
    public function getUserFriend()
    {
        return $this->userFriend;
    }

    /**
     * Set file
     *
     * @param \CubbyHole\MainBundle\Entity\File $file
     * @return Sharing
     */
    public function setFile(\CubbyHole\MainBundle\Entity\File $file = null)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return \CubbyHole\MainBundle\Entity\File 
     */
    public function getFile()
    {
        return $this->file;
    }
}
