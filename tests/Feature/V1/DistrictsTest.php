<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class DistrictsTest extends TestCase
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

    public function test_can_get_all_districts()
    {
        $response = $this->json('get', '/api/v1/distritos');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_district()
    {
       $response = $this->json('get', '/api/v1/distritos/non-existent-distrito');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
