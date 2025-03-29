@extends('docs.layout')
@section('metaTitle','Versão da api')
@section('title','Versão da api')
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
    A versão atual da API é v1. Em atualizações futuras, novas versões serão lançadas e a versão será especificada no caminho da URL (ex.: /v2/provincias).
    </x-docs.section.paragraph>
</x-docs.section.section>

@endsection