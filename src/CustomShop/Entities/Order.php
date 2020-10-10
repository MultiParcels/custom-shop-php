<?php

namespace MultiParcels\CustomShop\Entities;

/**
 * Class Order
 *
 * @package MultiParcels\CustomShop\Entities
 */
class Order
{

    const STATUS_NOT_PAID = 'not_paid'; // can be not paid orders with COD payment

    const STATUS_READY_TO_DISPATCH = 'ready_to_dispatch';

    const STATUS_COMPLETED = 'completed';

    const STATUS_CANCELED = 'canceled'; // deleted orders

    /** @var int|string $order_id */
    public $order_id;

    /** @var string $created_at */
    public $created_at;

    /** @var int|float $total_price */
    public $total_price;

    /** @var string $currency */
    public $currency;

    /** @var string|null $notes delivery notes to courier */
    public $notes;

    /** @var string $status */
    public $status = self::STATUS_NOT_PAID;

    /** @var string $shipping */
    public $shipping;

    /** @var string $payment */
    public $payment;

    /** @var \MultiParcels\CustomShop\Entities\Address $receiver */
    public $receiver = null;

    /** @var array $products */
    public $products = [];

    /**
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param  int|string  $orderId
     *
     * @return Order
     */
    public function setOrderId($orderId)
    {
        $this->order_id = $orderId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param  string  $created_at
     *
     * @return Order
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * @return float|int
     */
    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * @param  float|int  $total_price
     *
     * @return Order
     */
    public function setTotalPrice($total_price)
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param  string  $currency
     *
     * @return Order
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param  string|null  $notes
     *
     * @return Order
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param  string  $status
     *
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return string
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param  string  $shipping
     *
     * @return Order
     */
    public function setShipping($shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param  string  $payment
     *
     * @return Order
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return \MultiParcels\CustomShop\Entities\Address
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param  \MultiParcels\CustomShop\Entities\Address  $receiver
     *
     * @return Order
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @param  \MultiParcels\CustomShop\Entities\Product  $product
     *
     * @return $this
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

}
