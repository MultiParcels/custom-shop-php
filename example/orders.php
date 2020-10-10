<?php

include "../vendor/autoload.php";

use MultiParcels\CustomShop\CustomShop;
use MultiParcels\CustomShop\Entities\Address;
use MultiParcels\CustomShop\Entities\Order;
use MultiParcels\CustomShop\Entities\Product;

$customStore = new CustomShop();
$customStore->setCallbackUrl('https://example.com/multiparcels/callback');

// Orders sorted by newest first
// Always include canceled/deleted orders, we will set the to deleted in our platform
$order = new Order();
$order->setStatus(Order::STATUS_READY_TO_DISPATCH);
$order->setOrderId(123);
$order->setCreatedAt('2020-01-01 12:34:56');
$order->setTotalPrice(60);
$order->setCurrency('EUR');
$order->setNotes('The apartment is in the second floor');
$order->setShipping('DHL home delivery');
$order->setPayment('Paypal');

// Create receiver
$receiver = new Address();
$receiver->setName('John Smith');
$receiver->setAddress('Saulėtekio al. 15');
$receiver->setCity('Vilnius');
$receiver->setPostalCode(10224);
$receiver->setCountryCode('LT');
$receiver->setPhoneNumber('+37061234567');
$receiver->setEmail('hello@multiparcels.com');

// Example LP Express pickup terminal identifier. Only required when delivering to pickup points
$receiver->setPickupLocationIdentifier('0101');

// Set receiver
$order->setReceiver($receiver);

// Add 3 example products
for ($i = 1; $i <= 3; $i++) {
    // Create a product
    $product = new Product();
    $product->setSku('sku00'.$i);
    $product->setTitle('Amazing product #'.$i);
    $product->setPrice(10);
    $product->setQuantity(2);
    $product->setWeightInGrams(100);

    // Add product
    $order->addProduct($product);
}

// Add order to the list
$customStore->add($order);

// Response
header('Content-Type: application/json');
echo json_encode($customStore->toArray());
exit;
