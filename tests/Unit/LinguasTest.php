<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class LinguasTest extends TestCase
{
    
    public function test_can_get_all_linguas()
    {
       $this->json('get','/api/v1/linguas')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'slug',
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_lingua()
    {
        $this->json('get','/api/v1/linguas/kimbundu')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug',
                    ],
                ]);
    }

    public function test_returns_404_for_non_existent_lingua()
    {
        $this->json('get','/api/v1/linguas/non-existent-lingua')->assertStatus(Response::HTTP_NOT_FOUND);
    }
} 