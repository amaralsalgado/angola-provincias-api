<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class EtniasTest extends TestCase
{
    
    public function test_can_get_all_etnias()
    {
       $this->json('get','/api/v1/etnias')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_etnia()
    {
        $this->json('get','/api/v1/etnias/ambundu')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                    ],
                ]);
    }

    public function test_returns_404_for_non_existent_etnia()
    {
        $this->json('get','/api/v1/etnias/non-existent-etnia')->assertStatus(Response::HTTP_NOT_FOUND);
    }
} 