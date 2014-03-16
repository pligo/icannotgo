<?php

namespace Icannotgo\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Concert
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Icannotgo\CommonBundle\Entity\ConcertRepository")
 */
class Concert
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
     * @var \stdClass
     *
     * @ORM\ManyToOne(targetEntity="Stage", inversedBy="concerts")
     * @ORM\JoinColumn(name="stage_id", referencedColumnName="id")
     */
    private $stage;

    /**
     * @var string
     *
     * @ORM\Column(name="artist", type="string", length=100)
     */
    private $artist;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginAt", type="datetime")
     */
    private $beginAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="finishAt", type="datetime")
     */
    private $finishAt;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="musicStyle1", type="object")
     */
    private $musicStyle1;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="musicStyle2", type="object")
     */
    private $musicStyle2;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="musicStyle3", type="object")
     */
    private $musicStyle3;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set stage
     *
     * @param \stdClass $stage
     * @return Concert
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
     * Set artist
     *
     * @param string $artist
     * @return Concert
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;

        return $this;
    }

    /**
     * Get artist
     *
     * @return string 
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Set beginAt
     *
     * @param \DateTime $beginAt
     * @return Concert
     */
    public function setBeginAt($beginAt)
    {
        $this->beginAt = $beginAt;

        return $this;
    }

    /**
     * Get beginAt
     *
     * @return \DateTime 
     */
    public function getBeginAt()
    {
        return $this->beginAt;
    }

    /**
     * Set finishAt
     *
     * @param \DateTime $finishAt
     * @return Concert
     */
    public function setFinishAt($finishAt)
    {
        $this->finishAt = $finishAt;

        return $this;
    }

    /**
     * Get finishAt
     *
     * @return \DateTime 
     */
    public function getFinishAt()
    {
        return $this->finishAt;
    }

    /**
     * Set musicStyle1
     *
     * @param \stdClass $musicStyle1
     * @return Concert
     */
    public function setMusicStyle1($musicStyle1)
    {
        $this->musicStyle1 = $musicStyle1;

        return $this;
    }

    /**
     * Get musicStyle1
     *
     * @return \stdClass 
     */
    public function getMusicStyle1()
    {
        return $this->musicStyle1;
    }

    /**
     * Set musicStyle2
     *
     * @param \stdClass $musicStyle2
     * @return Concert
     */
    public function setMusicStyle2($musicStyle2)
    {
        $this->musicStyle2 = $musicStyle2;

        return $this;
    }

    /**
     * Get musicStyle2
     *
     * @return \stdClass 
     */
    public function getMusicStyle2()
    {
        return $this->musicStyle2;
    }

    /**
     * Set musicStyle3
     *
     * @param \stdClass $musicStyle3
     * @return Concert
     */
    public function setMusicStyle3($musicStyle3)
    {
        $this->musicStyle3 = $musicStyle3;

        return $this;
    }

    /**
     * Get musicStyle3
     *
     * @return \stdClass 
     */
    public function getMusicStyle3()
    {
        return $this->musicStyle3;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Concert
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
}
