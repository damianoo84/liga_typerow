<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatisticRepository")
 */
class Statistic {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;
    
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
     * @ORM\ManyToOne(
     *      targetEntity = "Season",
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "season_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */
    private $season;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    private $match2;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    private $match4;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    private $totalPoints;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    private $position;
    
    /**
     * 
     * @ORM\Column(type="integer")
     */
    private $numOfQue;
    
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
     * Set match2
     *
     * @param integer $match2
     *
     * @return Statistic
     */
    public function setMatch2($match2)
    {
        $this->match2 = $match2;

        return $this;
    }

    /**
     * Get match2
     *
     * @return integer
     */
    public function getMatch2()
    {
        return $this->match2;
    }

    /**
     * Set match4
     *
     * @param integer $match4
     *
     * @return Statistic
     */
    public function setMatch4($match4)
    {
        $this->match4 = $match4;

        return $this;
    }

    /**
     * Get match4
     *
     * @return integer
     */
    public function getMatch4()
    {
        return $this->match4;
    }

    /**
     * Set totalPoints
     *
     * @param integer $totalPoints
     *
     * @return Statistic
     */
    public function setTotalPoints($totalPoints)
    {
        $this->totalPoints = $totalPoints;

        return $this;
    }

    /**
     * Get totalPoints
     *
     * @return integer
     */
    public function getTotalPoints()
    {
        return $this->totalPoints;
    }

    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Statistic
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
     * Set numOfQue
     *
     * @param integer $numOfQue
     *
     * @return Statistic
     */
    public function setNumOfQue($numOfQue)
    {
        $this->numOfQue = $numOfQue;

        return $this;
    }

    /**
     * Get numOfQue
     *
     * @return integer
     */
    public function getNumOfQue()
    {
        return $this->numOfQue;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Statistic
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
     *
     * @return Statistic
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
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Statistic
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
     * Set season
     *
     * @param \AppBundle\Entity\Season $season
     *
     * @return Statistic
     */
    public function setSeason(\AppBundle\Entity\Season $season = null)
    {
        $this->season = $season;

        return $this;
    }

    /**
     * Get season
     *
     * @return \AppBundle\Entity\Season
     */
    public function getSeason()
    {
        return $this->season;
    }
}
