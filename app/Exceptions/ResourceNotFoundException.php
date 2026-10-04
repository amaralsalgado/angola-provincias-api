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

    /**
     * The message for the client, in the language of the current request.
     */
    public function translatedMessage(): string
    {
        return __("api.not_found.{$this->resource}");
    }

    public function render(): JsonResponse
    {
        return ApiResponse::error($this->translatedMessage(), 404);
    }
}
