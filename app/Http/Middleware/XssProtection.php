<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class XssProtection
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $data = $request->all();

        array_walk_recursive($data, function (&$input) {
            $input = htmlspecialchars(trim($input));
        });

        $request->merge($data);

        return $next($request);
    }
}
