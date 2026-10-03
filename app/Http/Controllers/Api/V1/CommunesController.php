<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V1\CommuneResource;
use App\Services\CommuneService;
use Illuminate\Http\JsonResponse;

class CommunesController extends Controller
{
    public function __construct(private CommuneService $communes) {}

    public function getAll(): JsonResponse
    {
        $data = $this->communes->all();
        $resource = CommuneResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $commune): JsonResponse
    {
        $data = $this->communes->find($commune);
        $resource = CommuneResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
