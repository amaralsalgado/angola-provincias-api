<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Route;
use Tests\TestCase;

class ErrorHandlingTest extends TestCase
{
    public function test_unexpected_api_errors_return_standard_json_500(): void
    {
        Route::get('/api/test-boom', fn () => throw new \RuntimeException('boom'));

        $this->getJson('/api/test-boom')
            ->assertStatus(500)
            ->assertExactJson([
                'success' => false,
                'code' => 500,
                'message' => 'Erro interno do servidor',
                'data' => [],
            ]);
    }

    public function test_unknown_api_route_returns_standard_json_404(): void
    {
        // plain GET (Accept: text/html), as a browser would send
        $this->get('/api/v1/does-not-exist')
            ->assertStatus(404)
            ->assertExactJson([
                'success' => false,
                'code' => 404,
                'message' => 'Recurso não encontrado',
                'data' => [],
            ]);
    }

    public function test_wrong_method_returns_standard_json_405_with_allow_header(): void
    {
        $this->post('/api/v1/provincias')
            ->assertStatus(405)
            ->assertHeader('Allow')
            ->assertExactJson([
                'success' => false,
                'code' => 405,
                'message' => 'Método não permitido',
                'data' => [],
            ]);
    }

    public function test_non_api_routes_keep_laravel_404(): void
    {
        $this->get('/does-not-exist')->assertStatus(404)->assertSee('404');
    }

    public function test_v2_unexpected_api_errors_are_answered_in_english(): void
    {
        Route::get('/api/v2/test-boom', fn () => throw new \RuntimeException('boom'));

        $this->getJson('/api/v2/test-boom')
            ->assertStatus(500)
            ->assertExactJson([
                'success' => false,
                'code' => 500,
                'message' => 'Internal server error',
                'data' => [],
            ]);
    }

    public function test_v2_unknown_route_is_answered_in_english(): void
    {
        $this->get('/api/v2/does-not-exist')
            ->assertStatus(404)
            ->assertExactJson([
                'success' => false,
                'code' => 404,
                'message' => 'Resource not found',
                'data' => [],
            ]);
    }

    public function test_v2_wrong_method_is_answered_in_english(): void
    {
        $this->post('/api/v2/provinces')
            ->assertStatus(405)
            ->assertHeader('Allow')
            ->assertExactJson([
                'success' => false,
                'code' => 405,
                'message' => 'Method not allowed',
                'data' => [],
            ]);
    }
}
