<?php

use App\Http\Controllers\Api\V1\CapitaisController;
use App\Http\Controllers\Api\V1\ComunasController;
use App\Http\Controllers\Api\V1\DistritosController;
use App\Http\Controllers\Api\V1\EtniasController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\LinguasController;
use App\Http\Controllers\Api\V1\MunicipiosController;
use App\Http\Controllers\Api\V1\ProvinciasController;
use Illuminate\Support\Facades\Route;

Route::prefix("v1")->group(function () {
    Route::name("api.v1.")->group(function () {

        Route::get('/angola', [HomeController::class, 'index'])->name('angola');

        Route::get('/provincias', [ProvinciasController::class, 'getAll'])->name('provincias');
        Route::get('/provincias/{provincia}', [ProvinciasController::class, 'find'])->name('provincias.find');
        Route::get('/provincias/{provincia}/etnias', [ProvinciasController::class, 'getAllEtnias']);
        Route::get('/provincias/{provincia}/etnias/{etnia}', [ProvinciasController::class, 'getEtnia']);
        Route::get('/provincias/{provincia}/linguas', [ProvinciasController::class, 'getAllLangs']);
        Route::get('/provincias/{provincia}/linguas/{lingua}', [ProvinciasController::class, 'getLang']);
        Route::get('/provincias/{provincia}/municipios', [ProvinciasController::class, 'getAllMunicipios']);
        Route::get('/provincias/{provincia}/municipios/{municipio}', [ProvinciasController::class, 'getMunicipio']);

        Route::get('/provincias/{provincia}/municipios/{municipio}/comunas', [ProvinciasController::class, 'getAllComunas']);
        Route::get('/provincias/{provincia}/municipios/{municipio}/comunas/{comuna}', [ProvinciasController::class, 'getComuna']);
        Route::get('/provincias/{provincia}/municipios/{municipio}/distritos', [ProvinciasController::class, 'getAllDistritos']);
        Route::get('/provincias/{provincia}/municipios/{municipio}/distritos/{distrito}', [ProvinciasController::class, 'getDistrito']);

        Route::get('/provincias/{provincia}/capital', [ProvinciasController::class, 'getCapital'])->name('provincias.capital');

        Route::get('/capitais', [CapitaisController::class, 'getAll'])->name('capitais');
        Route::get('/capitais/{capital}', [CapitaisController::class, 'find'])->name('capitais.find');

        Route::get('/municipios', [MunicipiosController::class, 'getAll'])->name('municipios');
        Route::get('/municipios/{municipio}', [MunicipiosController::class, 'find']);

        Route::get('/municipios/{municipio}/comunas', [MunicipiosController::class, 'getAllComunas'])->name('municipios.comunas');
        Route::get('/municipios/{municipio}/comunas/{comuna}', [MunicipiosController::class, 'getComuna']);

        Route::get('/municipios/{municipio}/distritos', [MunicipiosController::class, 'getAllDistritos'])->name('municipio.distritos');
        Route::get('/municipios/{municipio}/distritos/{distrito}', [MunicipiosController::class, 'getDistrito']);

        Route::get('/comunas', [ComunasController::class, 'getAll'])->name('comunas');
        Route::get('/comunas/{comuna}', [ComunasController::class, 'find']);

        Route::get('/distritos', [DistritosController::class, 'getAll'])->name('distritos');;
        Route::get('/distritos/{distrito}', [DistritosController::class, 'find']);

        Route::get('/etnias', [EtniasController::class, 'getAll'])->name('etnias');;
        Route::get('/etnias/{etnia}', [EtniasController::class, 'find']);

        Route::get('/linguas', [LinguasController::class, 'getAll'])->name('linguas');;
        Route::get('/linguas/{lingua}', [LinguasController::class, 'find']);

        //teste
    });
});
