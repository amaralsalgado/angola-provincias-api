@extends('docs.layout')
@section('metaTitle', 'Municípios')
@section('title', 'Municípios')
@section('content')


    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Introdução',
                'archor' => 'introducao',
            ],
            [
                'name' => 'Buscando todos os municípios do país',
                'archor' => 'buscando-todos-os-municipios-do-pais',
            ],
            [
                'name' => 'Buscando um determinado município',
                'archor' => 'buscando-um-determinado-municipio',
                'sub-menu' => [
                    [
                        'name' => 'Buscando os distritos de um muncípio',
                        'archor' => 'buscando-os-distritos-de-um-municipio',
                    ],
                    [
                        'name' => 'Buscando as comunas de um muncípio',
                        'archor' => 'buscando-as-comunas-de-um-municipio',
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

    <x-docs.section.section title="Buscando todos os municípios do país" id="buscando-todos-os-municipios-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todos os municípios do país:
            <x-docs.endpoint v1="/municipios" v2="/municipalities" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="municipalities.index" />
        </x-docs.section.paragraph>

    </x-docs.section.section>

    <x-docs.section.section title="Buscando um determinado município" id="buscando-um-determinado-municipio">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre um determinado município:
            <x-docs.endpoint v1="/municipios/{slug}" v2="/municipalities/{slug}" />
        </x-docs.section.paragraph>

        <x-info>
            <strong>{slug}</strong> deve ser substituído pelo slug do município.
            <br>
            <br>
            As informações de cada município podem ser acessadas através de um <strong>slug</strong> exclusivo que
            identifica o município. O <strong>slug</strong> está disponível na resposta da requisição que lista todas os
            municípios. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/municipios" v2="/municipalities" /></strong>, a API no índice "data"
            retorna um array de objetos, e cada objeto contém o slug correspondente ao município.
        </x-info>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="municipalities.show" />
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando os distritos de um município"
            id="buscando-os-distritos-de-um-municipio">
            <x-docs.section.paragraph>
                Para consultar os distritos de um município, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/municipios/{slug}/distritos" v2="/municipalities/{slug}/districts" />
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug do município.
                <br>
                <br>
                As informações de cada município podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica o município. O <strong>slug</strong> está disponível na resposta da requisição que lista todas os
                municípios. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/municipios" v2="/municipalities" /></strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente ao município.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="municipalities.districts" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar <a href="{{ route('docs.distritos') }}"
                    class="underline text-blue-500">distritos</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Buscando as comunas de um muncípio" id="buscando-as-comunas-de-um-municipio">
            <x-docs.section.paragraph>
                Para consultar as comunas de um município, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/municipios/{slug}/comunas" v2="/municipalities/{slug}/communes" />
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug do município.
                <br>
                <br>
                As informações de cada município podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica o município. O <strong>slug</strong> está disponível na resposta da requisição que lista todas os
                municípios. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/municipios" v2="/municipalities" /></strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente ao município.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="municipalities.communes" />

            </x-docs.section.paragraph>
            <x-docs.section.paragraph>
                Saiba mais sobre como buscar <a href="{{ route('docs.comunas') }}"
                    class="underline text-blue-500">comunas</a>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>


    </x-docs.section.section>

@endsection
