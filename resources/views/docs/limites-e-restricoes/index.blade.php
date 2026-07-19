@extends('docs.layout')
@section('metaTitle', 'Limites')
@section('title')
    Limites
@endsection
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Visão geral',
                'archor' => 'visao-geral',
            ],
            [
                'name' => 'Limite de requisições',
                'archor' => 'limite-de-requisicoes',
            ],
        ]"></x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Visão geral" id="visao-geral">
        <x-docs.section.paragraph>
            A API é aberta a qualquer pessoa ou organização que precise de informações sobre as províncias de Angola. Isso
            inclui:

            <ul class="list-disc text-[#565454] dark:text-zinc-300">
                <li class="ml-10 mt-3">
                    <strong class="font-medium">Desenvolvedores</strong>: Para integrar dados das províncias em aplicativos e
                    websites.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Pesquisadores e Acadêmicos</strong>: Para análises e estudos relacionados a
                    Angola.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Empresas</strong>: Que desejam obter informações geográficas e demográficas
                    para tomada de decisões de negócio.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Cidadãos em geral</strong>: Que desejam explorar e aprender mais sobre as
                    províncias do país.
                </li>
            </ul>
        </x-docs.section.paragraph>

    </x-docs.section.section>

    <x-docs.section.section title="Limite de requisições" id="limite-de-requisicoes">
        <x-docs.section.paragraph>
            Para garantir a disponibilidade da API para todos os utilizadores, cada endereço IP está limitado a
            <strong class="font-medium">60 requisições por minuto</strong>. Ao exceder este limite, a API responde com o
            código <strong class="font-medium">429 Too Many Requests</strong>.

            <x-code :endpoint="route('api.v1.provincias')">
                {
                "success": false,
                "code": 429,
                "message": "Demasiados pedidos. Tente novamente mais tarde.",
                "data": []
                }
            </x-code>

            Toda resposta inclui ainda os seguintes cabeçalhos, que permitem acompanhar o estado do limite:

            <ul class="list-disc text-[#565454] dark:text-zinc-300">
                <li class="ml-10 mt-3">
                    <strong class="font-medium">X-RateLimit-Limit</strong>: número máximo de requisições permitidas por
                    minuto.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">X-RateLimit-Remaining</strong>: número de requisições restantes na janela
                    atual.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">Retry-After</strong>: presente apenas na resposta 429, indica em quantos
                    segundos uma nova requisição pode ser feita.
                </li>
            </ul>
        </x-docs.section.paragraph>
    </x-docs.section.section>
@endsection
