@php
    $baseUrl = config($apiVersion === 'v1' ? 'app.api_base_url' : 'app.api_base_url_v2');
@endphp

<x-code :endpoint="$baseUrl" method=""></x-code>
