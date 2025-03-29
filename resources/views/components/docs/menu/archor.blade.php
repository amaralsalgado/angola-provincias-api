<li class="mt-3">
<a href="{{ $link }}" class="before:content-[''] text-zinc-800 dark:text-zinc-300 before:absolute before:w-2 before:h-2 before:bg-red-600 before:rounded-full before:-left-4 relative before:top-2/4 text-[14px] before:-translate-y-2/4 hover:ml-1 duration-300 transition-all block {{$class ?? null}}">{{$name}}</a>
{{ $slot }}
</li>