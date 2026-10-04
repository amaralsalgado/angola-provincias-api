<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Api\Controller;
use App\Services\AngolaService;
use Illuminate\Http\JsonResponse;

class HomeController extends Controller
{
    public function __construct(private AngolaService $angola) {}

    public function index(): JsonResponse
    {
        $data = $this->angola->info();

        return $this->successResponse($data);
    }
}
