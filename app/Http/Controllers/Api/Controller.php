<?php

namespace App\Http\Controllers\Api;

use App\Support\ApiResponse;
use Illuminate\Http\JsonResponse;

abstract class Controller
{

    /**
     * Retorna uma resposta de sucesso padronizada
     * @param array $data
     * @param string|null $message
     * @param int|null $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse(array $data, ?string $message = null, int $code = 200): JsonResponse
    {
        return ApiResponse::success($data, $message, $code);
    }

    /**
     * Retorna uma resposta de erro padronizada
     * @param string $message
     * @param int|null $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse(string $message, int $code): JsonResponse
    {
        return ApiResponse::error($message, $code);
    }
}
