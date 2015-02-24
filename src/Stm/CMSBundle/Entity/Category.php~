<?php

namespace Stm\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/* 
 * we will be adding pages property as inverse relationship to category entity
 * ant this will be many to one so we need ArrayCollecion
 */

/**
 * Category
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Category
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;


    /**
     * @ORM\OneToMany(targetEntity="Page", mappedBy="category")
     *
     * here we define the pages property to be one to many relationship 
     * with the Page entity as the target entity 
     * mapped by cateogry property which is defined at pages entity
     */
    private $pages;

    /*
     * constructor to set our pages property to an array collection to hold multiple pages that belongs to each category
     */
    public function __construct(){
        $this->pages = new ArrayCollegtion();
    }

    /*
     * in inverse relationship entity tostring method needed by symfony 
     * to create new page in order to populate name of the category that the page belongs to 
     */
    public function __toString(){
        return $this->name;
    }

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
     * @return Category
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
}
