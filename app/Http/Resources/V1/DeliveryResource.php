<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class DeliveryResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer_name' => $this->customer_name,
            'delivery_date' => $this->delivery_date,
            'departure' => $this->getDeparture(),
            'destination' => $this->getDestination(),
        ];
    }
}
