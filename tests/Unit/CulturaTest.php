<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CulturaTest extends TestCase
{

    public function test_can_get_all_etnias()
    {
        $response = $this->getJson('/api/v1/etnias');
        
        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome'
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_etnia()
    {
        $response = $this->getJson('/api/v1/etnias/ambundu');
        
        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                    ]
                ]);
    }

    public function test_can_get_all_linguas()
    {
        $response = $this->getJson('/api/v1/linguas');
        
        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome'
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_lingua()
    {
        $response = $this->getJson('/api/v1/linguas/umbundu');
        
        $response->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                    ]
                ]);
    }

    public function test_returns_404_for_non_existent_etnia()
    {
        $response = $this->getJson('/api/v1/etnias/non-existent-etnia');
        
        $response->assertStatus(404);
    }

    public function test_returns_404_for_non_existent_lingua()
    {
        $response = $this->getJson('/api/v1/linguas/non-existent-lingua');
        
        $response->assertStatus(404);
    }
} 