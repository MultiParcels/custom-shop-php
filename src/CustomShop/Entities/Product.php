<?php

namespace MultiParcels\CustomShop\Entities;

/**
 * Class Product
 *
 * @package MultiParcels\CustomShop\Entities
 */
class Product
{

    /** @var string|int $sku */
    public $sku;

    /** @var string $title */
    public $title;

    /** @var int|float $price */
    public $price;

    /** @var int $quantity */
    public $quantity;

    /** @var int|float $weight_in_grams */
    public $weight_in_grams;

    /**
     * @return int|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param  int|string  $sku
     *
     * @return Product
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param  string  $title
     *
     * @return Product
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param  float|int  $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param  int  $quantity
     *
     * @return Product
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getWeightInGrams()
    {
        return $this->weight_in_grams;
    }

    /**
     * @param  float|int  $weightInGrams
     *
     * @return Product
     */
    public function setWeightInGrams($weightInGrams)
    {
        $this->weight_in_grams = $weightInGrams;

        return $this;
    }

}
