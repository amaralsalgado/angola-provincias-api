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

    public function test_v2_unexpected_api_errors_are_answered_in_english_when_requested(): void
    {
        Route::get('/api/v2/test-boom', fn () => throw new \RuntimeException('boom'));

        $this->getJson('/api/v2/test-boom', ['Accept-Language' => 'en'])
            ->assertStatus(500)
            ->assertExactJson([
                'success' => false,
                'code' => 500,
                'message' => 'Internal server error',
                'data' => [],
            ]);
    }

    public function test_v2_unknown_route_is_answered_in_english_when_requested(): void
    {
        $this->get('/api/v2/does-not-exist', ['Accept-Language' => 'en'])
            ->assertStatus(404)
            ->assertExactJson([
                'success' => false,
                'code' => 404,
                'message' => 'Resource not found',
                'data' => [],
            ]);
    }

    public function test_v2_wrong_method_is_answered_in_english_when_requested(): void
    {
        $this->post('/api/v2/provinces', [], ['Accept-Language' => 'en'])
            ->assertStatus(405)
            ->assertHeader('Allow')
            ->assertExactJson([
                'success' => false,
                'code' => 405,
                'message' => 'Method not allowed',
                'data' => [],
            ]);
    }

    public function test_v2_answers_in_portuguese_by_default(): void
    {
        $this->getJson('/api/v2/provinces/atlantida')
            ->assertStatus(404)
            ->assertJsonPath('message', 'Província não encontrada');
    }

    public function test_v2_follows_the_accept_language_header(): void
    {
        $this->getJson('/api/v2/provinces/atlantida', ['Accept-Language' => 'en-US,en;q=0.9,pt;q=0.8'])
            ->assertStatus(404)
            ->assertJsonPath('message', 'Province not found');
    }

    public function test_v2_falls_back_to_portuguese_for_unsupported_languages(): void
    {
        $this->getJson('/api/v2/provinces/atlantida', ['Accept-Language' => 'fr-FR,fr;q=0.9'])
            ->assertStatus(404)
            ->assertJsonPath('message', 'Província não encontrada');
    }

    public function test_v1_ignores_the_accept_language_header(): void
    {
        $this->getJson('/api/v1/provincias/atlantida', ['Accept-Language' => 'en'])
            ->assertStatus(404)
            ->assertJsonPath('message', 'Província não encontrada');
    }
}
