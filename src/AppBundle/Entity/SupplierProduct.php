<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupplierProduct
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierProductRepository")
 */
class SupplierProduct
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
     * @var Supplier
     * 
     * @ORM\ManyToOne(targetEntity="Supplier", inversedBy="supplierProducts")
     */
    private $supplier;

    /**
     * @var Product
     * 
     * @ORM\ManyToOne(targetEntity="Product", inversedBy="supplierProducts")
     */
    private $product;
    
    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;
    
    /**
     * @var Currency
     * 
     * @ORM\ManyToOne(targetEntity="Currency")
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer")
     */
    private $version;


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
     * Set supplier
     *
     * @param Supplier $supplier
     * @return SupplierProduct
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * Get supplier
     *
     * @return Supplier 
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * Set product
     *
     * @param Product $product
     * @return SupplierProduct
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return integer 
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return SupplierProduct
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
     * Set price
     *
     * @param float $price
     * @return SupplierProduct
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set version
     *
     * @param string $version
     * @return SupplierProduct
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string 
     */
    public function getVersion()
    {
        return $this->version;
    }
}
