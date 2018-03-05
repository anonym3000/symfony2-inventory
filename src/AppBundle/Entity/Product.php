<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductRepository")
 */
class Product
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
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;
    
    /**
     * @var ArrayCollection
     * 
     * @ORM\OneToMany(targetEntity="ProductLink", mappedBy="product")
     */
    private $productLinks;
    
    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="SupplierProduct", mappedBy="product")
     */
    private $supplierProducts; 

    /**
     * @var integer
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;

    /**
     * @var boolean
     *
     * @ORM\Column(name="gift", type="boolean")
     */
    private $gift;

    /**
     * @var boolean
     *
     * @ORM\Column(name="requested", type="boolean")
     */
    private $requested;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_added", type="datetime")
     */
    private $dateAdded;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer")
     */
    private $version;

    public function __construct()
    {
        $this->supplierProducts = new ArrayCollection();
        $this->productLinks = new ArrayCollection();
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
     * @return Product
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
     * Set category
     *
     * @param \stdClass $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \stdClass 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set gift
     *
     * @param boolean $gift
     * @return Product
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift
     *
     * @return boolean 
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set requested
     *
     * @param boolean $requested
     * @return Product
     */
    public function setRequested($requested)
    {
        $this->requested = $requested;

        return $this;
    }

    /**
     * Get requested
     *
     * @return boolean 
     */
    public function getRequested()
    {
        return $this->requested;
    }    
    
    /**
     * Get product links
     *
     * @return \stdClass
     */
    public function getProductLinks()
    {
        return $this->productLinks;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return Product
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return Product
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }
}
