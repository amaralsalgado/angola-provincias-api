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
                ],
            ],
        ]">
        </x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Introdução" id="introducao">
        <x-docs.section.paragraph>
            Todas as requisições à API começam com a seguinte URL base: <x-docs.base-url />
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Buscando todas as províncias" id="buscando-todas-as-provincias">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as províncias:
            <x-docs.endpoint v1="/provincias" v2="/provinces" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="provinces.index" />
        </x-docs.section.paragraph>

    </x-docs.section.section>

    <x-docs.section.section title="Buscando informações sobre uma determinada província"
        id="buscando-informacoes-sobre-uma-determinada-provincia">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre uma determinada província:
            <x-docs.endpoint v1="/provincias/{slug}" v2="/provinces/{slug}" />
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug da província.
            <br>
            <br>
            As informações de cada província podem ser acessadas através de um <strong>slug</strong> exclusivo que
            identifica a província. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as
            províncias. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/provincias" v2="/provinces" /></strong>, a API no índice "data"
            retorna um array de objetos, e cada objeto contém o slug correspondente à província.
        </x-info>

        <x-docs.section.paragraph>
            <strong class="font-normal">Segue como exemplo de consulta, buscando informações da província do Uíge:</strong>

            <x-docs.example name="provinces.show" />
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando informações específicas" id="buscando-informacoes-especificas">
            <x-docs.section.paragraph>
                A API permite que você acesse uma variedade de informações sobre qualquer província de forma detalhada,
                utilizando endpoints específicos. Para consultar dados como a <strong>capital</strong>,
                <strong>municípios</strong>, <strong>comunas</strong>, <strong>distritos</strong>, <strong>línguas</strong>
                e <strong>etnias</strong> de uma província, você deve utilizar o slug da província na URL correspondente. O
                slug identifica unicamente cada província e pode ser obtido nas respostas das requisições à api.

                A seguir, explicamos como você pode consultar cada uma dessas informações de uma província utilizando a api.
            </x-docs.section.paragraph>

        </x-docs.section.sub-section>


        <x-docs.section.sub-section title="Capital" id="capital">
            <x-docs.section.paragraph>
                Para consultar a capital de uma província específica, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/provincias/{slug}/capital" v2="/provinces/{slug}/capital" />
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="provinces.capital" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{ route('docs.capitais') }}"
                    class="underline text-blue-500">capitais</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Municípios" id="municipios">
            <x-docs.section.paragraph>
                Para consultar os municípios de uma província, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/provincias/{slug}/municipios" v2="/provinces/{slug}/municipalities" />
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="provinces.municipalities" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar os <a href="{{ route('docs.municipios') }}"
                    class="underline text-blue-500">municípios</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Línguas" id="linguas">
            <x-docs.section.paragraph>
                Para consultar as línguas faladas de uma província, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/provincias/{slug}/linguas" v2="/provinces/{slug}/languages" />
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="provinces.languages" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{ route('docs.linguas') }}"
                    class="underline text-blue-500">línguas</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Etnias" id="etnias">
            <x-docs.section.paragraph>
                Para consultar as etnias presentes em uma província, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/provincias/{slug}/etnias" v2="/provinces/{slug}/ethnic-groups" />
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="provinces.ethnic-groups" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar as <a href="{{ route('docs.etnias') }}"
                    class="underline text-blue-500">etnias</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>



@endsection
