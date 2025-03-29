@extends('docs.layout')
@section('metaTitle','Etnias')
@section('title','Etnias')
@section('content')


<div>

    <x-docs.page-menu-archor.menu :archors="[
                    [
                        'name' => 'Introdução',
                        'archor' => 'introducao',
                    ],
                    [
                        'name' => 'Buscando todas as etnias do país',
                        'archor' => 'buscando-todas-as-etnias-do-pais',
                        'sub-menu' => [
                            [
                        'name' => 'Buscando uma determinada etnia',
                        'archor' => 'buscando-uma-determinada-etnia',
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

<x-docs.section.section title="Buscando todas as etnias do país" id="buscando-todas-as-etnias-do-pais">

    <x-docs.section.paragraph>
        Este endpoint retorna as informações sobre todas as etnias do país:
        <x-code>
            GET /etnias
        </x-code>
    </x-docs.section.paragraph>

    <x-docs.section.paragraph>
        <strong class="font-normal">Exemplo de consulta:</strong>

        <x-code>
            // GET {{route('api.v1.etnias')}}

            {
            "success": true,
            "code": 200,
            "message": "Sucesso",
            "data": [
            {
            "nome": "Ambundu",
            "slug": "ambundu",
            "provincias": [
                {
            "nome": "Bengo",
            "slug": "bengo",
            "extensao": "31.371 km²",
            "data_fundacao": "26-04-1980"
            },
            //...
            ]
            },
            //...
            ]
            }
        </x-code>
    </x-docs.section.paragraph>

    <x-docs.section.sub-section title="Buscando uma determinada etnia" id="buscando-uma-determinada-etnia">
        <x-docs.section.paragraph>
            Para consultar uma determinada etnia, utilize o seguinte endpoint:
            <x-code>
                GET /etnias/{slug}
            </x-code>
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug da etnia.
            <br>
            <br>
            As informações de cada etnia podem ser acessadas através de um <strong>slug</strong> exclusivo que identifica a etnia. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as etnias. Quando você faz uma requisição por ex. <strong>GET /etnias</strong>, a API no índice "data" retorna um array de objetos, e cada objeto contém o slug correspondente à etnia.
        </x-info>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-code>
                // GET {{config('app.api_base_url')}}/etnias/ambundu

            {
            "success": true,
            "code": 200,
            "message": "Sucesso",
            "data": {
            "nome": "Ambundu",
            "slug": "ambundu",
            "provincias": [
                {
            "nome": "Bengo",
            "slug": "bengo",
            "extensao": "31.371 km²",
            "data_fundacao": "26-04-1980"
            },
            //...
            ]
            }
            }
            </x-code>

        </x-docs.section.paragraph>
    </x-docs.section.sub-section>

</x-docs.section.section>

@endsection
