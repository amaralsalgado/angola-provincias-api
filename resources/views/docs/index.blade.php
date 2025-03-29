@extends('docs.layout')
@section('metaTitle', 'Primeiros passos')
@section('title')
    <x-api-name />
@endsection
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Visão geral',
                'archor' => 'visao-geral',
                'sub-menu' => [
                    [
                        'name' => 'Sobre a Api',
                        'archor' => 'sobre-a-api',
                    ],
                    [
                        'name' => 'Objetivo',
                        'archor' => 'objetivo',
                    ],
                    [
                        'name' => 'Quem pode usar',
                        'archor' => 'quem-pode-usar',
                    ],
                    [
                        'name' => 'Autenticação',
                        'archor' => 'autenticacao',
                    ],
                ],
            ],
            [
                'name' => 'Base URL',
                'archor' => 'base-url',
            ],
        ]"></x-docs.page-menu-archor.menu>

    </div>

    <x-docs.section.section title="Visão Geral" id="visao-geral">

        <x-docs.section.paragraph>
            Esta página fornece uma visão geral da API de Províncias de Angola, explicando seus objetivos e quem pode
            utilizá-la.
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Sobre a Api" id="sobre-a-api">
            <x-docs.section.paragraph>
                A <strong><x-api-name /></strong> é um serviço público que oferece acesso a dados detalhados sobre as
                províncias angolanas. Esta API foi projetada para ser simples e eficiente, permitindo consultas rápidas de
                informações relevantes sobre cada uma das províncias, incluindo dados como nome, municípios, línguas,
                distritos, entre outros.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Objetivo " id="objetivo">
            <x-docs.section.paragraph>
                O principal objetivo da API é fornecer dados centralizados e acessíveis sobre as províncias de Angola,
                promovendo o acesso a informações atualizadas e consistentes. Com isso, a API facilita o desenvolvimento de
                soluções, pesquisas e estudos que dependam de informações geográficas e demográficas.
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                Especificamente, a API pretende:

                <ul class="list-disc text-[#565454] dark:text-zinc-300">
                    <li class="ml-10 mt-3">
                        Auxiliar desenvolvedores que precisam de dados para criar aplicativos ou websites.
                    </li>
                    <li class="ml-10">
                        Suportar pesquisadores e acadêmicos que buscam informações confiáveis sobre as províncias.
                    </li>
                    <li class="ml-10">

                        Contribuir para o desenvolvimento de Angola ao promover a disseminação de dados abertos.
                    </li>
                </ul>
            </x-docs.section.paragraph>

        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Quem Pode Usar" id="quem-pode-usar">
            <x-docs.section.paragraph>
                A API é aberta a qualquer pessoa ou organização que precise de informações sobre as províncias de Angola.
                Isso inclui:

                <ul class="list-disc text-[#565454] dark:text-zinc-300">
                    <li class="ml-10 mt-3">
                        <strong class="font-medium">Desenvolvedores</strong>: Para integrar dados das províncias em
                        aplicativos e websites.
                    </li>
                    <li class="ml-10">
                        <strong class="font-medium">Pesquisadores e Acadêmicos</strong>: Para análises e estudos
                        relacionados a Angola.
                    </li>
                    <li class="ml-10">
                        <strong class="font-medium">Empresas</strong>: Que desejam obter informações geográficas e
                        demográficas para tomada de decisões de negócio.
                    </li>
                    <li class="ml-10">
                        <strong class="font-medium">Cidadãos em geral</strong>: Que desejam explorar e aprender mais sobre
                        as províncias do país.
                    </li>
                </ul>
            </x-docs.section.paragraph>

        </x-docs.section.sub-section>


        <x-docs.section.sub-section title="Autenticação " id="autenticacao">
            <x-docs.section.paragraph>
                A <strong><x-api-name /></strong> é completamente aberta e não requer autenticação. Isso significa que
                qualquer usuário pode acessar os endpoints e consultar as informações sem a necessidade de fornecer
                credenciais, tokens ou chaves de API.
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                Este modelo foi escolhido para tornar os dados acessíveis de maneira rápida e fácil, sem barreiras. No
                entanto, como a API não envolve operações de escrita (como criação, atualização ou exclusão de dados), não
                há preocupações relacionadas a permissões ou segurança de dados sensíveis.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

    </x-docs.section.section>
    <x-docs.section.section title="Base URL" id="base-url">

        <x-docs.section.paragraph>
            Todas as requisições à API começam com a seguinte URL base: <x-code>{{ config('app.api_base_url') }}</x-code>
        </x-docs.section.paragraph>
    </x-docs.section.section>
@endsection
