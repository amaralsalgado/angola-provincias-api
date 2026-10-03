<?php

use App\Exceptions\ResourceNotFoundException;
use App\Http\Middleware\SetApiLocale;
use App\Http\Middleware\XssProtection;
use App\Support\ApiResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Routing\Middleware\ThrottleRequests;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        apiPrefix: 'api',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->api(prepend: [
            ThrottleRequests::class.':api',
        ]);
        $middleware->api(append: [XssProtection::class]);
        $middleware->append(SetApiLocale::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {

        $exceptions->dontReport(ResourceNotFoundException::class);

        // API errors Laravel would answer with its own page or message follow the standard response format
        $exceptions->respond(function (Response $response, Throwable $e, Request $request) {
            if (! $request->is('api/*')) {
                return $response;
            }

            return match (true) {
                $e instanceof NotFoundHttpException => ApiResponse::error(__('api.route_not_found'), 404),
                $e instanceof MethodNotAllowedHttpException => ApiResponse::error(__('api.method_not_allowed'), 405)
                    ->withHeaders(array_filter(['Allow' => $response->headers->get('Allow')])),
                $response->getStatusCode() === 500 => ApiResponse::error(__('api.server_error'), 500),
                default => $response,
            };
        });
    })->create();
