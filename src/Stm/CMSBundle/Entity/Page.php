<?php

namespace Stm\CMSBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Page
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Page
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /*
     * in following ORM\ManyToOne, we define the pages property to be ManyToOne relationship 
     * with the category entity as the target entity 
     * mapped by pages property defined at pages entity and category property under
     *
     * In ORM\JoinColumn, we Define join column: When joined with category table (defined with entity)
     * When we update our schema, new field category_id is added to this page entity
     * referencedColumnName=id signifies field name in referenced entity
     */

    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="pages")
     * @ORM\JoinColumn(name="category_id", referencedColumnName='id')
     */
    private $category;


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
     * Set title
     *
     * @param string $title
     * @return Page
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Page
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
}
