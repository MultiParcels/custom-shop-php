# MultiParcels Custom Shop PHP implementation

Easy way to set up custom shop using PHP.

## Install

```bash
composer require multiparcles/custom-shop-php
```

### Example response MultiParcels should see:
```json
{
  "version": 0.2,
  "callback": "https://example.com/multiparcels/callback",
  "orders": [
    {
      "order_id": 123,
      "created_at": "2020-01-01 12:34:56",
      "total_price": 60,
      "currency": "EUR",
      "notes": "The apartment is in the second floor",
      "status": "ready_to_dispatch",
      "shipping": "DHL home delivery",
      "packages": 2,
      "payment": "Paypal",
      "receiver": {
        "name": "John Smith",
        "address": "Saulėtekio al. 15",
        "city": "Vilnius",
        "postal_code": 10224,
        "country_code": "LT",
        "phone_number": "+37061234567",
        "email": "hello@multiparcels.com",
        "pickup_location_identifier": "0101"
      },
      "products": [
        {
          "sku": "sku001",
          "title": "Amazing product #1",
          "price": 10,
          "quantity": 2,
          "weight_in_grams": 100
        },
        {
          "sku": "sku002",
          "title": "Amazing product #2",
          "price": 10,
          "quantity": 2,
          "weight_in_grams": 100
        },
        {
          "sku": "sku003",
          "title": "Amazing product #3",
          "price": 10,
          "quantity": 2,
          "weight_in_grams": 100
        }
      ]
    }
  ]
}
```

### Example request your system will receive:
```json
{
  "order_id": 123,
  "tracking_code": "LT123456789",
  "tracking_link": "https://example.com/tracking/LT123456789",
  "carrier": "LP Express",
  "carrier_code": "lp_express"
}
```
or
```php
example/callback.php:18:
class MultiParcels\CustomShop\ParseCallbackResponse#3 (5) {
  public $orderId =>
  int(123)
  public $trackingCode =>
  string(11) "LT123456789"
  public $trackingLink =>
  string(40) "https://example.com/tracking/LT123456789"
  public $carrier =>
  string(10) "LP Express"
  public $carrierCode =>
  string(10) "lp_express"
}
```