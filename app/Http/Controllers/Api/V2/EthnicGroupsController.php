<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V2\EthnicGroupResource;
use App\Services\EthnicGroupService;
use Illuminate\Http\JsonResponse;

class EthnicGroupsController extends Controller
{
    public function __construct(private EthnicGroupService $ethnicGroups) {}

    public function getAll(): JsonResponse
    {
        $data = $this->ethnicGroups->all();
        $resource = EthnicGroupResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $ethnicGroup): JsonResponse
    {
        $data = $this->ethnicGroups->find($ethnicGroup);
        $resource = EthnicGroupResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
