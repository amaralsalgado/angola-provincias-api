<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class CommunesTest extends TestCase
{
    protected function successMessage(): string
    {
        return 'Success';
    }


    use AssertsApiResponses;

    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'name',
            'slug',
            'municipality' => [
                'name',
                'slug',
                'province' => [
                    'name',
                    'slug',
                    'founded_at',
                    'area'
                ]
            ]
        ];
    }
    public function test_can_get_all_communes()
    {
        $response = $this->json('get', '/api/v2/communes');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune()
    {
        $response = $this->json('get', '/api/v2/communes/bela-vista');

        $expectedDataStructure =  $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_commune()
    {
        $response = $this->json('get', '/api/v2/communes/non-existent-commune');

        $this->assertApiNotFoundResponse($response, 'Commune not found');
    }
}
