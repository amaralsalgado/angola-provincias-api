@extends('docs.layout')
@section('metaTitle', 'Guia de migração')
@section('title', 'Guia de migração')
@section('content')

    <div>

        <x-docs.page-menu-archor.menu :archors="[
            [
                'name' => 'Visão geral',
                'archor' => 'visao-geral',
            ],
            [
                'name' => 'Migrando da v1 para a v2',
                'archor' => 'migrando-da-v1-para-a-v2',
            ],
        ]"></x-docs.page-menu-archor.menu>

    </div>

    <x-docs.section.section title="Visão geral" id="visao-geral">
        <x-docs.section.paragraph>
            Esta página reúne o que você precisa ajustar na sua integração. A migração da v1 para a v2 é opcional, pois a
            v1 continua funcionando.
        </x-docs.section.paragraph>
    </x-docs.section.section>

    <x-docs.section.section title="Migrando da v1 para a v2" id="migrando-da-v1-para-a-v2">

        <x-docs.section.paragraph>
            Para migrar, troque o prefixo <strong class="font-medium">/api/v1</strong> por
            <strong class="font-medium">/api/v2</strong>, traduza os caminhos e os campos conforme as tabelas abaixo e
            ajuste o formato da data de fundação.
        </x-docs.section.paragraph>

        <x-docs.section.sub-section title="Caminhos" id="caminhos">
            <div class="overflow-x-auto mt-6 text-[13px] sm:text-[14px] text-[#565454] dark:text-zinc-300">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-zinc-300 dark:border-zinc-700">
                            <th class="py-2 pr-6 font-medium">v1</th>
                            <th class="py-2 font-medium">v2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['/provincias', '/provinces'],
                            ['/capitais', '/capitals'],
                            ['/municipios', '/municipalities'],
                            ['/comunas', '/communes'],
                            ['/distritos', '/districts'],
                            ['/etnias', '/ethnic-groups'],
                            ['/linguas', '/languages'],
                            ['/angola', '/angola'],
                        ] as [$v1Path, $v2Path])
                            <tr class="border-b border-zinc-200 dark:border-zinc-800">
                                <td class="py-2 pr-6">{{ $v1Path }}</td>
                                <td class="py-2">{{ $v2Path }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <x-docs.section.paragraph>
                Os caminhos aninhados seguem a mesma tradução. Por exemplo,
                <strong class="font-medium">/provincias/{província}/municipios/{município}/comunas</strong> passa a ser
                <strong class="font-medium">/provinces/{province}/municipalities/{municipality}/communes</strong>.
            </x-docs.section.paragraph>


            <x-docs.section.paragraph>
                Por favor consulte a documentação de cada endpoint para verificar se há alterações adicionais nos parâmetros ou no formato das respostas.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Campos das respostas" id="campos-das-respostas">
            <div class="overflow-x-auto mt-6 text-[13px] sm:text-[14px] text-[#565454] dark:text-zinc-300">
                <table class="w-full text-left">
                    <thead>
                        <tr class="border-b border-zinc-300 dark:border-zinc-700">
                            <th class="py-2 pr-6 font-medium">v1</th>
                            <th class="py-2 font-medium">v2</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ([
                            ['nome', 'name'],
                            ['extensao', 'area'],
                            ['data_fundacao', 'founded_at'],
                            ['provincia', 'province'],
                            ['provincias', 'provinces'],
                            ['municipio', 'municipality'],
                            ['municipios', 'municipalities'],
                            ['comunas', 'communes'],
                            ['distritos', 'districts'],
                            ['etnias', 'ethnic_groups'],
                            ['linguas', 'languages'],
                        ] as [$v1Field, $v2Field])
                            <tr class="border-b border-zinc-200 dark:border-zinc-800">
                                <td class="py-2 pr-6">{{ $v1Field }}</td>
                                <td class="py-2">{{ $v2Field }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <x-docs.section.paragraph>
                O endpoint <strong class="font-medium">/angola</strong> também traduz os campos (por exemplo,
                <strong class="font-medium">capital_principal</strong> passa a ser
                <strong class="font-medium">main_capital</strong>). Consulte a resposta de exemplo na página
                <strong class="font-medium">Angola</strong> com o seletor na versão desejada.
            </x-docs.section.paragraph>

            <x-docs.section.paragraph>
                Por favor consulte a documentação de cada endpoint para verificar se há alterações adicionais nos parâmetros ou no formato das respostas.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Data de fundação" id="data-de-fundacao">
            <x-docs.section.paragraph>
                A data passa do formato <strong class="font-medium">26-04-1980</strong> para o formato ISO 8601,
                <strong class="font-medium">1980-04-26</strong>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>

        <x-docs.section.sub-section title="Idioma das mensagens" id="idioma-das-mensagens">
            <x-docs.section.paragraph>
                As mensagens de sucesso e de erro da v2 continuam em português por padrão, então nada muda para quem
                compara o texto delas. Para recebê-las em inglês, envie o cabeçalho
                <strong class="font-medium">Accept-Language: en</strong>.
            </x-docs.section.paragraph>
        </x-docs.section.sub-section>
    </x-docs.section.section>

@endsection
