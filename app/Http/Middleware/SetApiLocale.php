<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

/**
 * Chooses the language of API messages: v1 always answers in Portuguese, v2 follows the Accept-Language header
 * (Portuguese by default)
 */
class SetApiLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->is('api/*')) {
            $locale = $request->is('api/v2/*') ? $request->getPreferredLanguage(['pt', 'en']) : 'pt';

            App::setLocale($locale);
        }

        return $next($request);
    }
}
