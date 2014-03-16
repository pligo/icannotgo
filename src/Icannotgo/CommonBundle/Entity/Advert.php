<?php

namespace Icannotgo\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Advert
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Icannotgo\CommonBundle\Entity\AdvertRepository")
 */
class Advert
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
     *
     * @ORM\ManyToOne(targetEntity="Concert", inversedBy="adverts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $concert;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="adverts")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="postedAt", type="datetime")
     */
    private $postedAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="isSold", type="boolean")
     */
    private $isSold;

    /**
     * @var boolean
     *
     * @ORM\Column(name="withTel", type="boolean")
     */
    private $withTel;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="text")
     */
    private $detail;

    /**
     * @var integer
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;



    /**
     * @ORM\OneToOne(targetEntity="Picture", cascade={"persist"})
     */
    private $picture;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="advert")
     */
    private $comments;
    
    public function __construct() {
        $this->comments = new ArrayCollection();
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
     * Set concert
     *
     * @param \stdClass $concert
     * @return Advert
     */
    public function setConcert($concert)
    {
        $this->concert = $concert;

        return $this;
    }

    /**
     * Get concert
     *
     * @return \stdClass 
     */
    public function getConcert()
    {
        return $this->concert;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     * @return Advert
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set postedAt
     *
     * @param \DateTime $postedAt
     * @return Advert
     */
    public function setPostedAt($postedAt)
    {
        $this->postedAt = $postedAt;

        return $this;
    }

    /**
     * Get postedAt
     *
     * @return \DateTime 
     */
    public function getPostedAt()
    {
        return $this->postedAt;
    }

    /**
     * Set isSold
     *
     * @param boolean $isSold
     * @return Advert
     */
    public function setIsSold($isSold)
    {
        $this->isSold = $isSold;

        return $this;
    }

    /**
     * Get isSold
     *
     * @return boolean 
     */
    public function getIsSold()
    {
        return $this->isSold;
    }

    /**
     * Set withTel
     *
     * @param boolean $withTel
     * @return Advert
     */
    public function setWithTel($withTel)
    {
        $this->withTel = $withTel;

        return $this;
    }

    /**
     * Get withTel
     *
     * @return boolean 
     */
    public function getWithTel()
    {
        return $this->withTel;
    }

    /**
     * Set detail
     *
     * @param string $detail
     * @return Advert
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;

        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set price
     *
     * @param integer $price
     * @return Advert
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
