@props(['v1', 'v2', 'method' => 'GET'])

<x-code :endpoint="$apiVersion === 'v1' ? $v1 : $v2" :method="$method"></x-code>
