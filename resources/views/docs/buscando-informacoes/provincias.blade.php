@extends('docs.layout')
@section('metaTitle', 'Províncias')
@section('title', 'Províncias')
@section('content')


    <div>

        <x-docs.page-menu-archor.menu :archors="[
        [
            'name' => 'Introdução',
            'archor' => 'introducao',
        ],
        [
            'name' => 'Buscando todas as províncias',
            'archor' => 'buscando-todas-as-provincias',
        ],
        [
            'name' => 'Buscando informações sobre uma determinada província',
            'archor' => 'buscando-informacoes-sobre-uma-determinada-provincia',
            'sub-menu' => [
                [
                    'name' => 'Buscando informações específicas',
                    'archor' => 'buscando-informacoes-especificas',
                ],
                [
                    'name' => 'Capital',
                    'archor' => 'capital',
                ],
                [
                    'name' => 'Municípios',
                    'archor' => 'municipios',
                ],
                [
                    'name' => 'Línguas',
                    'archor' => 'linguas',
                ],
                [
                    'name' => 'Etnias',
                    'archor' => 'etnias',
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

    <x-docs.section.section title="Buscando todas as províncias" id="buscando-todas-as-provincias">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as províncias:
            <x-code>
                GET /provincias
            </x-code>
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-code>
                // GET {{route('api.v1.provincias')}}

                {
                "success": true,
                "code": 200,
                "message": "Sucesso",
                "data": [
                {
                "nome": "Luanda",
                "slug": "luanda",
                "extensao": "18.826 km²",
                "data_fundacao": "25-01-1576",
                "capital": {
                "nome": "Luanda",
                "slug": "luanda"
                },
                "municipios": [
                {
                "nome": "Talatona",
                "slug": "talatona",
                "distritos": [
                {
                "nome": "Benfica",
                "slug": "benfica"
                },
                //...
                ],
                "comunas": [
                {
                "nome": "Mussulo",
                "slug": "mussulo"
                },
                //...
                ]
                },
                ],
                "etnias": [
                {
                "nome": "Ambundu",
                "slug": "ambundu"
                },
                //...
                ],
                "linguas": [
                {
                "nome": "Kimbundu",
                "slug": "kimbundu"
                },
                //...
                ]
                },
                //...
                ]
                }
            </x-code>
        </x-docs.section.paragraph>

    </x-docs.section.section>

    <x-docs.section.section title="Buscando informações sobre uma determinada província" id="buscando-informacoes-sobre-uma-determinada-provincia">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre uma determinada província:
            <x-code>
                GET /provincias/{slug}
            </x-code>
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug da província.
            <br>
            <br>
            As informações de cada província podem ser acessadas através de um <strong>slug</strong> exclusivo que identifica a província. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as províncias. Quando você faz uma requisição por ex. <strong>GET /provincias</strong>, a API no índice "data" retorna um array de objetos, e cada objeto contém o slug correspondente à província.
        </x-info>

        <x-docs.section.paragraph>
            <strong class="font-normal">Segue como exemplo de consulta, buscando informações da província do Uíge:</strong>

            <x-code>
                // GET {{route('api.v1.provincias')}}/uige

                {
                "success": true,
                "code": 200,
                "message": "Sucesso",
                "data": {
                "nome": "Uíge",
                "slug": "uige",
                "extensao": "58.698 km²",
                "data_fundacao": "31-05-1887",
                "capital": {
                "nome": "Uíge",
                "slug": "uige"
                },
                "municipios": [
                {
                "nome": "Maquela do Zombo",
                "slug": "maquela-do-zombo",
                "distritos": [],
                "comunas": [
                {
                "nome": "Maquela do Zombo",
                "slug": "maquela-do-zombo"
                },
                //...
                ]
                },
                //...
                ],
                "etnias": [
                {
                "nome": "Ambundu",
                "slug": "ambundu"
                },
                //...
                ],
                "linguas": [
                {
                "nome": "Kikongo",
                "slug": "kikongo"
                },
                //...
                ]
                }
                }
            </x-code>
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando informações específicas" id="buscando-informacoes-especificas">
            <x-docs.section.paragraph>
                A API permite que você acesse uma variedade de informações sobre qualquer província de forma detalhada, utilizando endpoints específicos. Para consultar dados como a <strong>capital</strong>, <strong>municípios</strong>, <strong>comunas</strong>, <strong>distritos</strong>, <strong>línguas</strong> e <strong>etnias</strong> de uma província, você deve utilizar o slug da província na URL correspondente. O slug identifica unicamente cada província e pode ser obtido nas respostas das requisições à api.v1.

                A seguir, explicamos como você pode consultar cada uma dessas informações de uma província utilizando a api.v1.
            </x-docs.section.paragraph>

        </x-docs.section.sub-section>


        <x-docs.section.sub-section title="Capital" id="capital">
            <x-docs.section.paragraph>
                Para consultar a capital de uma província específica, utilize o seguinte endpoint:
                <x-code>
                    GET /provincias/{slug}/capital
                </x-code>
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-code>
                    // GET {{config('app.api_base_url')}}/provincias/bengo/capital

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": {
                    "nome": "Caxito",
                    "slug": "caxito"
                    }
                    }
                </x-code>

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{route('docs.capitais')}}" class="underline text-blue-500">capitais</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Municípios" id="municipios">
            <x-docs.section.paragraph>
                Para consultar os municípios de uma província, utilize o seguinte endpoint:
                <x-code>
                    GET /provincias/{slug}/municipios
                </x-code>
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-code>
                    // GET {{config('app.api_base_url')}}/provincias/bengo/municipios

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": [
                    {
                    "nome": "Ambriz",
                    "slug": "ambriz"
                    },
                    //...
                    ]
                    }
                </x-code>

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar os <a href="{{route('docs.municipios')}}" class="underline text-blue-500">municípios</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Línguas" id="linguas">
            <x-docs.section.paragraph>
                Para consultar as línguas faladas de uma província, utilize o seguinte endpoint:
                <x-code>
                    GET /provincias/{slug}/linguas
                </x-code>
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-code>
                    // GET {{config('app.api_base_url')}}/provincias/lunda-norte/linguas

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": [
                    {
                    "nome": "Cokwe",
                    "slug": "cokwe"
                    }
                    ]
                    }
                </x-code>

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{route('docs.linguas')}}" class="underline text-blue-500">línguas</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Etnias" id="etnias">
            <x-docs.section.paragraph>
                Para consultar as etnias presentes em uma província, utilize o seguinte endpoint:
                <x-code>
                    GET /provincias/{slug}/etnias
                </x-code>
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-code>
                    // GET {{config('app.api_base_url')}}/provincias/zaire/etnias

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": [
                    {
                    "nome": "Bakongo",
                    "slug": "bakongo"
                    }
                    ]
                    }
                </x-code>

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{route('docs.etnias')}}" class="underline text-blue-500">etnias</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>



@endsection
