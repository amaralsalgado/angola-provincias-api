<ul class="ml-4">
    @foreach ($archors as $archor)

    <x-docs.page-menu-archor.archor archor="{{$archor['archor']}}" name="{{$archor['name']}}">


        @if (isset($archor['sub-menu']) && !empty($archor['sub-menu']))
        <ul>
            @foreach ($archor['sub-menu'] as $archor)
            <li class="my-2 ml-5">
            <x-docs.page-menu-archor.archor class="!font-normal !text-[14px] before:!font-light !text-zinc-800 dark:!text-zinc-400" archor="{{$archor['archor']}}" name="{{$archor['name']}}"></x-archor>
             </li>
                @endforeach
        </ul>
        @endif

        </x-archor>
        </li>
        @endforeach
</ul>