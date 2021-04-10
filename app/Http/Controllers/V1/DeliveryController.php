<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\DeliveryResource;
use App\Services\Contracts\DeliveryServiceInterface;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    private $deliveryService;

    public function __construct(DeliveryServiceInterface $deliveryService)
    {
        $this->deliveryService = $deliveryService;
    }

    public function all()
    {
        $deliveries = $this->deliveryService->all();
        return response()->json(DeliveryResource::collection($deliveries));
    }

    public function create(Request $request)
    {
        $delivery = $this->deliveryService->create($request->all());
        return response()->json(DeliveryResource::make($delivery), 201);
    }

    public function find(int $id)
    {
        $delivery = $this->deliveryService->find($id);
        return response()->json(DeliveryResource::make($delivery));
    }

    public function update(Request $request, int $id)
    {
        $this->deliveryService->update($id, $request->all());
        return response()->json(null, 204);
    }

    public function delete(int $id)
    {
        $this->deliveryService->delete($id);
        return response()->json(null, 204);
    }
}
