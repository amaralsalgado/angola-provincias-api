<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V1\CommuneResource;
use App\Http\Resources\V1\DistrictResource;
use App\Http\Resources\V1\MunicipalityResource;
use App\Services\MunicipalityService;
use Illuminate\Http\JsonResponse;

class MunicipalitiesController extends Controller
{
    public function __construct(private MunicipalityService $municipalities) {}

    public function getAll(): JsonResponse
    {
        $data = $this->municipalities->all();
        $resource = MunicipalityResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $municipality): JsonResponse
    {
        $data = $this->municipalities->find($municipality);
        $resource = MunicipalityResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllCommunes(string $municipality): JsonResponse
    {
        $data = $this->municipalities->communes($municipality);
        $resource = CommuneResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getCommune(string $municipality, string $commune): JsonResponse
    {
        $data = $this->municipalities->commune($municipality, $commune);
        $resource = CommuneResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllDistricts(string $municipality): JsonResponse
    {
        $data = $this->municipalities->districts($municipality);
        $resource = DistrictResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getDistrict(string $municipality, string $district): JsonResponse
    {
        $data = $this->municipalities->district($municipality, $district);
        $resource = DistrictResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
