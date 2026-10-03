<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

/**
 * Chooses the language of API messages from the API version in the URL
 */
class SetApiLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('api/*')) {
            App::setLocale($request->is('api/v2/*') ? 'en' : 'pt');
        }

        return $next($request);
    }
}
