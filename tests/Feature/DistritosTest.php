<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class DistritosTest extends TestCase
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

    public function test_can_get_all_distritos()
    {
        $response = $this->json('get', '/api/v1/distritos');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_distrito()
    {
        $response = $this->json('get', '/api/v1/distritos/benguela');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_distrito()
    {
       $response = $this->json('get', '/api/v1/distritos/non-existent-distrito');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
