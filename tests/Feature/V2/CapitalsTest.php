<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class CapitalsTest extends TestCase
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
            'province' => [
                'name',
                'slug',
                'founded_at',
                'area'
            ]
        ];
    }
    public function test_can_get_all_capitals()
    {
        $response = $this->json('get', '/api/v2/capitals');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_capital()
    {
        $response = $this->json('get', '/api/v2/capitals/ingombota');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_capital()
    {
        $response = $this->json('get', '/api/v2/capitals/non-existent-capital');

        $this->assertApiNotFoundResponse($response, 'Capital not found');
    }
}
