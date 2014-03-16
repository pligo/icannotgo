<?php

namespace Icannotgo\CommonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MusicStyle
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Icannotgo\CommonBundle\Entity\MusicStyleRepository")
 */
class MusicStyle
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
     * @ORM\Column(name="style", type="string", length=50)
     */
    private $style;


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
     * Set style
     *
     * @param string $style
     * @return MusicStyle
     */
    public function setStyle($style)
    {
        $this->style = $style;

        return $this;
    }

    /**
     * Get style
     *
     * @return string 
     */
    public function getStyle()
    {
        return $this->style;
    }
}
