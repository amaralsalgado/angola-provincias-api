<?php

namespace App\Providers;

use App\Support\ApiResponse;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Mcp\Transport\JsonRpcResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('api', function ($request) {
            return Limit::perMinute(60)->by($request->ip())->response(function (Request $request, array $headers) {
                $response = ApiResponse::error(__('api.too_many_requests'), 429);

                return $response->withHeaders($headers);
            });
        });

        RateLimiter::for('mcp', function ($request) {
            return Limit::perMinute(60)->by($request->ip())->response(function ($request, $headers) {
                $retryAfter = $headers['Retry-After'] ?? 60;

                $id = $request->input('id');

                return response()->json(JsonRpcResponse::error(
                    is_string($id) || is_int($id) ? $id : null,
                    -32000,
                    "Rate limit exceeded (60 requests per minute). Wait {$retryAfter} seconds before calling another tool.",
                ), 429, $headers);
            });
        });
    }
}
