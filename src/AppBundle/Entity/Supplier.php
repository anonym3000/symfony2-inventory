<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Supplier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierRepository")
 */
class Supplier
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
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="SupplierProduct", mappedBy="supplier")
     */
    private $supplierProducts;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fast_shipping", type="boolean")
     */
    private $fastShipping;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    public function __construct()
    {
        $this->supplierProducts = new ArrayCollection();
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
     * @return Supplier
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
     * Set url
     *
     * @param string $url
     * @return Supplier
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
     * Set fastShipping
     *
     * @param boolean $fastShipping
     * @return Supplier
     */
    public function setFastShipping($fastShipping)
    {
        $this->fastShipping = $fastShipping;

        return $this;
    }

    /**
     * Get fastShipping
     *
     * @return boolean
     */
    public function getFastShipping()
    {
        return $this->fastShipping;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Supplier
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
}
