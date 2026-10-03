<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\V1\LanguageResource;
use App\Services\LanguageService;
use Illuminate\Http\JsonResponse;

class LanguagesController extends Controller
{
    public function __construct(private LanguageService $languages) {}

    public function getAll(): JsonResponse
    {
        $data = $this->languages->all();
        $resource = LanguageResource::collection($data);

        return $this->successResponse($resource->resolve());
    }

    public function find(string $language): JsonResponse
    {
        $data = $this->languages->find($language);
        $resource = LanguageResource::make($data);

        return $this->successResponse($resource->resolve());
    }
}
