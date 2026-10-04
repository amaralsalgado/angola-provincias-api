<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class MunicipalitiesTest extends TestCase
{
    protected function successMessage(): string
    {
        return 'Sucesso';
    }

    use AssertsApiResponses;
    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'name',
            'slug',
            'province' => [
                'name',
                'slug',
                'founded_at',
                'area'
            ]
        ];
    }

    public function test_can_get_all_municipalities()
    {
        $response = $this->json('get', '/api/v2/municipalities');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_municipality()
    {
        $response = $this->json('get', '/api/v2/municipalities/soyo');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_communes_from_municipality()
    {
        $response = $this->json('get', '/api/v2/municipalities/soyo/communes');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'name',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune_from_municipality()
    {
        $response = $this->json('get', '/api/v2/municipalities/kilamba-kiaxi/communes/golfe');

        $expectedDataStructure = [
            'slug',
            'name',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_districts_from_municipality()
    {
        $response = $this->json('get', '/api/v2/municipalities/ingombota/districts');

        $expectedDataStructure = [
            '*' => [
                'slug',
                'name',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipality()
    {
        $response = $this->json('get', '/api/v2/municipalities/non-existent-municipality');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }
}
