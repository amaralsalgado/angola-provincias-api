@extends('docs.layout')
@section('metaTitle', 'Línguas')
@section('title', 'Línguas')
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

    <x-docs.section.section title="Buscando todas as línguas do país" id="buscando-todas-as-linguas-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as línguas do país:
            <x-docs.endpoint v1="/linguas" v2="/languages" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="languages.index" />
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando uma determinada língua" id="buscando-uma-determinada-lingua">
            <x-docs.section.paragraph>
                Para consultar uma determinada língua, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/linguas/{slug}" v2="/languages/{slug}" />
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug da língua.
                <br>
                <br>
                As informações de cada língua podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica a língua. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as
                línguas. Quando você faz uma requisição por ex. <strong>GET /línguas</strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente à língua.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="languages.show" />

            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>

@endsection
