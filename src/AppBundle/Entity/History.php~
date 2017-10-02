<?php

namespace AppBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\HistoryRepository")
 */
class History {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;
    
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
     * @ORM\ManyToOne(
     *      targetEntity = "Statistic",
     * )
     * 
     * @ORM\JoinColumn(
     *      name = "statistic_id",
     *      referencedColumnName = "id",
     *      onDelete = "SET NULL"
     * )
     */
    private $statistic;
    
    /**
     *
     * @ORM\Column(type="integer") 
     */
    private $numOfPoints;
    
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
     * Set numOfPoints
     *
     * @param integer $numOfPoints
     * @return History
     */
    public function setNumOfPoints($numOfPoints)
    {
        $this->numOfPoints = $numOfPoints;

        return $this;
    }

    /**
     * Get numOfPoints
     *
     * @return integer 
     */
    public function getNumOfPoints()
    {
        return $this->numOfPoints;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return History
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
     * @return History
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
     * Set matchday
     *
     * @param \AppBundle\Entity\Matchday $matchday
     * @return History
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
     * Set statistic
     *
     * @param \AppBundle\Entity\Statistic $statistic
     * @return History
     */
    public function setStatistic(\AppBundle\Entity\Statistic $statistic = null)
    {
        $this->statistic = $statistic;

        return $this;
    }

    /**
     * Get statistic
     *
     * @return \AppBundle\Entity\Statistic 
     */
    public function getStatistic()
    {
        return $this->statistic;
    }
}
