<?php

use \Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="brands")
 */
class Brands
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    protected $id;

    /**
     * @Column(type="string")
     * @var string
     */
    protected $brand;

    /**
     * @OneToMany(targetEntity="CarsStock", mappedBy="brand")
     */
    protected $carsStock;

    public function __construct()
    {
        $this->carsStock = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @return ArrayCollection
     */
    public function getCarsStock()
    {
        return $this->carsStock;
    }
}