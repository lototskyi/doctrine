<?php

/**
 * @Entity @Table(name="cars_stock")
 */
class CarsStock
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
    protected $model;

    /**
     * @ManyToOne(targetEntity="Brands", inversedBy="carsStock")
     */
    protected $brand;

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
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getBrand() : string
    {
        return $this->brand_id;
    }

    /**
     * @param Brands $brand
     */
    public function setBrand(Brands $brand): void
    {
        $this->brand = $brand;
    }
}