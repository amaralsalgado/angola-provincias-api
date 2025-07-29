<?php

use Illuminate\Support\Facades\Route;



Route::redirect('/', '/docs');

Route::prefix('docs')->group(function () {

    //INTRODUÇÃO
    Route::name('docs.')->group(function () {
        Route::get('/', function () {
            return view('docs.index');
        })->name('index');

        //BUSCANDO INFORMAÇÕES

         Route::get('/angola', function () {
            return view('docs.buscando-informacoes.angola');
        })->name('angola');

        Route::get('/provincias', function () {
            return view('docs.buscando-informacoes.provincias');
        })->name('provincias');

        Route::get('/capitais', function () {
            return view('docs.buscando-informacoes.capitais');
        })->name('capitais');

        Route::get('/municipios', function () {
            return view('docs.buscando-informacoes.municipios');
        })->name('municipios');

        Route::get('/comunas', function () {
            return view('docs.buscando-informacoes.comunas');
        })->name('comunas');

        Route::get('/distritos', function () {
            return view('docs.buscando-informacoes.distritos');
        })->name('distritos');

        Route::get('/etnias', function () {
            return view('docs.buscando-informacoes.etnias');
        })->name('etnias');

        Route::get('/linguas', function () {
            return view('docs.buscando-informacoes.linguas');
        })->name('linguas');


        //TRATAMENTO DE ERROS

        Route::get('/tratamento-de-erros', function () {
            return view('docs.tratamento-de-erros.index');
        })->name('tratamento_de_erros');


        //LIMITES E RESTRIÇÕES

        Route::get('/limites', function () {
            return view('docs.limites-e-restricoes.index');
        })->name('limites');


        //VERSIONAMENTO

        Route::get('/versionamento', function () {
            return view('docs.versionamento.index');
        })->name('versionamento');
    });
});
