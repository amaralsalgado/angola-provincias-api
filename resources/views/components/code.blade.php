@props(['endpoint', 'method' => 'GET'])

<div
    class="w-full mt-6 mb-2 flex items-start justify-between gap-3 text-[12px] sm:text-[14px] font-mono bg-[#F5F5F5] dark:bg-[#1E1E1E] p-4 rounded-md">
    <p class="min-w-0 flex items-start">
        @if (!empty($method))
            <span class="bg-blue-500 text-white px-2 py-1 rounded mr-2 text-xs shrink-0">{{ $method }}</span>
        @endif
        <span class="min-w-0 overflow-x-auto whitespace-nowrap pb-1 pt-1">{{ $endpoint }}</span>
    </p>

    @if (!empty($endpoint))
        <button type="button"
            class="btn-copy-endpoint shrink-0 text-zinc-500 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white transition-colors"
            data-copy="{{ $endpoint }}" title="Copiar endpoint">
            <i class="mdi mdi-content-copy"></i>
        </button>
    @endif
</div>
@if ($slot->isNotEmpty())
    <andypf-json-viewer class="json-viewer-element" show-data-types="false" show-size="false" theme="classic-light">
        {{ $slot }}
    </andypf-json-viewer>
@endif
