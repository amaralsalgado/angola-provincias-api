<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Capital;
use App\Models\Comuna;
use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CapitaisController extends Controller
{
    public function getAll()
    {

        try {

            $capitais = Capital::with(['provincia', 'capitalable'])->get();

            $capitais->each(function (Capital $capital) {
                $capital->nome = $capital->capitalable->nome;
                $capital->slug = $capital->capitalable->slug;
            });

            return $this->successResponse($capitais->toArray());
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Capitais:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Capitais');
        }
    }

    public function find(Request $request)
    {

        try {

            $municipio = Municipio::where('slug', $request->capital)->first();
            $capital = null;
            if ($municipio) {
                $capital = Capital::with(['provincia', 'capitalable'])->where('provincia_id', $municipio->provincia_id)->first();
            } else {
                $comuna = Comuna::where('slug', $request->capital)->first();

                if ($comuna) {
                    $capital = Capital::with(['provincia', 'capitalable'])->where('provincia_id', $comuna->municipio->provincia_id)->first();

                } else {
                    $distrito = Distrito::where('slug', $request->capital)->first();

                    if ($distrito) {
                        $capital = Capital::with(['provincia', 'capitalable'])->where('provincia_id', $distrito->municipio->provincia_id)->first();
                    }
                }
            }

            if (!$capital) {
                return $this->errorResponse('Capital não encontrada', 404);
            }

            $capital->nome = $capital->capitalable->nome;
            $capital->slug = $capital->capitalable->slug;

            return $this->successResponse($capital->toArray());
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Capitais:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Capitais');
        }
    }
}
