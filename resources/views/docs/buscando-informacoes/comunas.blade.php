@extends('docs.layout')
@section('metaTitle', 'Comunas')
@section('title', 'Comunas')
@section('content')
    <div>
        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Introdução',
                'archor' => 'introducao',
            ],
            [
                'name' => 'Buscando todas as comunas do país',
                'archor' => 'buscando-todas-as-comunas-do-pais',
                'sub-menu' => [
                    [
                        'name' => 'Buscando uma determinada comuna',
                        'archor' => 'buscando-uma-determinada-comuna',
                    ],
                ],
            ],
        ]">
        </x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Introdução" id="introducao">
        <x-docs.section.paragraph>
            Todas as requisições à API começam com a seguinte URL base: <x-code>{{ config('app.api_base_url') }}</x-code>
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Buscando todas as comunas do país" id="buscando-todas-as-comunas-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as comunas do país:
            <x-code>
                GET /comunas
            </x-code>
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-code>
                // GET {{ route('api.v1.comunas') }}

                {
                "success": true,
                "code": 200,
                "message": "Sucesso",
                "data": [
                {
                "nome": "Bela Vista",
                "slug": "bela-vista",
                "municipio": {
                "nome": "Ambriz",
                "slug": "ambriz",
                "provincia": {
                "nome": "Bengo",
                "slug": "bengo",
                "extensao": "31.371 km²",
                "data_fundacao": "26-04-1980"
                }
                }
                },
                //...
                ]
                }
            </x-code>
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando uma determinada comuna" id="buscando-uma-determinada-comuna">
            <x-docs.section.paragraph>
                Para consultar uma determinada comuna, utilize o seguinte endpoint:
                <x-code>
                    GET /comunas/{slug}
                </x-code>
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug da comuna.
                <br>
                <br>
                As informações de cada comuna podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica a comuna. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as
                comunas. Quando você faz uma requisição por ex. <strong>GET /comunas</strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente à comuna.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-code>
                    // GET {{ config('app.api_base_url') }}/comunas/bela-vista

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": {
                    "nome": "Bela Vista",
                    "slug": "bela-vista",
                    "municipio": {
                    "nome": "Ambriz",
                    "slug": "ambriz",
                    "provincia": {
                    "nome": "Bengo",
                    "slug": "bengo",
                    "extensao": "31.371 km²",
                    "data_fundacao": "26-04-1980"
                    }
                    }
                    }
                    }
                </x-code>

            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>

@endsection
