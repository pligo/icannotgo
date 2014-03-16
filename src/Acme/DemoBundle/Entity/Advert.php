<?php

namespace Icannotgo\CommonBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="advert")
 */
class Advert
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $concert;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $user;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $datePosted;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $isSold;
    
    /**
     * @ORM\Column(type="boolean")
     */
    protected $withContactMail;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $withContactTel;
    
    /**
     * @ORM\Column(type="text", length=255)
     */
    protected $description;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $price;
     
}

