<?php

namespace Icannotgo\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Research
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Icannotgo\CommonBundle\Entity\ResearchRepository")
 */
class Research
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
     * @var \DateTime
     *
     * @ORM\Column(name="researchedAt", type="datetime")
     */
    private $researchedAt;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="stage", type="object")
     */
    private $stage;

    /**
     * @var integer
     *
     * @ORM\Column(name="priceMax", type="integer")
     */
    private $priceMax;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="musicStyle", type="object")
     */
    private $musicStyle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="forConcertAt", type="datetime")
     */
    private $forConcertAt;
    
    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="researches")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;


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
     * Set researchedAt
     *
     * @param \DateTime $researchedAt
     * @return Research
     */
    public function setResearchedAt($researchedAt)
    {
        $this->researchedAt = $researchedAt;

        return $this;
    }

    /**
     * Get researchedAt
     *
     * @return \DateTime 
     */
    public function getResearchedAt()
    {
        return $this->researchedAt;
    }

    /**
     * Set stage
     *
     * @param \stdClass $stage
     * @return Research
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return \stdClass 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set priceMax
     *
     * @param integer $priceMax
     * @return Research
     */
    public function setPriceMax($priceMax)
    {
        $this->priceMax = $priceMax;

        return $this;
    }

    /**
     * Get priceMax
     *
     * @return integer 
     */
    public function getPriceMax()
    {
        return $this->priceMax;
    }

    /**
     * Set musicStyle
     *
     * @param \stdClass $musicStyle
     * @return Research
     */
    public function setMusicStyle($musicStyle)
    {
        $this->musicStyle = $musicStyle;

        return $this;
    }

    /**
     * Get musicStyle
     *
     * @return \stdClass 
     */
    public function getMusicStyle()
    {
        return $this->musicStyle;
    }

    /**
     * Set forConcertAt
     *
     * @param \DateTime $forConcertAt
     * @return Research
     */
    public function setForConcertAt($forConcertAt)
    {
        $this->forConcertAt = $forConcertAt;

        return $this;
    }

    /**
     * Get forConcertAt
     *
     * @return \DateTime 
     */
    public function getForConcertAt()
    {
        return $this->forConcertAt;
    }
}
