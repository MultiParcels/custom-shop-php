<?php

namespace MultiParcels\CustomShop;

/**
 * Class ParseCallbackResponse
 *
 * @package MultiParcels\CustomShop
 */
class ParseCallbackResponse
{

    /** @var string|null $orderId */
    public $orderId;

    /** @var string|null $trackingCode */
    public $trackingCode;

    /** @var string|null $trackingLink */
    public $trackingLink;

    /** @var string|null $carrier */
    public $carrier;

    /** @var string|null $carrierCode */
    public $carrierCode;

    /**
     * ParseCallbackResponse constructor.
     *
     * @param  array  $response  Response from webhook
     */
    function __construct(array $response)
    {
        if (array_key_exists('order_id', $response)) {
            $this->orderId = $response['order_id'];

            if (array_key_exists('tracking_code', $response)) {
                $this->trackingCode = $response['tracking_code'];
            }

            if (array_key_exists('tracking_link', $response)) {
                $this->trackingLink = $response['tracking_link'];
            }

            if (array_key_exists('carrier', $response)) {
                $this->carrier = $response['carrier'];
            }

            if (array_key_exists('carrier_code', $response)) {
                $this->carrierCode = $response['carrier_code'];
            }
        }
    }

    /**
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string|null
     */
    public function getTrackingCode()
    {
        return $this->trackingCode;
    }

    /**
     * @return string|null
     */
    public function getTrackingLink()
    {
        return $this->trackingLink;
    }

    /**
     * @return string|null
     */
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * @return string|null
     */
    public function getCarrierCode()
    {
        return $this->carrierCode;
    }

}
