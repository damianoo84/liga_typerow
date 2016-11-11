<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo; // gedmo annotations

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MatchdayRepository")
 */
class Matchday {
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue (strategy="AUTO")
     */
    private $id;
    
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
     * @ORM\Column(type="string", length=20)
     */
    private $name;


    /**
     * @ORM\Column(name="date_from", type="datetime", nullable=true)
     */
    private $dateFrom;
    
    /**
     * @ORM\Column(name="date_to", type="datetime", nullable=true)
     */
    private $dateTo;
    
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
     * 
     * @return string
     */
    public function __toString()
    {
         return $this->name;
    }
    
    /**
     * Set dateFrom
     *
     * @param \DateTime $dateFrom
     *
     * @return Matchday
     */
    public function setDateFrom($dateFrom)
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    /**
     * Get dateFrom
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Set dateTo
     *
     * @param \DateTime $dateTo
     *
     * @return Matchday
     */
    public function setDateTo($dateTo)
    {
        $this->dateTo = $dateTo;

        return $this;
    }

    /**
     * Get dateTo
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Set season
     *
     * @param \AppBundle\Entity\Season $season
     *
     * @return Matchday
     */
    public function setSeason(\My\TyperkaBundle\Entity\Season $season = null)
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Matchday
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
     * @return Matchday
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
     * @return Matchday
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
