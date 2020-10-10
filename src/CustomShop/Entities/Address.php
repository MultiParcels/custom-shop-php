<?php

namespace MultiParcels\CustomShop\Entities;

/**
 * Class Address
 *
 * @package MultiParcels\CustomShop\Entities
 */
class Address
{

    /** @var string $name */
    public $name;

    /** @var string $address */
    public $address;

    /** @var string $city */
    public $city;

    /** @var string $postal_code */
    public $postal_code;

    /** @var string $country_code */
    public $country_code;

    /** @var string $phone_number */
    public $phone_number;

    /** @var string $email */
    public $email;

    /** @var string|null $pickup_location_identifier */
    public $pickup_location_identifier;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     *
     * @return Address
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param  string  $address
     *
     * @return Address
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param  string  $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * @param  string  $postal_code
     *
     * @return Address
     */
    public function setPostalCode($postal_code)
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * @param  string  $country_code
     *
     * @return Address
     */
    public function setCountryCode($country_code)
    {
        $this->country_code = $country_code;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * @param  string  $phone_number
     *
     * @return Address
     */
    public function setPhoneNumber($phone_number)
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param  string  $email
     *
     * @return Address
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPickupLocationIdentifier()
    {
        return $this->pickup_location_identifier;
    }

    /**
     * @param  string|null  $pickup_location_identifier
     *
     * @return Address
     */
    public function setPickupLocationIdentifier($pickup_location_identifier)
    {
        $this->pickup_location_identifier = $pickup_location_identifier;

        return $this;
    }

}
