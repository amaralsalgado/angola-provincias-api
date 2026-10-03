<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class CommunesTest extends TestCase
{

    use AssertsApiResponses;

    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'nome',
            'slug',
            'municipio' => [
                'nome',
                'slug',
                'provincia' => [
                    'nome',
                    'slug',
                    'data_fundacao',
                    'extensao'
                ]
            ]
        ];
    }
    public function test_can_get_all_communes()
    {
        $response = $this->json('get', '/api/v1/comunas');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune()
    {
        $response = $this->json('get', '/api/v1/comunas/bela-vista');

        $expectedDataStructure =  $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_commune()
    {
        $response = $this->json('get', '/api/v1/comunas/non-existent-comuna');

        $this->assertApiNotFoundResponse($response, 'Comuna não encontrada');
    }
}
