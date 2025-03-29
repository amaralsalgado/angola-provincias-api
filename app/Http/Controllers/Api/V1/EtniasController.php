<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Etnia;
use App\Models\Etnia_Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EtniasController extends Controller
{
    public function getAll()
    {
        try {

            $data = Etnia::with(['provincias'])->get()->toArray();
            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Etnias:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Etnias');
        }
    }

    public function find(Request $request)
    {
        try {

            $etnia = Etnia::with('provincias')->where('slug', $request->etnia)->first();

            if (!$etnia) {
                return $this->errorResponse('Etnia não encontrada', 404);
            }

            return $this->successResponse($etnia->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Etnia: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Etnia');
        }
    }
}
