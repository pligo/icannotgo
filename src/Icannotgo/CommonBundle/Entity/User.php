<?php

namespace Icannotgo\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Icannotgo\CommonBundle\Entity\UserRepository")
 */
class User
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
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=100)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firtName", type="string", length=100)
     */
    private $firtName;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudo", type="string", length=100)
     */
    private $pseudo;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=50)
     */
    private $phoneNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="signedAt", type="datetime")
     */
    private $signedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="introducing", type="text")
     */
    private $introducing;

    /**
     *
     * @ORM\OneToMany(targetEntity="Advert", mappedBy="user")
     */
    private $adverts;
    
    /**
     *
     * @ORM\OneToMany(targetEntity="Research", mappedBy="user")
     */
    private $researches;

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
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firtName
     *
     * @param string $firtName
     * @return User
     */
    public function setFirtName($firtName)
    {
        $this->firtName = $firtName;

        return $this;
    }

    /**
     * Get firtName
     *
     * @return string 
     */
    public function getFirtName()
    {
        return $this->firtName;
    }

    /**
     * Set pseudo
     *
     * @param string $pseudo
     * @return User
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    /**
     * Get pseudo
     *
     * @return string 
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return User
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set signedAt
     *
     * @param \DateTime $signedAt
     * @return User
     */
    public function setSignedAt($signedAt)
    {
        $this->signedAt = $signedAt;

        return $this;
    }

    /**
     * Get signedAt
     *
     * @return \DateTime 
     */
    public function getSignedAt()
    {
        return $this->signedAt;
    }

    /**
     * Set introducing
     *
     * @param string $introducing
     * @return User
     */
    public function setIntroducing($introducing)
    {
        $this->introducing = $introducing;

        return $this;
    }

    /**
     * Get introducing
     *
     * @return string 
     */
    public function getIntroducing()
    {
        return $this->introducing;
    }

}
