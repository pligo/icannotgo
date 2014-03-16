<?php

namespace Icannotgo\CommonBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User
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
    protected $advert;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $research;
    
        
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $lastName;
    
     /**
     * @ORM\Column(type="string", length=100)
     */
    protected $fisrtName;    
        
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $pseudo;
        
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $mail;
        
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $phoneNumber;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateSignIn;

    /**
     * @ORM\Column(type="integer")
     */
    protected $price;
     
}

