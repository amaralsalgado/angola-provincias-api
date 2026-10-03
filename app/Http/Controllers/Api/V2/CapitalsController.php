<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V2\CapitalResource;
use App\Services\CapitalService;
use Illuminate\Http\JsonResponse;

class CapitalsController extends Controller
{
    public function __construct(private CapitalService $capitals) {}

    public function getAll(): JsonResponse
    {
        $data = $this->capitals->all();
        $resource = CapitalResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $capital): JsonResponse
    {
        $data = $this->capitals->find($capital);
        $resource = CapitalResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
