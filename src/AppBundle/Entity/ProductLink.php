<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * ProductLink
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductLinkRepository")
 */
class ProductLink
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
     * @var Product
     * 
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="productLinks")
     */
    private $product;

    /**
     * @var Marketplace
     * 
     * @ORM\ManyToOne(targetEntity="Marketplace", inversedBy="productLinks")
     */
    private $marketplace;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;
    
    /**
     * @var ArrayCollection
     *  
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="productLink")
     */
    private $orders; 
    
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
        $this->orders = new ArrayCollection();
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
     * Set product
     *
     * @param \stdClass $product
     * @return ProductLink
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \stdClass 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set marketplace
     *
     * @param \stdClass $marketplace
     * @return ProductLink
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Get marketplace
     *
     * @return \stdClass 
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return ProductLink
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return ProductLink
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
     * @return ProductLink
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
