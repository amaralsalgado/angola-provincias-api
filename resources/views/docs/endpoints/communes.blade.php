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
            Todas as requisições à API começam com a seguinte URL base: <x-docs.base-url />
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Buscando todas as comunas do país" id="buscando-todas-as-comunas-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as comunas do país:
            <x-docs.endpoint v1="/comunas" v2="/communes" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="communes.index" />
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando uma determinada comuna" id="buscando-uma-determinada-comuna">
            <x-docs.section.paragraph>
                Para consultar uma determinada comuna, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/comunas/{slug}" v2="/communes/{slug}" />
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug da comuna.
                <br>
                <br>
                As informações de cada comuna podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica a comuna. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as
                comunas. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/comunas" v2="/communes" /></strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente à comuna.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="communes.show" />

            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>

@endsection
