<?php

namespace MultiParcels\CustomShop;

use MultiParcels\CustomShop\Entities\Order;

/**
 * Class CustomShop
 *
 * @package MultiParcels\CustomShop
 */
class CustomShop
{

    const VERSION = 0.1;

    /** @var \MultiParcels\CustomShop\Entities\Order[] $items */
    public $items = [];

    /** @var string|null $callback_url Url where shipment details will be sent(tracking code, tracking link) */
    public $callback_url = null;

    /**
     * Add order to shop
     *
     * @param  \MultiParcels\CustomShop\Entities\Order  $order
     *
     * @return $this
     */
    public function add(Order $order)
    {
        $this->items[] = $order;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }

    /**
     * @param  string|null  $callback_url
     *
     * @return CustomShop
     */
    public function setCallbackUrl($callback_url)
    {
        $this->callback_url = $callback_url;

        return $this;
    }

    public function toArray()
    {
        return [
            'version'  => self::VERSION,
            'callback' => $this->callback_url,
            'orders'   => $this->items,
        ];
    }

}
