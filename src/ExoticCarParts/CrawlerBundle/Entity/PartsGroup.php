<?php

namespace ExoticCarParts\CrawlerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * PartsGroup
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PartsGroup
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=255)
     */
    private $imagePath;
    
    /**
     * @ORM\ManyToOne(targetEntity="Model", inversedBy="partsgroups")
     * @ORM\JoinColumn(name="model_id", referencedColumnName="id")
     */
    protected $model;
    
    /**
    * @ORM\OneToMany(targetEntity="Part", mappedBy="partsgroup")
    */    
    protected $part;        


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
     * @return PartsGroup
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
     * Set imagePath
     *
     * @param string $imagePath
     * @return PartsGroup
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    /**
     * Get imagePath
     *
     * @return string 
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->part = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set model
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\Model $model
     * @return PartsGroup
     */
    public function setModel(\ExoticCarParts\CrawlerBundle\Entity\Model $model = null)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return \ExoticCarParts\CrawlerBundle\Entity\Model 
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Add part
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\Part $part
     * @return PartsGroup
     */
    public function addPart(\ExoticCarParts\CrawlerBundle\Entity\Part $part)
    {
        $this->part[] = $part;

        return $this;
    }

    /**
     * Remove part
     *
     * @param \ExoticCarParts\CrawlerBundle\Entity\Part $part
     */
    public function removePart(\ExoticCarParts\CrawlerBundle\Entity\Part $part)
    {
        $this->part->removeElement($part);
    }

    /**
     * Get part
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getPart()
    {
        return $this->part;
    }
}
