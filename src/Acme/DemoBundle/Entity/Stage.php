<?php

namespace Icannotgo\CommonBundle\Entity;

/**
 * @ORM\Entity
 * @ORM\Table(name="stage")
 */
class Stage
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;
    
    /**
     * @ORM\Column(type="text", length=255)
     */
    protected $address;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $district;
    
    /**
     * @ORM\Column(type="text", length=100)
     */
    protected $description;
   
}

