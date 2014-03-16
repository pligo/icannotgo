<?php

namespace Icannotgo\CommonBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="concert")
 */
class Concert
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
    protected $stage;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $artist;
    
    /**
     * @ORM\Column(type="datetime")
     */
    protected $dateBegin;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $hourBegin;
    
    /**
     * @ORM\Column(type="date")
     */
    protected $hourEnding;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $music_style1;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $music_style2;
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $music_style3;
    
}

