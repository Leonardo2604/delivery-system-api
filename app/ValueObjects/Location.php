<?php

namespace App\ValueObjects;

use JsonSerializable;

class Location implements JsonSerializable
{
    private $latitude;
    private $longitude;

    public function __construct(
        float $latitude,
        float $longitude
    ) {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function toArray()
    {
        return [
            'latitude' => $this->getLatitude(),
            'longitude' => $this->getLongitude()
        ];
    }

    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
