<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Response;

class HomeTest extends TestCase
{

    private function getSuccessDefaultResponse(): array
    {
        return [
            'nome' => 'República de Angola',
            'continente' => 'África',
            'extensao' => '1.246.700 km²',
            'capital_principal' => 'Luanda',
            'lingua_principal' => 'Português',
            'moeda' => 'Kwanza (kz)',
            'fuso_horario' => 'WAT (UTC+1)',
            'codigo_telefonico' => '+244',
            'codigo_de_internet' => '.ao',
            'provincias' => 21,
            'capitais' => 21,
            'municipios' => 326,
            'comunas' => 378,
            'distritos' => 0,
            'etnias' => 11,
            'linguas' => 12,
        ];
    }
    public function test_can_get_country_info()
    {
        $response = $this->json('get', '/api/v1/angola');

        $response->assertOk()->assertExactJson([
            'success' => true,
            'code' => Response::HTTP_OK,
            'message' => 'Sucesso',
            'data' => $this->getSuccessDefaultResponse(),
        ]);
    }
}
