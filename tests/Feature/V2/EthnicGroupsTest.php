<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class EthnicGroupsTest extends TestCase
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
            'provinces' => [
                '*' => [
                    'name',
                    'slug',
                    'founded_at',
                    'area'
                ]
            ]
        ];
    }

    public function test_can_get_all_ethnic_groups()
    {
        $response = $this->json('get', '/api/v2/ethnic-groups');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_ethnic_group()
    {
        $response = $this->json('get', '/api/v2/ethnic-groups/ambundu');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_ethnic_group()
    {
        $response = $this->json('get', '/api/v2/ethnic-groups/non-existent-ethnic-group');

        $this->assertApiNotFoundResponse($response, 'Ethnic group not found');
    }
}
