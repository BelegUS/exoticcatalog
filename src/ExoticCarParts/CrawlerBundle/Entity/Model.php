<?php

namespace ExoticCarParts\CrawlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Model
 *
 * @ORM\Table(name="model")
 * @ORM\Entity(repositoryClass="ExoticCarParts\CrawlerBundle\Repository\ModelRepository")
 */
class Model
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
     * @ORM\Column(name="name", type="string", length=255, unique=TRUE)
     */
    private $name;
    
    /**
     * @var Brand
     * 
     * @ORM\ManyToOne(targetEntity="Brand", inversedBy="models")
     * @ORM\JoinColumn(name="brand_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $brand;    
    
    /**
    * @ORM\OneToMany(targetEntity="PartsGroup", mappedBy="model")
    */    
    protected $partsGroups;    


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
     * Set name
     *
     * @param string $name
     * @return Model
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
     * Constructor
     */
    public function __construct()
    {
        $this->partsGroups = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set brand
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\Brand $brand
     * @return Model
     */
    public function setBrand(\ExoticCarParts\CrawlerBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \ExoticCarParts\CrawlerBundle\Entity\Brand 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Add partsGroups
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroups
     * @return Model
     */
    public function addPartsGroup(\ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroups)
    {
        $this->partsGroups[] = $partsGroups;

        return $this;
    }

    /**
     * Remove partsGroups
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroups
     */
    public function removePartsGroup(\ExoticCarParts\CrawlerBundle\Entity\PartsGroup $partsGroups)
    {
        $this->partsGroups->removeElement($partsGroups);
    }

    /**
     * Get partsGroups
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPartsGroups()
    {
        return $this->partsGroups;
    }
}
