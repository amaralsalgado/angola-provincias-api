@extends('docs.layout')
@section('metaTitle','Distritos')
@section('title','Distritos')
@section('content')


<div>

    <x-docs.page-menu-archor.menu :archors="[
                    [
                        'name' => 'Introdução',
                        'archor' => 'introducao',
                    ],
                    [
                        'name' => 'Buscando todos os distritos do país',
                        'archor' => 'buscando-todos-os-distritos-do-pais',
                        'sub-menu' => [
                            [
                        'name' => 'Buscando um determinado distrito',
                        'archor' => 'buscando-um-determinado-distrito',
                            ],
                            ]
                    ],
                    ]">
    </x-docs.page-menu-archor.menu>

</div>


<x-docs.section.section title="Introdução" id="introducao">
    <x-docs.section.paragraph>
        Todas as requisições à API começam com a seguinte URL base: <x-code>{{config('app.api_base_url')}}</x-code>
    </x-docs.section.paragraph>
</x-docs.section.section>

<x-docs.section.section title="Buscando todos os distritos do país" id="buscando-todos-os-distritos-do-pais">

    <x-docs.section.paragraph>
        Este endpoint retorna as informações sobre todos os distritos do país:
        <x-code>
            GET /distritos
        </x-code>
    </x-docs.section.paragraph>

    <x-docs.section.paragraph>
        <strong class="font-normal">Exemplo de consulta:</strong>

        <x-code>
            // GET {{route('api.v1.distritos')}}

            {
            "success": true,
            "code": 200,
            "message": "Sucesso",
            "data": []
            }
        </x-code>
    </x-docs.section.paragraph>

    <x-docs.section.sub-section title="Buscando um determinado distrito" id="buscando-um-determinado-distrito">
        <x-docs.section.paragraph>
            Para consultar um determinado distrito, utilize o seguinte endpoint:
            <x-code>
                GET /distritos/{slug}
            </x-code>
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug do distrito.
            <br>
            <br>
            As informações de cada distrito podem ser acessadas através de um <strong>slug</strong> exclusivo que identifica o distrito. O <strong>slug</strong> está disponível na resposta da requisição que lista todos os distritos. Quando você faz uma requisição por ex. <strong>GET /distritos</strong>, a API no índice "data" retorna um array de objetos, e cada objeto contém o slug correspondente ao distrito.
        </x-info>

    </x-docs.section.sub-section>

</x-docs.section.section>

@endsection
