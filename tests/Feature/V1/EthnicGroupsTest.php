<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class EthnicGroupsTest extends TestCase
{
    use AssertsApiResponses;
    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'nome',
            'slug',
            'provincias' => [
                '*' => [
                    'nome',
                    'slug',
                    'data_fundacao',
                    'extensao'
                ]
            ]
        ];
    }

    public function test_can_get_all_ethnic_groups()
    {
        $response = $this->json('get', '/api/v1/etnias');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_ethnic_group()
    {
        $response = $this->json('get', '/api/v1/etnias/ambundu');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_ethnic_group()
    {
        $response = $this->json('get', '/api/v1/etnias/non-existent-etnia');

        $this->assertApiNotFoundResponse($response, 'Etnia não encontrada');
    }
}
