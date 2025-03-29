<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Lingua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LinguasController extends Controller
{
    public function getAll()
    {
        try {

            $data = Lingua::with(['provincias'])->get()->toArray();
            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Línguas:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Línguas');
        }
    }

    public function find(Request $request)
    {
        try {

            $lingua = Lingua::with('provincias')->where('slug', $request->lingua)->first();

            if (!$lingua) {
                return $this->errorResponse('Língua não encontrada', 404);
            }

            return $this->successResponse($lingua->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Língua: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Língua');
        }
    }
}
