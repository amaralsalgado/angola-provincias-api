<?php

namespace Tests\Feature\V2;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class ProvincesTest extends TestCase
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
            'founded_at',
            'area',
            'capital' => [
                'name',
                'slug',
            ],
            'ethnic_groups' => [
                '*' => [
                    'name',
                    'slug',
                ]
            ],
            'languages' => [
                '*' => [
                    'name',
                    'slug',
                ]
            ],
            'municipalities' => [
                '*' => [
                    'name',
                    'slug',
                    'districts' => [
                        '*' => [
                            'name',
                            'slug',
                        ]
                    ],
                    'communes' => [
                        '*' => [
                            'name',
                            'slug',
                        ]
                    ]
                ]
            ]
        ];
    }
    public function test_can_get_all_provinces()
    {
        $response = $this->json('get', '/api/v2/provinces');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_province()
    {
        $response = $this->json('get', '/api/v2/provinces/non-existent-province');

        $this->assertApiNotFoundResponse($response, 'Província não encontrada');
    }

    public function test_can_get_capital_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/capital');

        $expectedDataStructure = [
            'name',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_ethnic_groups_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/ethnic-groups');

        $expectedDataStructure = [
            '*' => [
                'name',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_languages_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/languages');

        $expectedDataStructure = [
            '*' => [
                'name',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_language_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/languages/kimbundu');

        $expectedDataStructure = [
            'name',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_language_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/languages/non-existent-language');

        $this->assertApiNotFoundResponse($response, 'Língua não encontrada');
    }

    public function test_can_get_all_municipalities_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities');

        $expectedDataStructure = [
            '*' => [
                'name',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_municipality_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities/cacuaco');

        $expectedDataStructure = [
            'name',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipality_from_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities/non-existent-municipality');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }

    public function test_can_get_all_communes_from_specific_municipality_of_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities/cacuaco/communes');

        $expectedDataStructure = [
            '*' => [
                'name',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune_from_municipality_of_province()
    {
        $response = $this->json('get', '/api/v2/provinces/bengo/municipalities/ambriz/communes/bela-vista');

        $expectedDataStructure = [
            'name',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }


    public function test_cannot_get_non_existent_commune_from_municipality_of_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities/cacuaco/communes/non-existent-commune');

        $this->assertApiNotFoundResponse($response, 'Comuna não encontrada');
    }

    public function test_can_get_all_districts_from_specific_municipality_of_province()
    {
        $response = $this->json('get', '/api/v2/provinces/luanda/municipalities/cacuaco/districts');

        $expectedDataStructure = [
            '*' => [
                'name',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_district_from_municipality_of_province()
    {
        $response =  $this->json('get', '/api/v2/provinces/luanda/municipalities/cacuaco/districts/non-existent-district');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
