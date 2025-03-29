<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

abstract class Controller
{

    /**
     * Retorna uma resposta de sucesso padronizada
     * @param array $data
     * @param string|null $message
     * @param int|null $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function successResponse(array $data, ?string $message = 'Sucesso', ?int $code = 200): JsonResponse
    {

        return Response()->json([
            'success' => true,
            'code' => $code,
            'message' => $message,
            'data' => $data
        ], $code);
    }

    /**
     * Retorna uma resposta de erro padronizada
     * @param string $message
     * @param int|null $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function errorResponse(string $message, ?int $code = 500): JsonResponse
    {

        return Response()->json([
            'success' => false,
            'code' => $code,
            'message' => $message,
            'data' => [],
        ], $code);
    }
}
