<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", nullable=true)
     */
    private $uid;
    
        /**
     * @var string
     *
     * @ORM\Column(name="googleid", type="string", nullable=true)
     */
    private $googleId;
    
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
        return $this;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
        return $this;
    }
}