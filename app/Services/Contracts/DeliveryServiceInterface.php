<?php

namespace App\Services\Contracts;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Collection;

interface DeliveryServiceInterface
{
     /**
     * @return \Illuminate\Database\Eloquent\Collection
     */
    function all(): Collection;

    /**
     * @param int $id
     * @return \App\Models\Delivery
     */
    function find(int $id): Delivery;

    /**
     * @param array $data
     * @return \App\Models\Delivery
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    function create(array $data): Delivery;

    /**
     * @param int $id
     * @param array $data
     * @return void
     * @throws \App\Exceptions\UnprocessableEntityException
     */
    function update(int $id, array $data);

    /**
     * @param int $id
     * @return void
     */
    function delete(int $id);
}
