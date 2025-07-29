<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Capital;
use App\Models\Comuna;
use App\Models\Distrito;
use App\Models\Etnia;
use App\Models\Lingua;
use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {

        try {

            $totalProvincias = Provincia::count();
            $totalMunicipios = Municipio::count();
            $totalComunas = Comuna::count();
            $totalDistritos = Distrito::count();
            $totalCapitais = Capital::count();
            $totalEtnias = Etnia::count();
            $totalLinguas = Lingua::count();

            $data = [
                'nome' => 'República de Angola',
                'continente' => 'África',
                'extensao' => '1.246.700 km²',
                'capital_principal' => 'Luanda',
                'lingua_principal' => 'Português',
                'moeda' => 'Kwanza (kz)',
                'fuso_horario' => 'WAT (UTC+1)',
                'codigo_telefonico' => '+244',
                'codigo_de_internet' => '.ao',
                'provincias' => $totalProvincias,
                'capitais' => $totalCapitais,
                'municipios' => $totalMunicipios,
                'comunas' => $totalComunas,
                'distritos' => $totalDistritos,
                'etnias' => $totalEtnias,
                'linguas' => $totalLinguas,
            ];


            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar informações de angola:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar informações de angola');
        }
    }
}
