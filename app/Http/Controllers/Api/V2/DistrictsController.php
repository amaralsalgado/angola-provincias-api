<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V2\DistrictResource;
use App\Services\DistrictService;
use Illuminate\Http\JsonResponse;

class DistrictsController extends Controller
{
    public function __construct(private DistrictService $districts) {}

    public function getAll(): JsonResponse
    {
        $data = $this->districts->all();
        $resource = DistrictResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $district): JsonResponse
    {
        $data = $this->districts->find($district);
        $resource = DistrictResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
