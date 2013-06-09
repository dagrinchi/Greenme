<?php 

namespace C4C\Bundle\GreenmeBundle\Document;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
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
    protected $last_name;

    /**
     * @MongoDB\Date
     */
    protected $birthdate;

    /**
     * @MongoDB\String
     */
    protected $gender;
    
    public $picture_file;
    
    /**
     * @MongoDB\String
     */
    private $picture_path;

    /**
     * @MongoDB\ReferenceMany(targetDocument="Group")
     */
    protected $groups;

    /**
    * @MongoDB\Date
    */
    protected $created;

    public function __construct()
    {
        parent::__construct();
        $this->created = new \MongoDate();
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
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set last_name
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;
        return $this;
    }

    /**
     * Get last_name
     *
     * @return string $lastName
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set birthdate
     *
     * @param date $birthdate
     * @return self
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    /**
     * Get birthdate
     *
     * @return date $birthdate
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return self
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * Get gender
     *
     * @return string $gender
     */
    public function getGender()
    {
        return $this->gender;
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
    
    public function preUpload() {
        if (null !== $this->picture_file) {
            $filename = sha1(uniqid(mt_rand(), true));
            $this->picture_path =  $filename . '.' . $this->picture_file->guessExtension();
        }
    }

    public function upload() {
        if (null === $this->picture_file) {
            return;
        }
        $this->picture_file->move($this->getUploadRootDir(), $this->picture_path);
        unset($this->picture_file);
    }

    public function removeUpload() {
        $file = $this->getAbsolutePath();
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public function getAbsolutePath() {
        return null === $this->picture_path ? null : $this->getUploadRootDir() . '/' . $this->picture_path;
    }

    public function getWebPath() {
        return null === $this->picture_path ? null : $this->getUploadDir() . '/' . $this->picture_path;
    }

    protected function getUploadRootDir() {
        return __DIR__ . '/../../../../../web/' . $this->getUploadDir();
    }

    protected function getUploadDir() {
        return 'uploads/user';
    }

    /**
     * Set picture_path
     *
     * @param string $picturePath
     * @return self
     */
    public function setPicturePath($picturePath)
    {
        $this->picture_path = $picturePath;
        return $this;
    }

    /**
     * Get picture_path
     *
     * @return string $picturePath
     */
    public function getPicturePath()
    {
        return $this->picture_path;
    }
}
