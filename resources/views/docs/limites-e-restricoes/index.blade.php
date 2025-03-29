@extends('docs.layout')
@section('metaTitle','Limites')
@section('title')
Limites
@endsection
@section('content')

<div>

    <x-docs.page-menu-archor.menu :archors="[
                    [
                        'name' => 'Visão geral',
                        'archor' => 'visao-geral',
                       ]
                    ]"></x-docs.page-menu-archor.menu>

</div>


<x-docs.section.section title="Visão geral" id="visao-geral">
        <x-docs.section.paragraph>
            A API é aberta a qualquer pessoa ou organização que precise de informações sobre as províncias de Angola. Isso inclui:

            <ul class="list-disc text-[#565454] dark:text-zinc-300">
                <li class="ml-10 mt-3">
                    <strong class="font-medium">Desenvolvedores</strong>: Para integrar dados das províncias em aplicativos e websites.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Pesquisadores e Acadêmicos</strong>: Para análises e estudos relacionados a Angola.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Empresas</strong>: Que desejam obter informações geográficas e demográficas para tomada de decisões de negócio.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Cidadãos em geral</strong>: Que desejam explorar e aprender mais sobre as províncias do país.
                </li>
            </ul>
        </x-docs.section.paragraph>

    </x-docs.section.section>
@endsection