@extends('docs.layout')
@section('metaTitle', 'Versão da api')
@section('title', 'Versão da api')
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Visão geral',
                'archor' => 'visao-geral',
            ],
            [
                'name' => 'Diferenças entre v1 e v2',
                'archor' => 'diferencas-entre-v1-e-v2',
            ],
        ]"></x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Visão geral" id="visao-geral">

        <x-docs.section.paragraph>
            A API possui duas versões, ambas disponíveis e com os mesmos dados. A versão é especificada no caminho da URL
            (ex.: <x-docs.path v1="/provincias" v2="/provinces" />).
            Use o seletor <strong class="font-medium">v1 | v2</strong> no topo da página para ver os endpoints e as
            respostas de exemplo de cada versão.
        </x-docs.section.paragraph>
        <x-docs.section.paragraph>
            A <strong class="font-medium">v2</strong> é a versão mais recente e a recomendada para novas integrações. A
            <strong class="font-medium">v1</strong> continua funcionando sem alterações.
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Diferenças entre v1 e v2" id="diferencas-entre-v1-e-v2">

        <x-docs.section.paragraph>
            <ul class="list-disc text-[#565454] dark:text-zinc-300 text-[13px] sm:text-[14px]">
                <li class="ml-10 mt-3">
                    <strong class="font-medium">Caminhos e campos em inglês</strong>: por exemplo,
                    <strong class="font-medium">/provincias</strong> passa a ser
                    <strong class="font-medium">/provinces</strong> e o campo <strong class="font-medium">nome</strong>
                    passa a ser <strong class="font-medium">name</strong>.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Datas no formato ISO 8601</strong>: a data de fundação passa de
                    <strong class="font-medium">26-04-1980</strong> para <strong class="font-medium">1980-04-26</strong>.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Idioma das mensagens à escolha</strong>: as mensagens de sucesso e de erro
                    da v2 continuam em português por padrão. Para recebê-las em inglês, envie o cabeçalho
                    <strong class="font-medium">Accept-Language: en</strong>. A v1 responde sempre em português.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Os dados são os mesmos</strong>: nomes e slugs continuam em português
                    (ex.: Bié, bie).
                </li>
            </ul>
        </x-docs.section.paragraph>
    </x-docs.section.section>

@endsection
