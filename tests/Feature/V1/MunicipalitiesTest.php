<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class MunicipalitiesTest extends TestCase
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

    public function test_can_get_all_municipalities()
    {
        $response = $this->json('get', '/api/v1/municipios');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_municipality()
    {
        $response = $this->json('get', '/api/v1/municipios/soyo');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_communes_from_municipality()
    {
        $response = $this->json('get', '/api/v1/municipios/soyo/comunas');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'nome',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune_from_municipality()
    {
        $response = $this->json('get', '/api/v1/municipios/kilamba-kiaxi/comunas/golfe');

        $expectedDataStructure = [
            'slug',
            'nome',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_districts_from_municipality()
    {
        $response = $this->json('get', '/api/v1/municipios/ingombota/distritos');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'nome',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipality()
    {
        $response = $this->json('get', '/api/v1/municipios/non-existent-municipio');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }
}
