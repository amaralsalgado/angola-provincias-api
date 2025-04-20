<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Comuna;
use App\Models\Distrito;
use App\Models\Etnia;
use App\Models\Etnia_Provincia;
use App\Models\Lingua;
use App\Models\Lingua_Provincia;
use App\Models\Municipio;
use App\Models\Provincia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProvinciasController extends Controller
{

    public function getAll()
    {

        try {

            $provincias = Provincia::with(
                relations: ['capital', 'municipios.distritos', 'municipios.comunas', 'etnias', 'linguas']
            )->get();

            return $this->successResponse($provincias->toArray());
        } catch (\Throwable $th) {

            Log::error('Erro ao recuperar provincias:' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar provincias');
        }
    }

    public function find(Request $request)
    {

        try {

            $provincia = Provincia::where('slug', $request->provincia)->with(
                ['capital', 'municipios.distritos', 'municipios.comunas', 'etnias', 'linguas']
            )->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            return $this->successResponse($provincia->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar provincia: ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar provincia');
        }
    }

    public function getAllEtnias(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->with(['etnias'])->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            return $this->successResponse($provincia->etnias->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Etnias (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Etnias');
        }
    }

    public function getEtnia(Request $request)
    {

        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $etnia = Etnia::where('slug', $request->etnia)->first();

            if (!$etnia) {
                return $this->errorResponse('Etnia não encontrada', 404);
            }

            if (!Etnia_Provincia::where('etnia_id', $etnia->id)->where('provincia_id', $provincia->id)->exists()) {
                return $this->errorResponse('Etnia não encontrada', 404);
            }

            return $this->successResponse($etnia->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Etnia (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Etnia');
        }
    }

    public function getAllLangs(Request $request)
    {

        try {

            $provincia = Provincia::where('slug', $request->provincia)->with(['linguas'])->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            return $this->successResponse($provincia->linguas->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Línguas (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Línguas');
        }
    }

    public function getLang(Request $request)
    {

        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $lingua = Lingua::where('slug', $request->lingua)->first();

            if (!$lingua) {
                return $this->errorResponse('Língua não encontrada', 404);
            }

            if (!Lingua_Provincia::where('lingua_id', $lingua['id'])->where('provincia_id', $provincia['id'])->exists()) {
                return $this->errorResponse('Língua não encontrada', 404);
            }

            return $this->successResponse($lingua->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Língua (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Língua');
        }
    }

    public function getAllMunicipios(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->with(['municipios'])->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            return $this->successResponse($provincia->municipios->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Municípios (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Municípios');
        }
    }

    public function getMunicipio(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $municipio = Municipio::where('slug', $request->municipio)->where('provincia_id', $provincia->id)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }


            return $this->successResponse($municipio->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Município (provincia -> ' . $request->provincia . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Município');
        }
    }

    public function getCapital(Request $request)
    {

        try {

            $provincia = Provincia::where('slug', $request->provincia)->with(['capital'])->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            return $this->successResponse($provincia->capital->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar capital (provincia -> ' . $request->provincia . '): ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar capital');
        }
    }

    public function getAllComunas(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $municipio = Municipio::with('comunas')->where('slug', $request->municipio)->where('provincia_id', $provincia->id)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }


            return $this->successResponse($municipio->comunas->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Comunas (provincia -> ' . $request->provincia . ', Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comunas');
        }
    }

    public function getComuna(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $municipio = Municipio::where('slug', $request->municipio)->where('provincia_id', $provincia->id)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            $comuna = Comuna::where('slug', $request->comuna)->where('municipio_id', $municipio->id)->first();

            if (!$comuna) {
                return $this->errorResponse('Comuna não encontrada', 404);
            }

            return $this->successResponse($comuna->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Comuna (provincia -> ' . $request->provincia . ', Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Comuna');
        }
    }

    public function getAllDistritos(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $municipio = Municipio::with('distritos')->where('slug', $request->municipio)->where('provincia_id', $provincia->id)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            return $this->successResponse($municipio->distritos->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Distritos (provincia -> ' . $request->provincia . ', Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distritos');
        }
    }

    public function getDistrito(Request $request)
    {
        try {

            $provincia = Provincia::where('slug', $request->provincia)->first();

            if (!$provincia) {
                return $this->errorResponse('Província não encontrada', 404);
            }

            $municipio = Municipio::where('slug', $request->municipio)->where('provincia_id', $provincia->id)->first();

            if (!$municipio) {
                return $this->errorResponse('Município não encontrado', 404);
            }

            $distrito = Distrito::where('slug', $request->distrito)->where('municipio_id', $municipio->id)->first();

            if (!$distrito) {
                return $this->errorResponse('Distrito não encontrado', 404);
            }

            return $this->successResponse($distrito->toArray());
        } catch (\Throwable $th) {
            Log::error('Erro ao recuperar Distrito (provincia -> ' . $request->provincia . ', Município -> ' . $request->municipio . ') : ' . $th->getMessage(), ['error' => $th]);
            return $this->errorResponse('Erro ao recuperar Distrito');
        }
    }
}
