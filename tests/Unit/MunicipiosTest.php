<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MunicipiosTest extends TestCase
{
    
    public function test_can_get_all_municipios()
    {
        $this->json('get','/api/v1/municipios')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'slug',
                            'nome',
                            'provincia' => [
                                'slug',
                                'nome',
                            ]
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_municipio()
    {
        $this->json('get','/api/v1/municipios/luanda')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'slug',
                        'nome',
                        'provincia' => [
                            'slug',
                            'nome',
                        ]
                    ]
                ]);
    }

    public function test_can_get_all_comunas_of_municipio()
    {
        $this->json('get','/api/v1/municipios/luanda/comunas')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'slug',
                            'nome',
                        ]
                    ]
                ]);
    }

    public function test_can_get_specific_comuna_of_municipio()
    {
        $this->json('get','/api/v1/municipios/ambriz/comunas/bela-vista')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'slug',
                        'nome',
                    ]
                ]);
    }

    public function test_can_get_all_distritos_of_municipio()
    {
        $this->json('get','/api/v1/municipios/luanda/distritos')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'slug',
                            'nome',
                        ]
                    ]
                ]);
    }

    public function test_can_get_specific_distrito_of_municipio()
    {
        $this->json('get','/api/v1/municipios/luanda/distritos/maianga')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'slug',
                        'nome',
                    ]
                ]);
    }
    
    public function test_returns_404_for_non_existent_municipio()
    {
        $this->json('get','/api/v1/municipios/non-existent-municipio')->assertStatus(404);
    }
} 