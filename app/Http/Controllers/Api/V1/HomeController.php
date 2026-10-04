<?php

namespace App\Http\Controllers\Api\V1;

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
            'nome' => 'República de Angola',
            'continente' => 'África',
            'extensao' => 1246700,
            'capital_principal' => 'Luanda',
            'lingua_principal' => 'Português',
            'moeda' => 'Kwanza (kz)',
            'fuso_horario' => 'WAT (UTC+1)',
            'codigo_telefonico' => '+244',
            'codigo_de_internet' => '.ao',
            'provincias' => $totals['provinces'],
            'capitais' => $totals['capitals'],
            'municipios' => $totals['municipalities'],
            'comunas' => $totals['communes'],
            'distritos' => $totals['districts'],
            'etnias' => $totals['ethnic_groups'],
            'linguas' => $totals['languages'],
        ]);
    }
}
