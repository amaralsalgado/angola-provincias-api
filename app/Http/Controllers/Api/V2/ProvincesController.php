<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V2\CommuneResource;
use App\Http\Resources\V2\DistrictResource;
use App\Http\Resources\V2\EthnicGroupResource;
use App\Http\Resources\V2\LanguageResource;
use App\Http\Resources\V2\LocationResource;
use App\Http\Resources\V2\MunicipalityResource;
use App\Http\Resources\V2\ProvinceResource;
use App\Services\ProvinceService;
use Illuminate\Http\JsonResponse;

class ProvincesController extends Controller
{
    public function __construct(private ProvinceService $provinces) {}

    public function getAll(): JsonResponse
    {
        $data = $this->provinces->all();
        $resource = ProvinceResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $province): JsonResponse
    {
        $data = $this->provinces->find($province);
        $resource = ProvinceResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllEthnicGroups(string $province): JsonResponse
    {
        $data = $this->provinces->ethnicGroups($province);
        $resource = EthnicGroupResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getEthnicGroup(string $province, string $ethnicGroup): JsonResponse
    {
        $data = $this->provinces->ethnicGroup($province, $ethnicGroup);
        $resource = EthnicGroupResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllLanguages(string $province): JsonResponse
    {
        $data = $this->provinces->languages($province);
        $resource = LanguageResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getLanguage(string $province, string $language): JsonResponse
    {
        $data = $this->provinces->language($province, $language);
        $resource = LanguageResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllMunicipalities(string $province): JsonResponse
    {
        $data = $this->provinces->municipalities($province);
        $resource = MunicipalityResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getMunicipality(string $province, string $municipality): JsonResponse
    {
        $data = $this->provinces->municipality($province, $municipality);
        $resource = MunicipalityResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getCapital(string $province): JsonResponse
    {
        $data = $this->provinces->capital($province);
        $resource = LocationResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllCommunes(string $province, string $municipality): JsonResponse
    {
        $data = $this->provinces->communes($province, $municipality);
        $resource = CommuneResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getCommune(string $province, string $municipality, string $commune): JsonResponse
    {
        $data = $this->provinces->commune($province, $municipality, $commune);
        $resource = CommuneResource::make($data);

        return $this->successResponse($resource->resolve());
    }

    public function getAllDistricts(string $province, string $municipality): JsonResponse
    {
        $data = $this->provinces->districts($province, $municipality);
        $resource = DistrictResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function getDistrict(string $province, string $municipality, string $district): JsonResponse
    {
        $data = $this->provinces->district($province, $municipality, $district);
        $resource = DistrictResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
