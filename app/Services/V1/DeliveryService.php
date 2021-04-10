<?php

namespace App\Services\V1;

use App\Exceptions\UnprocessableEntityException;
use App\Models\Delivery;
use App\Repositories\Contracts\DeliveryRepositoryInterface;
use App\Services\Contracts\DeliveryServiceInterface;
use App\Validations\Contracts\Delivery\UpdateDeliveryValidator;
use App\Validations\V1\Delivery\CreateDeliveryValidator;
use Illuminate\Database\Eloquent\Collection;

class DeliveryService implements DeliveryServiceInterface
{
    private $delievryRepository;
    private $createDeliveryValidator;
    private $updateDeliveryValidator;

    public function __construct(
        DeliveryRepositoryInterface $delievryRepository,
        CreateDeliveryValidator $createDeliveryValidator,
        UpdateDeliveryValidator $updateDeliveryValidator
    ) {
        $this->delievryRepository = $delievryRepository;
        $this->createDeliveryValidator = $createDeliveryValidator;
        $this->updateDeliveryValidator = $updateDeliveryValidator;
    }

    public function all(): Collection
    {
        return $this->delievryRepository->all();
    }

    public function find(int $id): Delivery
    {
        return $this->delievryRepository->find($id);
    }

    public function create(array $data): Delivery
    {
        $validation = $this->createDeliveryValidator->validate($data);

        if ($validation->fails()) {
            throw new UnprocessableEntityException($validation->getMessageBag()->toArray());
        }

        return $this->delievryRepository->create([
            'customer_name'            => $data['customer_name'],
            'delivery_date'            => $data['delivery_date'],

            'zip_code_departure'       => $data['departure']['zip_code'],
            'city_departure'           => $data['departure']['city'],
            'neighborhood_departure'   => $data['departure']['neighborhood'],
            'street_departure'         => $data['departure']['street'],
            'number_departure'         => $data['departure']['number'],
            'latitude_departure'       => $data['departure']['latitude'],
            'longitude_departure'      => $data['departure']['longitude'],

            'zip_code_destination'     => $data['destination']['zip_code'],
            'city_destination'         => $data['destination']['city'],
            'neighborhood_destination' => $data['destination']['neighborhood'],
            'street_destination'       => $data['destination']['street'],
            'number_destination'       => $data['destination']['number'],
            'latitude_destination'     => $data['destination']['latitude'],
            'longitude_destination'    => $data['destination']['longitude'],
        ]);
    }

    public function update(int $id, array $data)
    {
        $validation = $this->updateDeliveryValidator->validate($data);

        if ($validation->fails()) {
            throw new UnprocessableEntityException($validation->getMessageBag()->toArray());
        }

        $this->delievryRepository->update($id, [
            'customer_name'            => $data['customer_name'],
            'delivery_date'            => $data['delivery_date'],

            'zip_code_departure'       => $data['departure']['zip_code'],
            'city_departure'           => $data['departure']['city'],
            'neighborhood_departure'   => $data['departure']['neighborhood'],
            'street_departure'         => $data['departure']['street'],
            'number_departure'         => $data['departure']['number'],
            'latitude_departure'       => $data['departure']['latitude'],
            'longitude_departure'      => $data['departure']['longitude'],

            'zip_code_destination'     => $data['destination']['zip_code'],
            'city_destination'         => $data['destination']['city'],
            'neighborhood_destination' => $data['destination']['neighborhood'],
            'street_destination'       => $data['destination']['street'],
            'number_destination'       => $data['destination']['number'],
            'latitude_destination'     => $data['destination']['latitude'],
            'longitude_destination'    => $data['destination']['longitude'],
        ]);
    }

    public function delete(int $id)
    {
        $this->delievryRepository->delete($id);
    }
}
