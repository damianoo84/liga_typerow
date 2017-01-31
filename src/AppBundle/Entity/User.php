<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable {
     
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;
   
    
    /**
     * @ORM\Column(type="string", length=20 , unique = true)
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=120 , unique = true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=64 , nullable = true)
     * 
     */
    private $plainPassword;
    
    /**
     *
     * @ORM\Column(type="string", length=20 , unique = true)
     */
    private $shortname;
    
    /**
     *
     * @ORM\Column(type="integer")
     */
    private $numberOfWins;

    /**
     *
     * @ORM\Column(type="integer")
     */
    private $status;

    /**
     *
     * @ORM\Column(type="integer", length=5 , unique = true) 
     */
    private $priority;

    
    /**
     *
     * @ORM\Column(type="datetime", nullable = true) 
     */
    private $lastActivityAt;
    
    
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime")
     * @Gedmo\Timestampable(on="update")
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(name="account_non_expired" , type="boolean")
     */
    private $accountNonExpired = true;
    
    /**
     * @ORM\Column(name="account_non_locked" , type="boolean")
     */
    private $accountNonLocked = true;
    
    /**
     * @ORM\Column(name="credentials_non_expired" , type="boolean")
     */
    private $credentialsNonExpired = true;
    
    /**
     * @ORM\Column(type="boolean")
     */
    private $enabled = false;
    
    /**
     * @ORM\Column(type="array")
     */
    private $roles;
    
    /**
     * @ORM\Column(name="action_token", type="string", length=20, nullable = true)
     */
    private $actionToken;
    
    /**
     * @ORM\Column(name="register_date", type="datetime")
     */
    private $registerDate;
    
    /**
     * @ORM\Column(type="string", length=100, nullable = true)
     */
    private $avatar;
    
    function __construct() {
        $this->registerDate = new \DateTime();
    }
    
    /**
     * 
     * @return string
     */
    public function __toString()
    {
         return $this->username;
    }

    public function eraseCredentials() {
        $this->plainPassword = null;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoles() {
        return $this->roles;
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->username;
    }

    public function isAccountNonExpired() {
        return $this->accountNonExpired;
    }

    public function isAccountNonLocked() {
        return $this->accountNonLocked;
    }

    public function isCredentialsNonExpired() {
        return $this->credentialsNonExpired;
    }

    public function isEnabled() {
        return $this->enabled;
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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set accountNonExpired
     *
     * @param boolean $accountNonExpired
     *
     * @return User
     */
    public function setAccountNonExpired($accountNonExpired)
    {
        $this->accountNonExpired = $accountNonExpired;

        return $this;
    }

    /**
     * Get accountNonExpired
     *
     * @return boolean
     */
    public function getAccountNonExpired()
    {
        return $this->accountNonExpired;
    }

    /**
     * Set accountNonLocked
     *
     * @param boolean $accountNonLocked
     *
     * @return User
     */
    public function setAccountNonLocked($accountNonLocked)
    {
        $this->accountNonLocked = $accountNonLocked;

        return $this;
    }

    /**
     * Get accountNonLocked
     *
     * @return boolean
     */
    public function getAccountNonLocked()
    {
        return $this->accountNonLocked;
    }

    /**
     * Set credentialsNonExpired
     *
     * @param boolean $credentialsNonExpired
     *
     * @return User
     */
    public function setCredentialsNonExpired($credentialsNonExpired)
    {
        $this->credentialsNonExpired = $credentialsNonExpired;

        return $this;
    }

    /**
     * Get credentialsNonExpired
     *
     * @return boolean
     */
    public function getCredentialsNonExpired()
    {
        return $this->credentialsNonExpired;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return User
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set roles
     *
     * @param array $roles
     *
     * @return User
     */
    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Set actionToken
     *
     * @param string $actionToken
     *
     * @return User
     */
    public function setActionToken($actionToken)
    {
        $this->actionToken = $actionToken;

        return $this;
    }

    /**
     * Get actionToken
     *
     * @return string
     */
    public function getActionToken()
    {
        return $this->actionToken;
    }

    /**
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return User
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password
        ));
    }

    public function unserialize($serialized) {
        list(
            $this->id,
            $this->username,
            $this->password
        ) = unserialize($serialized);
    }


    /**
     * Set shortname
     *
     * @param string $shortname
     *
     * @return User
     */
    public function setShortname($shortname)
    {
        $this->shortname = $shortname;

        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname()
    {
        return $this->shortname;
    }



    /**
     * Set status
     *
     * @param integer $status
     *
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     *
     * @return User
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set numberOfWins
     *
     * @param integer $numberOfWins
     *
     * @return User
     */
    public function setNumberOfWins($numberOfWins)
    {
        $this->numberOfWins = $numberOfWins;

        return $this;
    }

    /**
     * Get numberOfWins
     *
     * @return integer
     */
    public function getNumberOfWins()
    {
        return $this->numberOfWins;
    }



    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     *
     * @return User
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set lastActivityAt
     *
     * @param \DateTime $lastActivityAt
     * @return User
     */
    public function setLastActivityAt($lastActivityAt)
    {
        $this->lastActivityAt = $lastActivityAt;

        return $this;
    }

    /**
     * Get lastActivityAt
     *
     * @return \DateTime 
     */
    public function getLastActivityAt()
    {
        return $this->lastActivityAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return User
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return User
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    /**
    * @return Bool Whether the user is active or not
    */
    public function isActiveNow()
    {
        // Delay during wich the user will be considered as still active
	$delay = new \DateTime('2 minutes ago');
	return ( $this->getLastActivityAt() > $delay );
    }
}