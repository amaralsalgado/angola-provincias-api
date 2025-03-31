<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProvinciasTest extends TestCase
{
    
    public function test_can_get_all_provincias()
    {
        $this->json('get','/api/v1/provincias')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'capital',
                            'municipios',
                            'etnias',
                            'linguas'
                        ]
                    ]
                ]);
    }

    public function test_can_get_single_provincia()
    {
        $this->json('get','/api/v1/provincias/luanda')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'capital',
                        'municipios',
                        'etnias',
                        'linguas'
                    ]
                ]);
    }

    public function test_can_get_provincia_capital()
    {
        $this->json('get','/api/v1/provincias/luanda/capital')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug',
                    ]
                ]);
    }

    public function test_can_get_provincia_municipios()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                        ]
                    ]
                ]);
    }

    public function test_can_get_provincia_etnias()
    {
        $this->json('get','/api/v1/provincias/luanda/etnias')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            
                        ]
                    ]
                ]);
    }

    public function test_can_get_provincia_linguas()
    {
        $this->json('get','/api/v1/provincias/luanda/linguas')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            
                        ]
                    ]
                ]);
    }

    public function test_returns_404_for_non_existent_provincia()
    {
        $this->json('get','/api/v1/provincias/non-existent-provincia')->assertStatus(404);
    }

    public function test_can_get_provincia_specific_language()
    {
        $this->json('get','/api/v1/provincias/luanda/linguas/kimbundu')
        ->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug'
                    ]
                ]);
    }

    public function test_can_get_specific_municipio()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug'
                    ]
                ]);
    }

    public function test_can_get_all_comunas_of_municipio()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco/comunas')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'slug'
                        ]
                    ]
                ]);
    }

   public function test_can_get_specific_comuna()
    {
        $this->json('get','/api/v1/provincias/bengo/municipios/ambriz/comunas/bela-vista')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug'
                    ]
                ]);
    }

    public function test_can_get_all_distritos_of_municipio()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco/distritos')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        '*' => [
                            'nome',
                            'slug'
                        ]
                    ]
                ]);
    }

    public function test_can_get_specific_distrito()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco/distritos/kikolo')->assertStatus(200)
                ->assertJsonStructure([
                    'data' => [
                        'nome',
                        'slug'
                    ]
                ]);
    }

    public function test_returns_404_for_non_existent_municipio()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/non-existent-municipio')->assertStatus(404);
    }

    public function test_returns_404_for_non_existent_comuna()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco/comunas/non-existent-comuna')->assertStatus(404);
    }

    public function test_returns_404_for_non_existent_distrito()
    {
        $this->json('get','/api/v1/provincias/luanda/municipios/cacuaco/distritos/non-existent-distrito')->assertStatus(404);
    }
} 