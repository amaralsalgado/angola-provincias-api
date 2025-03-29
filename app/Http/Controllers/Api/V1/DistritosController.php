<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Distrito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DistritosController extends Controller
{
    public function getAll()
    {
        try {

            $data = Distrito::with(['municipio.provincia'])->get()->toArray();
            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Distritos:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distritos');
        }
    }

    public function find(Request $request)
    {
        try {

            $distrito = Distrito::with('municipio.provincia')->where('slug', $request->distrito)->first();

            if (!$distrito) {
                return $this->errorResponse('Distrito não encontrado', 404);
            }

            return $this->successResponse($distrito->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Distrito: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distrito');
        }
    }
}
