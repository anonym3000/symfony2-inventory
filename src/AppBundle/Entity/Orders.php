<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Orders
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrdersRepository")
 */
class Orders
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
     * @var ProductLink
     * 
     * @ORM\ManyToOne(targetEntity="ProductLink", inversedBy="orders")
     */
    private $productLink;

    /**
     * @var Customer
     * 
     * @ORM\ManyToOne(targetEntity="Customer", inversedBy="orders")
     */
    private $customer;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="smallint")
     */
    private $quantity;

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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date; 
    
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
     * Set productLink
     *
     * @param ProductLink $productLink
     * @return Orders
     */
    public function setProductLink($productLink)
    {
        $this->productLink = $productLink;

        return $this;
    }

    /**
     * Get productLink
     *
     * @return ProductLink 
     */
    public function getProductLink()
    {
        return $this->productLink;
    }

    /**
     * Set customer
     *
     * @param \stdClass $customer
     * @return Orders
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \stdClass 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return Orders
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Orders
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
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
