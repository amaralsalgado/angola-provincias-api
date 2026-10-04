<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Municipality\getMunicipality;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetMunicipalityTest extends TestCase
{
    public function test_returns_the_municipality_with_its_province_and_the_totals_of_related_records()
    {
        AngolaProvincesServer::tool(getMunicipality::class, ['municipality' => 'dande'])
            ->assertOk()
            ->assertSee('Municipality: Dande.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json->whereAll([
                'name' => 'Dande',
                'slug' => 'dande',
                'province' => ['name' => 'Bengo', 'slug' => 'bengo'],
                'total_communes' => 3,
                'total_districts' => 0,
            ]));
    }

    public function test_a_municipality_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getMunicipality::class, ['municipality' => 'non-existent-municipality'])
            ->assertHasErrors(['Municipality not found']);
    }

    public function test_the_municipality_is_required()
    {
        AngolaProvincesServer::tool(getMunicipality::class)
            ->assertHasErrors(['You must specify the slug of the municipality, for example "dande". Use the list-province-municipalities tool to find it.']);
    }

    public function test_the_municipality_must_be_text()
    {
        AngolaProvincesServer::tool(getMunicipality::class, ['municipality' => ['dande']])
            ->assertHasErrors(['The municipality must be the slug of the municipality as text, for example "dande".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getMunicipality::class, ['municipality' => 'dande'])
            ->assertName('get-municipality')
            ->assertTitle("Get a Municipality's details");
    }
}
