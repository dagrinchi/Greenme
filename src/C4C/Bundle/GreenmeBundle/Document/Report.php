<?php

namespace C4C\Bundle\GreenmeBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
* @MongoDB\Document
*/
class Report {

	/**
	* @MongoDB\Id(strategy="auto")
	*/
	protected $id;

	/**
	* @MongoDB\String
	*/
	protected $title;

	/**
	* @MongoDB\String
	*/
	protected $location;

	/**
	* @MongoDB\String
	*/
	protected $location_type;

	/**
	* @MongoDB\String
	*/
	protected $picture;

	/**
	* @MongoDB\ReferenceOne(targetDocument="User")
	*/
	protected $user;

	/**
	* @MongoDB\ReferenceMany(targetDocument="Subcategory")
	*/
	protected $sub_categories;

	/**
	* @MongoDB\Timestamp
	*/
	protected $created;

    public function __construct()
    {
        $this->created = new \MongoTimestamp();
        $this->sub_categories = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return self
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set location_type
     *
     * @param string $locationType
     * @return self
     */
    public function setLocationType($locationType)
    {
        $this->location_type = $locationType;
        return $this;
    }

    /**
     * Get location_type
     *
     * @return string $locationType
     */
    public function getLocationType()
    {
        return $this->location_type;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Get picture
     *
     * @return string $picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set user
     *
     * @param C4C\Bundle\GreenmeBundle\Document\User $user
     * @return self
     */
    public function setUser(\C4C\Bundle\GreenmeBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return C4C\Bundle\GreenmeBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Add sub_categories
     *
     * @param C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategories
     */
    public function addSubCategorie(\C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategories)
    {
        $this->sub_categories[] = $subCategories;
    }

    /**
    * Remove sub_categories
    *
    * @param <variableType$subCategories
    */
    public function removeSubCategorie(\C4C\Bundle\GreenmeBundle\Document\Subcategory $subCategories)
    {
        $this->sub_categories->removeElement($subCategories);
    }

    /**
     * Get sub_categories
     *
     * @return Doctrine\Common\Collections\Collection $subCategories
     */
    public function getSubCategories()
    {
        return $this->sub_categories;
    }

    /**
     * Set created
     *
     * @param timestamp $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return timestamp $created
     */
    public function getCreated()
    {
        return $this->created;
    }
}
