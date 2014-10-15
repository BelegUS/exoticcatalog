<?php

namespace ExoticCarParts\ModelsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="brand")
 */
class Brand {
    
    public function __construct()
    {
        $this->models = new ArrayCollection();
    }
    
    /**
    * @var integer
    *
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;
    
    /**
    * @ORM\Column(type="string", length=50, unique=TRUE)
    */
    protected $name;

    /**
    * @ORM\Column(type="string", length=5, unique=TRUE)
    */    
    protected $shortcut;
    
    /**
     * @var string
     *
     * @ORM\Column(name="imagePath", type="string", length=255)
     */
    private $imagePath;
 
    /**
    * @ORM\OneToMany(targetEntity="Model", mappedBy="brand")
    */    
    protected $models;
    
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
     * Set shortcut
     *
     * @param string $name
     * @return Model
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    /**
     * Get shortcut
     *
     * @return string 
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }     
    
    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

     /**
     * Add models
     *
     * @param \ExoticCarParts\ModelsBundle\Entity\Model $models
     * @return Brand
     */
    public function addModel(\ExoticCarParts\ModelsBundle\Entity\Model $models)
    {
        $this->models[] = $models;

        return $this;
    }

    /**
     * Remove models
     *
     * @param \ExoticCarParts\ModelsBundle\Entity\Model $models
     */
    public function removeModel(\ExoticCarParts\ModelsBundle\Entity\Model $models)
    {
        $this->models->removeElement($models);
    }

    /**
     * Get models
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getModels()
    {
        return $this->models;
    }
}
