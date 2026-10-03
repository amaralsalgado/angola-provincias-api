<?php

use App\Http\Controllers\Api\V1\CapitalsController;
use App\Http\Controllers\Api\V1\CommunesController;
use App\Http\Controllers\Api\V1\DistrictsController;
use App\Http\Controllers\Api\V1\EthnicGroupsController;
use App\Http\Controllers\Api\V1\HomeController;
use App\Http\Controllers\Api\V1\LanguagesController;
use App\Http\Controllers\Api\V1\MunicipalitiesController;
use App\Http\Controllers\Api\V1\ProvincesController;
use App\Http\Controllers\Api\V2;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::name('api.v1.')->group(function () {

        Route::get('/angola', [HomeController::class, 'index'])->name('angola');

        Route::get('/provincias', [ProvincesController::class, 'getAll'])->name('provincias');
        Route::get('/provincias/{province}', [ProvincesController::class, 'find'])->name('provincias.find');
        Route::get('/provincias/{province}/etnias', [ProvincesController::class, 'getAllEthnicGroups']);
        Route::get('/provincias/{province}/etnias/{ethnicGroup}', [ProvincesController::class, 'getEthnicGroup']);
        Route::get('/provincias/{province}/linguas', [ProvincesController::class, 'getAllLanguages']);
        Route::get('/provincias/{province}/linguas/{language}', [ProvincesController::class, 'getLanguage']);
        Route::get('/provincias/{province}/municipios', [ProvincesController::class, 'getAllMunicipalities']);
        Route::get('/provincias/{province}/municipios/{municipality}', [ProvincesController::class, 'getMunicipality']);

        Route::get('/provincias/{province}/municipios/{municipality}/comunas', [ProvincesController::class, 'getAllCommunes']);
        Route::get('/provincias/{province}/municipios/{municipality}/comunas/{commune}', [ProvincesController::class, 'getCommune']);
        Route::get('/provincias/{province}/municipios/{municipality}/distritos', [ProvincesController::class, 'getAllDistricts']);
        Route::get('/provincias/{province}/municipios/{municipality}/distritos/{district}', [ProvincesController::class, 'getDistrict']);

        Route::get('/provincias/{province}/capital', [ProvincesController::class, 'getCapital'])->name('provincias.capital');

        Route::get('/capitais', [CapitalsController::class, 'getAll'])->name('capitais');
        Route::get('/capitais/{capital}', [CapitalsController::class, 'find'])->name('capitais.find');

        Route::get('/municipios', [MunicipalitiesController::class, 'getAll'])->name('municipios');
        Route::get('/municipios/{municipality}', [MunicipalitiesController::class, 'find']);

        Route::get('/municipios/{municipality}/comunas', [MunicipalitiesController::class, 'getAllCommunes'])->name('municipios.comunas');
        Route::get('/municipios/{municipality}/comunas/{commune}', [MunicipalitiesController::class, 'getCommune']);

        Route::get('/municipios/{municipality}/distritos', [MunicipalitiesController::class, 'getAllDistricts'])->name('municipio.distritos');
        Route::get('/municipios/{municipality}/distritos/{district}', [MunicipalitiesController::class, 'getDistrict']);

        Route::get('/comunas', [CommunesController::class, 'getAll'])->name('comunas');
        Route::get('/comunas/{commune}', [CommunesController::class, 'find']);

        Route::get('/distritos', [DistrictsController::class, 'getAll'])->name('distritos');
        Route::get('/distritos/{district}', [DistrictsController::class, 'find']);

        Route::get('/etnias', [EthnicGroupsController::class, 'getAll'])->name('etnias');
        Route::get('/etnias/{ethnicGroup}', [EthnicGroupsController::class, 'find']);

        Route::get('/linguas', [LanguagesController::class, 'getAll'])->name('linguas');
        Route::get('/linguas/{language}', [LanguagesController::class, 'find']);

        // teste
    });
});

Route::prefix('v2')->group(function () {
    Route::name('api.v2.')->group(function () {

        Route::get('/angola', [V2\HomeController::class, 'index'])->name('angola');

        Route::get('/provinces', [V2\ProvincesController::class, 'getAll'])->name('provinces');
        Route::get('/provinces/{province}', [V2\ProvincesController::class, 'find'])->name('provinces.find');
        Route::get('/provinces/{province}/ethnic-groups', [V2\ProvincesController::class, 'getAllEthnicGroups']);
        Route::get('/provinces/{province}/ethnic-groups/{ethnicGroup}', [V2\ProvincesController::class, 'getEthnicGroup']);
        Route::get('/provinces/{province}/languages', [V2\ProvincesController::class, 'getAllLanguages']);
        Route::get('/provinces/{province}/languages/{language}', [V2\ProvincesController::class, 'getLanguage']);
        Route::get('/provinces/{province}/municipalities', [V2\ProvincesController::class, 'getAllMunicipalities']);
        Route::get('/provinces/{province}/municipalities/{municipality}', [V2\ProvincesController::class, 'getMunicipality']);

        Route::get('/provinces/{province}/municipalities/{municipality}/communes', [V2\ProvincesController::class, 'getAllCommunes']);
        Route::get('/provinces/{province}/municipalities/{municipality}/communes/{commune}', [V2\ProvincesController::class, 'getCommune']);
        Route::get('/provinces/{province}/municipalities/{municipality}/districts', [V2\ProvincesController::class, 'getAllDistricts']);
        Route::get('/provinces/{province}/municipalities/{municipality}/districts/{district}', [V2\ProvincesController::class, 'getDistrict']);

        Route::get('/provinces/{province}/capital', [V2\ProvincesController::class, 'getCapital'])->name('provinces.capital');

        Route::get('/capitals', [V2\CapitalsController::class, 'getAll'])->name('capitals');
        Route::get('/capitals/{capital}', [V2\CapitalsController::class, 'find'])->name('capitals.find');

        Route::get('/municipalities', [V2\MunicipalitiesController::class, 'getAll'])->name('municipalities');
        Route::get('/municipalities/{municipality}', [V2\MunicipalitiesController::class, 'find']);

        Route::get('/municipalities/{municipality}/communes', [V2\MunicipalitiesController::class, 'getAllCommunes'])->name('municipalities.communes');
        Route::get('/municipalities/{municipality}/communes/{commune}', [V2\MunicipalitiesController::class, 'getCommune']);

        Route::get('/municipalities/{municipality}/districts', [V2\MunicipalitiesController::class, 'getAllDistricts'])->name('municipalities.districts');
        Route::get('/municipalities/{municipality}/districts/{district}', [V2\MunicipalitiesController::class, 'getDistrict']);

        Route::get('/communes', [V2\CommunesController::class, 'getAll'])->name('communes');
        Route::get('/communes/{commune}', [V2\CommunesController::class, 'find']);

        Route::get('/districts', [V2\DistrictsController::class, 'getAll'])->name('districts');
        Route::get('/districts/{district}', [V2\DistrictsController::class, 'find']);

        Route::get('/ethnic-groups', [V2\EthnicGroupsController::class, 'getAll'])->name('ethnic-groups');
        Route::get('/ethnic-groups/{ethnicGroup}', [V2\EthnicGroupsController::class, 'find']);

        Route::get('/languages', [V2\LanguagesController::class, 'getAll'])->name('languages');
        Route::get('/languages/{language}', [V2\LanguagesController::class, 'find']);
    });
});
