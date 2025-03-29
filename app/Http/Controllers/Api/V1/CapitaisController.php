<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Capital;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CapitaisController extends Controller
{
    public function getAll()
    {

        try {

            $capitais = Capital::with('provincia')->get();

            return $this->successResponse($capitais->toArray());
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Capitais:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Capitais');
        }
    }

    public function find(Request $request)
    {

        try {

            $capital = Capital::with('provincia')->where('slug', $request->capital)->first();

            if (!$capital) {
                return $this->errorResponse('Capital não encontrada', 404);
            }

            return $this->successResponse($capital->toArray());
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Capitais:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Capitais');
        }
    }
}
