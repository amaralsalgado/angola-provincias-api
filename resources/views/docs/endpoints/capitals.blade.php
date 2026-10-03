@extends('docs.layout')
@section('metaTitle', 'Capitais')
@section('title', 'Capitais')
@section('content')

    <div>
        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Introdução',
                'archor' => 'introducao',
            ],
            [
                'name' => 'Buscando todas as capitais do país',
                'archor' => 'buscando-todas-as-capitais-do-pais',
                'sub-menu' => [
                    [
                        'name' => 'Buscando uma determinada capital',
                        'archor' => 'buscando-uma-determinada-capital',
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

    <x-docs.section.section title="Buscando todas as capitais do país" id="buscando-todas-as-capitais-do-pais">

        <x-docs.section.paragraph>
            Este endpoint retorna as informações sobre todas as capitais do país:
            <x-docs.endpoint v1="/capitais" v2="/capitals" />
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            <strong class="font-normal">Exemplo de consulta:</strong>

            <x-docs.example name="capitals.index" />
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Buscando uma determinada capital" id="buscando-uma-determinada-capital">
            <x-docs.section.paragraph>
                Para consultar uma determinada capital, utilize o seguinte endpoint:
                <x-docs.endpoint v1="/capitais/{slug}" v2="/capitals/{slug}" />
            </x-docs.section.paragraph>

            <x-info>
                <strong>{slug}</strong> deve ser substituído pelo slug da capital.
                <br>
                <br>
                As informações de cada capital podem ser acessadas através de um <strong>slug</strong> exclusivo que
                identifica a capital. O <strong>slug</strong> está disponível na resposta da requisição que lista todas as
                capitals. Quando você faz uma requisição por ex. <strong>GET <x-docs.path v1="/capitais" v2="/capitals" /></strong>, a API no índice "data"
                retorna um array de objetos, e cada objeto contém o slug correspondente à capital.
            </x-info>

            <x-docs.section.paragraph>
                <strong class="font-normal">Exemplo de consulta:</strong>

                <x-docs.example name="capitals.show" />

            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>

@endsection
