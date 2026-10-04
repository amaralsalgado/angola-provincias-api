<?php

use App\Http\Middleware\SetDocsVersion;
use Illuminate\Support\Facades\Route;



$docsVersions = ['1.x', '2.x'];
$latestDocsVersion = end($docsVersions);

Route::redirect('/', "/docs/{$latestDocsVersion}");

// /docs opens the latest version of the docs
Route::redirect('/docs', "/docs/{$latestDocsVersion}");

Route::prefix('docs/{version}')->whereIn('version', $docsVersions)->middleware(SetDocsVersion::class)->group(function () {

    //INTRODUÇÃO
    Route::name('docs.')->group(function () {
        Route::get('/', function () {
            return view('docs.index');
        })->name('index');

        //BUSCANDO INFORMAÇÕES

         Route::get('/angola', function () {
            return view('docs.endpoints.angola');
        })->name('angola');

        Route::get('/provincias', function () {
            return view('docs.endpoints.provinces');
        })->name('provincias');

        Route::get('/capitais', function () {
            return view('docs.endpoints.capitals');
        })->name('capitais');

        Route::get('/municipios', function () {
            return view('docs.endpoints.municipalities');
        })->name('municipios');

        Route::get('/comunas', function () {
            return view('docs.endpoints.communes');
        })->name('comunas');

        Route::get('/distritos', function () {
            return view('docs.endpoints.districts');
        })->name('distritos');

        Route::get('/etnias', function () {
            return view('docs.endpoints.ethnic-groups');
        })->name('etnias');

        Route::get('/linguas', function () {
            return view('docs.endpoints.languages');
        })->name('linguas');


        //SERVIDOR MCP

        Route::get('/mcp', function () {
            return view('docs.mcp.index');
        })->name('mcp');


        //TRATAMENTO DE ERROS

        Route::get('/tratamento-de-erros', function () {
            return view('docs.error-handling.index');
        })->name('tratamento_de_erros');


        //LIMITES E RESTRIÇÕES

        Route::get('/limites', function () {
            return view('docs.limits-and-restrictions.index');
        })->name('limites');


        //VERSIONAMENTO

        Route::get('/versionamento', function () {
            return view('docs.versioning.index');
        })->name('versionamento');

        Route::get('/guia-de-migracao', function () {
            return view('docs.migration-guide.index');
        })->name('guia_de_migracao');
    });
});
