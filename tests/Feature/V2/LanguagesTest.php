<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;
use Tests\Traits\AssertsApiResponses;

class LanguagesTest extends TestCase
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
    public function test_can_get_all_languages()
    {
        $response = $this->json('get', '/api/v2/languages');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_language()
    {
       $response = $this->json('get', '/api/v2/languages/kimbundu');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_for_non_existent_language()
    {
       $response = $this->json('get', '/api/v2/languages/non-existent-language');

        $this->assertApiNotFoundResponse($response, 'Língua não encontrada');
    }
}
