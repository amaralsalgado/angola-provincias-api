@extends('docs.layout')
@section('metaTitle', 'Tratando erros')
@section('title', 'Tratando erros')
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Introdução',
                'archor' => 'introducao',
            ],
            [
                'name' => 'Exemplos',
                'archor' => 'exemplos',
                'sub-menu' => [
                    [
                        'name' => 'Requisição bem sucedida',
                        'archor' => 'requisicao-bem-sucedida',
                    ],

                    [
                        'name' => 'Recurso não encontrado',
                        'archor' => 'recurso-nao-encontrado',
                    ],

                    [
                        'name' => 'Erro inesperado no servidor',
                        'archor' => 'erro-inesperado-no-servidor',
                    ],
                ]
            ]
        ]"></x-docs.page-menu-archor.menu>

    </div>


    <x-docs.section.section title="Introdução" id="introducao">

        <x-docs.section.paragraph>
            A API utiliza os seguintes códigos de status para indicar o sucesso ou falha de uma requisição:
            <ul class="list-disc text-[#565454] dark:text-zinc-300">
                <li class="ml-10 mt-3">
                    <strong class="font-medium">200 OK</strong>: A requisição foi bem-sucedida.
                </li>
                <li class="ml-10">
                    <strong class="font-medium">404 Not Found</strong>: Recurso não encontrado.
                </li>

                <li class="ml-10">
                    <strong class="font-medium">500 Internal Server Error</strong>: Ocorreu um erro no servidor.
                </li>

            </ul>
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Exemplos" id="exemplos">

        <x-docs.section.sub-section title="Requisição bem sucedida" id="requisicao-bem-sucedida">

            <x-docs.section.paragraph>
                Exemplo de requisição bem sucedida:

                <x-code>
                    // GET {{route('api.v1.provincias')}}

                    {
                    "success": true,
                    "code": 200,
                    "message": "Sucesso",
                    "data": [
                        //...
                        ]
                    }
                </x-code>
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Recurso não encontrado" id="recurso-nao-encontrado">

            <x-docs.section.paragraph>
                Exemplo de requisição de recurso inesistente:

                <x-code>
                    // GET {{route('api.v1.provincias')}}/new-york

                    {
                    "success": false,
                    "code": 404,
                    "message": "Província não encontrada",
                    "data": []
                    }
                </x-code>
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Erro inesperado no servidor" id="erro-inesperado-no-servidor">

            <x-docs.section.paragraph>
                Exemplo de requisição com erro inesperado no servidor:

                <x-code>
                    // GET {{route('api.v1.provincias')}}

                    {
                    "success": false,
                    "code": 500,
                    "message": "Erro ao recuperar províncias",
                    "data": []
                    }
                </x-code>
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>
    </x-docs.section.section>
@endsection
