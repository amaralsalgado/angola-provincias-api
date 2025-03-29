<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comuna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ComunasController extends Controller
{
    public function getAll()
    {
        try {

            $data = Comuna::with(['municipio.provincia'])->get()->toArray();
            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Comunas:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comunas');
        }
    }

    public function find(Request $request)
    {
        try {

            $comuna = Comuna::with('municipio.provincia')->where('slug', $request->comuna)->first();

            if (!$comuna) {
                return $this->errorResponse('Comuna não encontrada', 404);
            }

            return $this->successResponse($comuna->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Comuna: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comuna');
        }
    }
}
