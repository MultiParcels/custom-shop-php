<?php

include "../vendor/autoload.php";

use MultiParcels\CustomShop\ParseCallbackResponse;

// Example data
$_POST = [
    'order_id'      => 123,
    'tracking_code' => 'LT123456789',
    'tracking_link' => 'https://example.com/tracking/LT123456789',
    'carrier'       => 'LP Express',
    'carrier_code'  => 'lp_express',
];

$callback = new ParseCallbackResponse($_POST);

var_dump($callback);
