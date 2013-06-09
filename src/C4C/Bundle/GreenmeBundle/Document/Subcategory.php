<?php

namespace C4C\Bundle\GreenmeBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Subcategory {

    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Category")
     */
    protected $category;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $messurement;

    /**
     * @MongoDB\Boolean
     */
    protected $is_positive;

    /**
     * @MongoDB\String
     */
    protected $icon;
    
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
     * Set category
     *
     * @param C4C\Bundle\GreenmeBundle\Document\Category $category
     * @return self
     */
    public function setCategory(\C4C\Bundle\GreenmeBundle\Document\Category $category) {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return C4C\Bundle\GreenmeBundle\Document\Category $category
     */
    public function getCategory() {
        return $this->category;
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
     * Set messurement
     *
     * @param string $messurement
     * @return self
     */
    public function setMessurement($messurement) {
        $this->messurement = $messurement;
        return $this;
    }

    /**
     * Get messurement
     *
     * @return string $messurement
     */
    public function getMessurement() {
        return $this->messurement;
    }

    /**
     * Set is_positive
     *
     * @param boolean $isPositive
     * @return self
     */
    public function setIsPositive($isPositive) {
        $this->is_positive = $isPositive;
        return $this;
    }

    /**
     * Get is_positive
     *
     * @return boolean $isPositive
     */
    public function getIsPositive() {
        return $this->is_positive;
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

}
