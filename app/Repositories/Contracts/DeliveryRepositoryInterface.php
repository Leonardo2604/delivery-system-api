<?php

namespace App\Repositories\Contracts;

use App\Models\Delivery;
use Illuminate\Database\Eloquent\Collection;

interface DeliveryRepositoryInterface
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection
     * @throws \App\Exceptions\DatabaseException
     */
    function all(): Collection;

    /**
     * @param int $id
     * @return \App\Models\Delivery
     * @throws \App\Exceptions\DatabaseException
     */
    function find(int $id): Delivery;

    /**
     * @param array $data
     * @return \App\Models\Delivery
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\DatabaseException
     */
    function create(array $data): Delivery;

    /**
     * @param int $id
     * @param array $data
     * @return void
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\DatabaseException
     */
    function update(int $id, array $data);

    /**
     * @param int $id
     * @return void
     * @throws \App\Exceptions\NotFoundException
     * @throws \App\Exceptions\DatabaseException
     */
    function delete(int $id);
}
