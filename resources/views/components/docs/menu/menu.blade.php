<nav>
    <ul>
        <x-docs.menu.title name="Primeiros passos" />
            <ul class="ml-7">
            <x-docs.menu.archor link="{{route('docs.index')}}" name="Introdução"></x-docs.menu.archor>
            </ul>

            <x-docs.menu.title name="Buscando informações" />
            <ul class="ml-7">
            <x-docs.menu.archor link="{{route('docs.provincias')}}" name="Províncias"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.capitais')}}" name="Capitais"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.municipios')}}" name="Municípios"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.comunas')}}" name="Comunas"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.distritos')}}" name="Distritos"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.linguas')}}" name="Línguas"></x-docs.menu.archor>
            <x-docs.menu.archor link="{{route('docs.etnias')}}" name="Etnias"></x-docs.menu.archor>
            </ul>

            <x-docs.menu.title name="Tratamento de erros" />
            <ul class="ml-7">
            <x-docs.menu.archor link="{{route('docs.tratamento_de_erros')}}" name="Tratando erros"></x-docs.menu.archor>
            </ul>

            <x-docs.menu.title name="Limites e Restrições" />
            <ul class="ml-7">
            <x-docs.menu.archor link="{{route('docs.limites')}}" name="Limites"></x-docs.menu.archor>
            </ul>

            <x-docs.menu.title name="Versionamento" />
            <ul class="ml-7">
            <x-docs.menu.archor link="{{route('docs.versionamento')}}" name="Versão da Api"></x-docs.menu.archor>
            </ul>
    </ul>
</nav>
