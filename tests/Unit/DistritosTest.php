<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class DistritosTest extends TestCase
{
    
    public function test_can_get_all_distritos()
    {
       $this->json('get','/api/v1/distritos')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'slug',
                            'municipio' => [
                                'nome',
                                'slug',
                            ]
                        ]
                    ],
                    "message",
                    "success"
                ]);
    }

    public function test_can_get_single_capital()
    {
        $this->json('get','/api/v1/distritos/benguela')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug',
                        'municipio' => [
                            'nome',
                            'slug',
                        ]
                    ],
                    "message",
                    "success"
                ]);
    }

    public function test_returns_404_for_non_existent_distrito()
    {
        $this->json('get','/api/v1/distritos/non-existent-distrito')->assertStatus(Response::HTTP_NOT_FOUND);
    }
} 