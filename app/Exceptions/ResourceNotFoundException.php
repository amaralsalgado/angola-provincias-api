<?php

namespace App\Exceptions;

use App\Support\ApiResponse;
use Illuminate\Http\JsonResponse;
use RuntimeException;

class ResourceNotFoundException extends RuntimeException
{
    /**
     * @param string $resource Key of the missing resource (the "not_found" group of the api language files)
     */
    public function __construct(private string $resource)
    {
        parent::__construct("{$resource} not found");
    }

    public function render(): JsonResponse
    {
        return ApiResponse::error(__("api.not_found.{$this->resource}"), 404);
    }
}
