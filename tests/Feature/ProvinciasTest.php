<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\Traits\AssertsApiResponses;

class ProvinciasTest extends TestCase
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
    public function test_can_get_all_provincias()
    {
        $response = $this->json('get', '/api/v1/provincias');

        $expectedDataStructure = [
            '*' => $this->getSuccessDefaultResponseStructure()
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_specific_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda');

        $expectedDataStructure = $this->getSuccessDefaultResponseStructure();

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/non-existent-provincia');

        $this->assertApiNotFoundResponse($response, 'Província não encontrada');
    }

    public function test_can_get_capital_from_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/capital');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_can_get_all_etnias_from_provincia()
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

    public function test_can_get_all_linguas_from_provincia()
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

    public function test_can_get_specific_lingua_from_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/linguas/kimbundu');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_lingua_from_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/linguas/non-existent-lingua');

        $this->assertApiNotFoundResponse($response, 'Língua não encontrada');
    }

    public function test_can_get_all_municipios_from_provincia()
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

    public function test_can_get_specific_municipio_from_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }

    public function test_cannot_get_non_existent_municipio_from_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/non-existent-municipio');

        $this->assertApiNotFoundResponse($response, 'Município não encontrado');
    }

    public function test_can_get_all_comunas_from_specific_municipio_of_provincia()
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

    public function test_can_get_specific_comuna_from_municipio_of_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/bengo/municipios/ambriz/comunas/bela-vista');

        $expectedDataStructure = [
            'nome',
            'slug',
        ];

        $this->assertApiOkResponse($response, $expectedDataStructure);
    }


    public function test_cannot_get_non_existent_comuna_from_municipio_of_provincia()
    {
        $response = $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/comunas/non-existent-comuna');

        $this->assertApiNotFoundResponse($response, 'Comuna não encontrada');
    }

    public function test_can_get_all_distritos_from_specific_municipio_of_provincia()
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

    public function test_cannot_get_non_existent_distrito_from_municipio_of_provincia()
    {
        $response =  $this->json('get', '/api/v1/provincias/luanda/municipios/cacuaco/distritos/non-existent-distrito');

        $this->assertApiNotFoundResponse($response, 'Distrito não encontrado');
    }
}
