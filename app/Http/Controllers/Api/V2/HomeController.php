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
        $totals = $this->angola->totals();

        return $this->successResponse([
            'name' => 'Republic of Angola',
            'continent' => 'Africa',
            'area' => '1,246,700 km²',
            'main_capital' => 'Luanda',
            'main_language' => 'Portuguese',
            'currency' => 'Kwanza (kz)',
            'timezone' => 'WAT (UTC+1)',
            'phone_code' => '+244',
            'internet_code' => '.ao',
            ...$totals,
        ]);
    }
}
