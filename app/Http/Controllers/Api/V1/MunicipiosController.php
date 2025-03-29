<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comuna;
use App\Models\Distrito;
use App\Models\Municipio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MunicipiosController extends Controller
{
    public function getAll()
    {
        try {

            $data = Municipio::with(['provincia'])->get()->toArray();
            return $this->successResponse($data);
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar Municípios:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Municípios');
        }
    }

    public function find(Request $request)
    {
        try {

            $municipio = Municipio::where('slug', $request->municipio)->with('provincia')->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            return $this->successResponse($municipio->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Município: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Município');
        }
    }

    public function getAllComunas(Request $request)
    {
        try {

            $municipio = Municipio::with('comunas')->where('slug', $request->municipio)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            return $this->successResponse($municipio->comunas->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Comunas (Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comunas');
        }
    }

    public function getComuna(Request $request)
    {
        try {

            $municipio = Municipio::where('slug', $request->municipio)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            $comuna = Comuna::where('slug', $request->comuna)->where('municipio_id', $municipio->id)->first();

            if (!$comuna) {
                return $this->errorResponse('Comuna não encontrada', 404);
            }

            return $this->successResponse($comuna->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Comuna (Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comuna');
        }
    }

    public function getAllDistritos(Request $request)
    {
        try {

            $municipio = Municipio::with('distritos')->where('slug', $request->municipio)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            return $this->successResponse($municipio->distritos->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Distritos (Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distritos');
        }
    }

    public function getDistrito(Request $request)
    {
        try {

            $municipio = Municipio::where('slug', $request->municipio)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            $distrito = Distrito::where('slug', $request->distrito)->where('municipio_id', $municipio->id)->first();

            if (!$distrito) {
                return $this->errorResponse('Distrito não encontrado', 404);
            }

            return $this->successResponse($distrito->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Distrito (Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distrito');
        }
    }
}
