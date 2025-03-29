@extends('docs.layout')
@section('metaTitle','Línguas')
@section('title','Línguas')
@section('content')


<div>

    <x-docs.page-menu-archor.menu :archors="[
                    [
                        'name' => 'Introdução',
                        'archor' => 'introducao',
                    ],
                    [
                        'name' => 'Buscando todas as línguas do país',
                        'archor' => 'buscando-todas-as-linguas-do-pais',
                        'sub-menu' => [
                            [
                        'name' => 'Buscando uma determinada língua',
                        'archor' => 'buscando-uma-determinada-lingua',
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

<x-docs.section.section title="Buscando todas as línguas do país" id="buscando-todas-as-linguas-do-pais">

    <x-docs.section.paragraph>
        Este endpoint retorna as informações sobre todas as línguas do país:
        <x-code>
            GET /línguas
        </x-code>
    </x-docs.section.paragraph>

    <x-docs.section.paragraph>
        <strong class="font-normal">Exemplo de consulta:</strong>

        <x-code>
            // GET {{route('api.v1.linguas')}}

            {
            "success": true,
            "code": 200,
            "message": "Sucesso",
            "data": [
            {
            "nome": "Kimbundu",
            "slug": "kimbundu",
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

    <x-docs.section.sub-section title="Buscando uma determinada língua" id="buscando-uma-determinada-lingua">
        <x-docs.section.paragraph>
            Para consultar uma determinada língua, utilize o seguinte endpoint:
            <x-code>
                GET /línguas/{slug}
            </x-code>
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug da língua.
            <br>
            <br>
            As informações de cada língua podem ser acessadas através de um <strong>slug</strong> exclusivo que identifica a língua. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as línguas. Quando você faz uma requisição por ex. <strong>GET /línguas</strong>, a API no índice "data" retorna um array de objetos, e cada objeto contém o slug correspondente à língua.
        </x-info>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-code>
                // GET {{config('app.api_base_url')}}/linguas/kimbundu

                {
            "success": true,
            "code": 200,
            "message": "Sucesso",
            "data": {
            "nome": "Kimbundu",
            "slug": "kimbundu",
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
