<?php

namespace Tests\Feature\V2;

use Illuminate\Http\Response;
use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_can_get_country_info()
    {
        $response = $this->json('get', '/api/v2/angola');

        $response->assertOk()->assertExactJson([
            'success' => true,
            'code' => Response::HTTP_OK,
            'message' => 'Success',
            'data' => [
                'name' => 'Republic of Angola',
                'continent' => 'Africa',
                'area' => '1,246,700 km²',
                'main_capital' => 'Luanda',
                'main_language' => 'Portuguese',
                'currency' => 'Kwanza (kz)',
                'timezone' => 'WAT (UTC+1)',
                'phone_code' => '+244',
                'internet_code' => '.ao',
                'provinces' => 21,
                'capitals' => 21,
                'municipalities' => 326,
                'communes' => 378,
                'districts' => 0,
                'ethnic_groups' => 11,
                'languages' => 12,
            ],
        ]);
    }
}
