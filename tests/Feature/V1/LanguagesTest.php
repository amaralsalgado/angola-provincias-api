<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class LanguagesTest extends TestCase
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
    public function test_can_get_all_languages()
    {
        $response = $this->json('get', '/api/v1/linguas');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_language()
    {
       $response = $this->json('get', '/api/v1/linguas/kimbundu');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_for_non_existent_language()
    {
       $response = $this->json('get', '/api/v1/linguas/non-existent-lingua');

        $this->assertApiNotFoundResponse($response, 'Língua não encontrada');
    }
}
