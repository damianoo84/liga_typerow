<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MeetRepository")
 */
class Meet {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;
      
    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $name;
    
    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Team"
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "hostTeam_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */       
    private $hostTeam;

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Team"
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "guestTeam_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */ 
    private $guestTeam;

    /**
     * @ORM\ManyToOne(
     *      targetEntity = "Matchday",
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "matchday_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */
    private $matchday;
    
    /**
     *
     * @ORM\Column(type="integer", nullable=true) 
     */
    private $hostGoals;
    
    /**
     *
     * @ORM\Column(type="integer", nullable=true) 
     */
    private $guestGoals;
    
    /**
     * @ORM\Column(type="string", length=160, nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=160, nullable=true)
     */    
    private $term;
    
    /**
     *
     * @ORM\Column(type="integer", nullable=true) 
     */
    private $position;

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
     * 
     * @return string
     */
    public function __toString()
    {
         return (string)$this->name;
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
     * Set hostGoals
     *
     * @param integer $hostGoals
     *
     * @return Meet
     */
    public function setHostGoals($hostGoals)
    {
        $this->hostGoals = $hostGoals;

        return $this;
    }

    /**
     * Get hostGoals
     *
     * @return integer
     */
    public function getHostGoals()
    {
        return $this->hostGoals;
    }

    /**
     * Set guestGoals
     *
     * @param integer $guestGoals
     *
     * @return Meet
     */
    public function setGuestGoals($guestGoals)
    {
        $this->guestGoals = $guestGoals;

        return $this;
    }

    /**
     * Get guestGoals
     *
     * @return integer
     */
    public function getGuestGoals()
    {
        return $this->guestGoals;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Meet
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
     * Set term
     *
     * @param string $term
     *
     * @return Meet
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Meet
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Meet
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
     * Set hostTeam
     *
     * @param \AppBundle\Entity\Team $hostTeam
     *
     * @return Meet
     */
    public function setHostTeam(\AppBundle\Entity\Team $hostTeam = null)
    {
        $this->hostTeam = $hostTeam;

        return $this;
    }

    /**
     * Get hostTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getHostTeam()
    {
        return $this->hostTeam;
    }

    /**
     * Set guestTeam
     *
     * @param \AppBundle\Entity\Team $guestTeam
     *
     * @return Meet
     */
    public function setGuestTeam(\AppBundle\Entity\Team $guestTeam = null)
    {
        $this->guestTeam = $guestTeam;

        return $this;
    }

    /**
     * Get guestTeam
     *
     * @return \AppBundle\Entity\Team
     */
    public function getGuestTeam()
    {
        return $this->guestTeam;
    }

    /**
     * Set matchday
     *
     * @param \AppBundle\Entity\Matchday $matchday
     *
     * @return Meet
     */
    public function setMatchday(\AppBundle\Entity\Matchday $matchday = null)
    {
        $this->matchday = $matchday;

        return $this;
    }

    /**
     * Get matchday
     *
     * @return \AppBundle\Entity\Matchday
     */
    public function getMatchday()
    {
        return $this->matchday;
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
     * @return Meet
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
     * @return Meet
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
