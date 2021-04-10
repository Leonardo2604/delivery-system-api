<?php

namespace App\Repositories\Eloquent;

use App\Exceptions\DatabaseException;
use App\Exceptions\NotFoundException;
use App\Models\Delivery;
use App\Repositories\Contracts\DeliveryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class DeliveryRepositoryEloquent implements DeliveryRepositoryInterface
{
    public function all(): Collection
    {
        try {
            return Delivery::all();
        } catch (QueryException $exception) {
            throw new DatabaseException('Falha ao tentar obter as entregas', $exception);
        }
    }

    public function create(array $data): Delivery
    {
        try {
            return Delivery::create($data);
        } catch (QueryException $exception) {
            throw new DatabaseException('Falha ao tentar criar a entrega', $exception);
        }
    }

    public function find(int $id): Delivery
    {
        try {
            return Delivery::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            throw new NotFoundException('Entrega não encontrada', $exception);
        } catch (QueryException $exception) {
            throw new DatabaseException('Falha ao tentar obter a entrega', $exception);
        }
    }

    public function update(int $id, array $data)
    {
        try {
            $delivery = $this->find($id);
            $delivery->update($data);
        } catch (QueryException $exception) {
            throw new DatabaseException('Falha ao tentar atualizar a entrega', $exception);
        }
    }

    public function delete(int $id)
    {
        try {
            $delivery = $this->find($id);
            $delivery->delete();
        } catch (QueryException $exception) {
            throw new DatabaseException('Falha ao tentar deletar a entrega', $exception);
        }
    }
}
