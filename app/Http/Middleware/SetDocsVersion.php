<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reads the docs version from the URL (docs/1.x, docs/2.x) and makes it available to the views:
 *  - $docsVersion: "1.x" or "2.x" (as written in the URL)
 *  - $apiVersion: "v1" or "v2" (as written in the API paths)
 * It also sets the "version" URL default, so route('docs.provincias') links to the page of the current version.
 */
class SetDocsVersion
{
    public function handle(Request $request, Closure $next): Response
    {
        $docsVersion = $request->route('version');

        URL::defaults(['version' => $docsVersion]);

        View::share('docsVersion', $docsVersion);
        View::share('apiVersion', 'v' . substr($docsVersion, 0, 1));

        return $next($request);
    }
}
