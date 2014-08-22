<?php

namespace ExoticCarParts\CrawlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Part
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Part
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
     * @var integer
     *
     * @ORM\Column(name="onImageNumber", type="bigint")
     */
    private $onImageNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="partNumber", type="string", length=255)
     */
    private $partNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;
    
    /**
     * @ORM\ManyToOne(targetEntity="PartsGroup", inversedBy="part")
     * @ORM\JoinColumn(name="partsgroup_id", referencedColumnName="id")
     */
    protected $partsGroup;       


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
     * Set onImageNumber
     *
     * @param integer $onImageNumber
     * @return Part
     */
    public function setOnImageNumber($onImageNumber)
    {
        $this->onImageNumber = $onImageNumber;

        return $this;
    }

    /**
     * Get onImageNumber
     *
     * @return integer 
     */
    public function getOnImageNumber()
    {
        return $this->onImageNumber;
    }

    /**
     * Set partNumber
     *
     * @param string $partNumber
     * @return Part
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string 
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Part
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
     * Set quantity
     *
     * @param integer $quantity
     * @return Part
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set partsGroup
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroup
     * @return Part
     */
    public function setPartsGroup(\ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroup = null)
    {
        $this->partsGroup = $partsGroup;

        return $this;
    }

    /**
     * Get partsGroup
     *
     * @return \ExoticCarParts\CrawlerBundle\Entity\PartsGroup 
     */
    public function getPartsGroup()
    {
        return $this->partsGroup;
    }
}
