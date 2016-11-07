<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TypeRepository")
 */
class Type {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;

    
    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Match",
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "match_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */
    private $match;
    

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "AppBundle\Entity\User",
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "user_id",
     *      referencedColumnName = "id",
     *      nullable = false,
     *      onDelete = "CASCADE"
     * )
     */
    private $user;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/\d+/")
     * 
     * @ORM\Column(type="integer") 
     */
    private $hostType;
    
    /**
     * @Assert\NotBlank()
     * @Assert\Regex(pattern="/\d+/")
     * 
     * @ORM\Column(type="integer") 
     */
    private $guestType;
    

    /**
     *
     * @ORM\Column(type="integer", nullable=true) 
     */
    private $numberOfPoints;


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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set hostType
     *
     * @param integer $hostType
     *
     * @return Type
     */
    public function setHostType($hostType)
    {
        $this->hostType = $hostType;

        return $this;
    }

    /**
     * Get hostType
     *
     * @return integer
     */
    public function getHostType()
    {
        return $this->hostType;
    }

    /**
     * Set guestType
     *
     * @param integer $guestType
     *
     * @return Type
     */
    public function setGuestType($guestType)
    {
        $this->guestType = $guestType;

        return $this;
    }

    /**
     * Get guestType
     *
     * @return integer
     */
    public function getGuestType()
    {
        return $this->guestType;
    }

    /**
     * Set numberOfPoints
     *
     * @param integer $numberOfPoints
     *
     * @return Type
     */
    public function setNumberOfPoints($numberOfPoints)
    {
        $this->numberOfPoints = $numberOfPoints;

        return $this;
    }

    /**
     * Get numberOfPoints
     *
     * @return integer
     */
    public function getNumberOfPoints()
    {
        return $this->numberOfPoints;
    }

    /**
     * Set match
     *
     * @param \AppBundle\Entity\Match $match
     *
     * @return Type
     */
    public function setMatch(\AppBundle\Entity\Match $match = null)
    {
        $this->match = $match;

        return $this;
    }

    /**
     * Get match
     *
     * @return \AppBundle\Entity\Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Type
     */
    public function setUser(\AppBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Type
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Type
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
