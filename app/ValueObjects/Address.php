<?php

namespace App\ValueObjects;

use JsonSerializable;

class Address implements JsonSerializable
{
    private $street;
    private $number;
    private $neighborhood;
    private $zipCode;
    private $city;
    private $location;

    public function __construct(
        string $street,
        string $number,
        string $neighborhood,
        string $zipCode,
        string $city,
        ?Location $location
    )
    {
        $this->street = $street;
        $this->number = $number;
        $this->neighborhood = $neighborhood;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->location = $location;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function toArray()
    {
        return [
            'street' => $this->getStreet(),
            'number' => $this->getNumber(),
            'neighborhood' => $this->getNeighborhood(),
            'zip_code' => $this->getZipCode(),
            'city' => $this->getCity(),
            'location' => $this->getLocation()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
