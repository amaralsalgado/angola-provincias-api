<?php

namespace Tests\Feature\V1;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class ProvincesTest extends TestCase
{
    use AssertsApiResponses;
    private function getSuccessDefaultResponseStructure(): array
    {
        return [
            'nome',
            'slug',
            'data_fundacao',
            'extensao',
            'capital' => [
                'nome',
                'slug',
            ],
            'etnias' => [
                '*' => [
                    'nome',
                    'slug',
                ]
            ],
            'linguas' => [
                '*' => [
                    'nome',
                    'slug',
                ]
            ],
            'municipios' => [
                '*' => [
                    'nome',
                    'slug',
                    'distritos' => [
                        '*' => [
                            'nome',
                            'slug',
                        ]
                    ],
                    'comunas' => [
                        '*' => [
                            'nome',
                            'slug',
                        ]
                    ]
                ]
            ]
        ];
    }
    public function test_can_get_all_provinces()
    {
        $response = $this->json('get', '/api/v1/provincias');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_province()
    {
        $response = $this->json('get', '/api/v1/provincias/non-existent-provincia');

        $this->assertApiNotFoundResponse($response, 'Província não encontrada');
    }

    public function test_can_get_capital_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/capital');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_ethnic_groups_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/etnias');

        $expectedDataStructure = [
            '*' => [
                'nome',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_languages_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/linguas');

        $expectedDataStructure = [
            '*' => [
                'nome',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_language_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/linguas/kimbundu');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_language_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/linguas/non-existent-lingua');

        $this->assertApiNotFoundResponse($response, 'Língua não encontrada');
    }

    public function test_can_get_all_municipalities_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios');

        $expectedDataStructure = [
            '*' => [
                'nome',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_municipality_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipality_from_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/non-existent-municipio');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }

    public function test_can_get_all_communes_from_specific_municipality_of_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/comunas');

        $expectedDataStructure = [
            '*' => [
                'nome',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_commune_from_municipality_of_province()
    {
        $response = $this->json('get', '/api/v1/provincias/bengo/municipios/ambriz/comunas/bela-vista');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }


    public function test_cannot_get_non_existent_commune_from_municipality_of_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/comunas/non-existent-comuna');

        $this->assertApiNotFoundResponse($response, 'Comuna não encontrada');
    }

    public function test_can_get_all_districts_from_specific_municipality_of_province()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/distritos');

        $expectedDataStructure = [
            '*' => [
                'nome',
                'slug',
            ]
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_district_from_municipality_of_province()
    {
        $response =  $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/distritos/non-existent-distrito');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
