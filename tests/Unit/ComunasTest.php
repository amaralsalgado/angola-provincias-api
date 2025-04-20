<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ComunasTest extends TestCase
{

    public function test_can_get_all_comunas()
    {
        $this->json('get','/api/v1/comunas')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome'
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_comuna()
    {
        $this->json('get','/api/v1/comunas/bela-vista')->assertStatus(200)
                ->assertJsonStructure([ 
                    'data' => [
                        'nome'
                    ]
                ]);
    }
    
    
} 