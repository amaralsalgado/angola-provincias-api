<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class MunicipiosTest extends TestCase
{
    use AssertsApiResponses;
    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'nome',
            'slug',
            'provincia' => [
                'nome',
                'slug',
                'data_fundacao',
                'extensao'
            ]
        ];
    }

    public function test_can_get_all_municipios()
    {
        $response = $this->json('get', '/api/v1/municipios');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/luanda');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_comunas_from_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/luanda/comunas');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'nome',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_comuna_from_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/ambriz/comunas/bela-vista');

        $expectedDataStructure = [
            'slug',
            'nome',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_distritos_from_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/luanda/distritos');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'nome',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_distrito_from_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/luanda/distritos/maianga');

        $expectedDataStructure = [
            'slug',
            'nome',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipio()
    {
        $response = $this->json('get', '/api/v1/municipios/non-existent-municipio');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }
}
