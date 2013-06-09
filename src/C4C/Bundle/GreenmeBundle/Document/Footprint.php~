<?php

namespace C4C\Bundle\GreenmeBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Footprint {

    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\ReferenceOne(targetDocument="Subcategory")
     */
    protected $sub_category;

    /**
     * @MongoDB\Float
     */
    protected $value;
    
    /**
     * @MongoDB\EmbedOne(targetDocument="FootprintCoordinates")
     */
    public $coordinates;

    /**
     * @MongoDB\String
     */
    protected $location_type;

    /**
     * @MongoDB\ReferenceOne(targetDocument="User")
     */
    protected $user;

    /**
     * @MongoDB\Date
     */
    protected $created;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId() {
        return $this->id;
    }

    public function __construct() {
        $this->created = new \MongoDate();
    }

    /**
     * Set sub_category
     *
     * @param C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategory
     * @return self
     */
    public function setSubCategory(\C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategory) {
        $this->sub_category = $subCategory;
        return $this;
    }

    /**
     * Get sub_category
     *
     * @return C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategory
     */
    public function getSubCategory() {
        return $this->sub_category;
    }

    /**
     * Set value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return float $value
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set user
     *
     * @param C4C\Bundle\GreenmeBundle\Document\User $user
     * @return self
     */
    public function setUser(\C4C\Bundle\GreenmeBundle\Document\User $user) {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return C4C\Bundle\GreenmeBundle\Document\User $user
     */
    public function getUser() {
        return $this->user;
    }
    
    /**
     * Set location_type
     *
     * @param string $locationType
     * @return self
     */
    public function setLocationType($locationType) {
        $this->location_type = $locationType;
        return $this;
    }

    /**
     * Get location_type
     *
     * @return string $locationType
     */
    public function getLocationType() {
        return $this->location_type;
    }

    /**
     * Set created
     *
     * @param timestamp $created
     * @return self
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return timestamp $created
     */
    public function getCreated() {
        return $this->created;
    }


    /**
     * Set coordinates
     *
     * @param C4C\Bundle\GreenmeBundle\Document\FootprintCoordinates $coordinates
     * @return self
     */
    public function setCoordinates(\C4C\Bundle\GreenmeBundle\Document\FootprintCoordinates $coordinates)
    {
        $this->coordinates = $coordinates;
        return $this;
    }

    /**
     * Get coordinates
     *
     * @return C4C\Bundle\GreenmeBundle\Document\FootprintCoordinates $coordinates
     */
    public function getCoordinates()
    {
        return $this->coordinates;
    }
}
