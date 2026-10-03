<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class CapitalsTest extends TestCase
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
    public function test_can_get_all_capitals()
    {
        $response = $this->json('get', '/api/v1/capitais');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_capital()
    {
        $response = $this->json('get', '/api/v1/capitais/ingombota');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_capital()
    {
        $response = $this->json('get', '/api/v1/capitais/non-existent-capital');

        $this->assertApiNotFoundResponse($response, 'Capital não encontrada');
    }
}
