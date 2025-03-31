<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class CapitaisTest extends TestCase
{
    
    public function test_can_get_all_capitais()
    {
       $this->json('get','/api/v1/capitais')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'slug',
                            'provincia' => [
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
        $this->json('get','/api/v1/capitais/luanda')->assertStatus(Response::HTTP_OK)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug',
                        'provincia' => [
                            'nome',
                            'slug',
                            'data_fundacao',
                            'extensao'
                        ],
                    ],
                    "message",
                    "success"
                ]);
    }

    public function test_returns_404_for_non_existent_capital()
    {
        $this->json('get','/api/v1/capitais/non-existent-capital')->assertStatus(Response::HTTP_NOT_FOUND);
    }
} 