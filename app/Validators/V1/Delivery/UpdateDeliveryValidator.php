<?php

namespace App\Validators\V1\Delivery;

use App\Validators\AbstractValidator;
use App\Validators\Contracts\Delivery\UpdateDeliveryValidatorInterface;

class UpdateDeliveryValidator extends AbstractValidator implements UpdateDeliveryValidatorInterface
{
    protected function rules(array $data): array
    {
        return [
            'customer_name'            => 'required|max:180',
            'delivery_date'            => 'required|date|after:yesterday',
            'departure.zip_code'       => 'required|digits:8',
            'departure.city'           => 'required|max:180',
            'departure.neighborhood'   => 'required|max:180',
            'departure.street'         => 'required|max:120',
            'departure.number'         => 'required|max:20',
            'departure.latitude'       => 'required|numeric|regex:/-?\d{1,3}[.]\d+/',
            'departure.longitude'      => 'required|numeric|regex:/-?\d{1,3}[.]\d+/',
            'destination.zip_code'     => 'required|digits:8',
            'destination.city'         => 'required|max:180',
            'destination.neighborhood' => 'required|max:180',
            'destination.street'       => 'required|max:120',
            'destination.number'       => 'required|max:20',
            'destination.latitude'     => 'required|numeric|regex:/-?\d{1,3}[.]\d+/',
            'destination.longitude'    => 'required|numeric|regex:/-?\d{1,3}[.]\d+/',
        ];
    }

    protected function messages(): array
    {
        return [];
    }
}
