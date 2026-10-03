@extends('docs.layout')
@section('metaTitle', 'O país - Angola')
@section('title')
    Informações Gerais sobre <span class=" text-red-500">An</span><span class=" text-yellow-400">go</span><span
        class=" text-black dark:text-gray-600">la</span>
@endsection
@section('content')


    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Introdução',
                'archor' => 'introducao',
            ],
            [
                'name' => 'Buscando informações gerais do páis',
                'archor' => 'buscando-informacoes-gerais-do-pais',
            ],
        ]">
        </x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Introdução" id="introducao">
        <x-docs.section.paragraph>
            Todas as requisições à API começam com a seguinte URL base: <x-docs.base-url />
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Buscando informações gerais do páis" id="buscando-informacoes-gerais-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna estatísticas administrativas e dados oficiais da República de Angola, incluindo número
            total de províncias, municípios, comunas, moeda, fuso horário, entre outros:
            <x-docs.endpoint v1="/angola" v2="/angola" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="angola.index" />
        </x-docs.section.paragraph>

    </x-docs.section.section>

@endsection
