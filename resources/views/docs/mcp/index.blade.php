@extends('docs.layout')
@section('metaTitle', 'Servidor MCP')
@section('title')
    Servidor MCP
@endsection
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Visão geral',
                'archor' => 'visao-geral',
            ],
            [
                'name' => 'Como conectar',
                'archor' => 'como-conectar',
            ],
            [
                'name' => 'Exemplos de perguntas',
                'archor' => 'exemplos-de-perguntas',
            ],
            [
                'name' => 'Limites e restrições',
                'archor' => 'limites-e-restricoes',
            ],
        ]"></x-docs.page-menu-archor.menu>

    </div>

    <x-docs.section.section title="Visão geral" id="visao-geral">
        <x-docs.section.paragraph>
            Além da API REST, os mesmos dados podem ser consultados por assistentes de IA através de um servidor
            <strong class="font-medium">MCP</strong> (Model Context Protocol), um protocolo aberto que permite que clientes
            de IA, como o Claude, usem as ferramentas de um serviço. Ao se conectar, o assistente descobre sozinho o que o
            servidor oferece: basta perguntar.
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            O servidor dá acesso às províncias e às suas capitais, aos municípios, às comunas e aos distritos, e às etnias e
            línguas de cada província. Ele é somente leitura e não requer autenticação, como a API.
        </x-docs.section.paragraph>

    </x-docs.section.section>

    <x-docs.section.section title="Como conectar" id="como-conectar">
        <x-docs.section.paragraph>
            O servidor responde neste endereço:
            <x-code :endpoint="url('/mcp/angola-provinces')" method=""></x-code>
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            No Claude Code, adicione o servidor com o comando:
            <x-code :endpoint="'claude mcp add --transport http angola-provinces ' . url('/mcp/angola-provinces')" method=""></x-code>
        </x-docs.section.paragraph>

        <x-docs.section.paragraph>
            Em qualquer outro cliente que suporte servidores MCP por HTTP, basta informar o endereço acima.
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Exemplos de perguntas" id="exemplos-de-perguntas">
        <x-docs.section.paragraph>
            Com o servidor conectado, você pode fazer perguntas como:

            <ul class="list-disc text-[#565454] dark:text-zinc-300 text-[13px] sm:text-[14px]">
                <li class="ml-10 mt-3">Quantos municípios e comunas tem a província do Uíge?</li>
                <li class="ml-10">Qual é a capital da província do Bié?</li>
                <li class="ml-10">Quais são as comunas do município de Dande?</li>
                <li class="ml-10">Que etnias existem na província de Luanda?</li>
                <li class="ml-10">Em que províncias se fala Kikongo?</li>
            </ul>
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Limites e restrições" id="limites-e-restricoes">

        <x-docs.section.paragraph>
            O servidor limita as requisições a <strong class="font-medium">60 por minuto</strong>, um limite separado do
            da API REST. Um assistente pode fazer várias chamadas para responder uma única pergunta. Ao atingir o limite, o
            servidor responde com o código <strong class="font-medium">429</strong> e indica em quantos segundos uma nova
            requisição pode ser feita.
        </x-docs.section.paragraph>
    </x-docs.section.section>

@endsection
