<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class DistrictsTest extends TestCase
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

    public function test_can_get_all_districts()
    {
        $response = $this->json('get', '/api/v2/districts');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_district()
    {
       $response = $this->json('get', '/api/v2/districts/non-existent-district');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
