@props(['name'])

{{-- One file per example and version: docs/examples/v1/{name} and docs/examples/v2/{name} --}}
@include('docs.examples.' . $apiVersion . '.' . $name)
