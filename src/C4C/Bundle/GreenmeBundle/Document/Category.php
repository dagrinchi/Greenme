<?php

namespace C4C\Bundle\GreenmeBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Category {

    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $icon;
    
    
    /**
     * @MongoDB\ReferenceMany(targetDocument="Subcategory", inversedBy="category")
     */
    protected $subcategories;


    public function __toString() {
        return $this->name;
    }

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Set icon
     *
     * @param string $icon
     * @return self
     */
    public function setIcon($icon) {
        $this->icon = $icon;
        return $this;
    }

    /**
     * Get icon
     *
     * @return string $icon
     */
    public function getIcon() {
        return $this->icon;
    }

    public function __construct()
    {
        $this->subcategories = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add subcategories
     *
     * @param C4C\Bundle\GreenmeBundle\Document\Subcategory $subcategories
     */
    public function addSubcategorie(\C4C\Bundle\GreenmeBundle\Document\Subcategory $subcategories)
    {
        $this->subcategories[] = $subcategories;
    }

    /**
    * Remove subcategories
    *
    * @param <variableType$subcategories
    */
    public function removeSubcategorie(\C4C\Bundle\GreenmeBundle\Document\Subcategory $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return Doctrine\Common\Collections\Collection $subcategories
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }
}
