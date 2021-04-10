<?php

namespace App\Models;

use App\ValueObjects\Address;
use App\ValueObjects\Location;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    protected $table = 'delivery';

    protected $fillable = [
        'customer_name',
        'delivery_date',
        'zip_code_departure',
        'city_departure',
        'neighborhood_departure',
        'street_departure',
        'number_departure',
        'latitude_departure',
        'longitude_departure',
        'zip_code_destination',
        'city_destination',
        'neighborhood_destination',
        'street_destination',
        'number_destination',
        'latitude_destination',
        'longitude_destination',
    ];

    public function getDeparture(): Address
    {
        $location = new Location($this->latitude_departure, $this->longitude_departure);

        return new Address(
            $this->street_departure,
            $this->number_departure,
            $this->neighborhood_departure,
            $this->zip_code_departure,
            $this->city_departure,
            $location
        );
    }

    public function getDestination(): Address
    {
        $location = new Location($this->latitude_destination, $this->longitude_destination);

        return new Address(
            $this->street_destination,
            $this->number_destination,
            $this->neighborhood_destination,
            $this->zip_code_destination,
            $this->city_destination,
            $location
        );
    }
}
