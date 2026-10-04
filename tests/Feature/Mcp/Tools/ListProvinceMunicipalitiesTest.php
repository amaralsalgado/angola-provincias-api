<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\listProvinceMunicipalities;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListProvinceMunicipalitiesTest extends TestCase
{
    public function test_lists_the_municipalities_of_the_province()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class, ['province' => 'bengo'])
            ->assertOk()
            ->assertSee('Found 12 municipalities.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 12, fn (AssertableJson $municipality) => $municipality
                    ->where('name', 'Bula Atumba')
                    ->where('slug', 'bula-atumba')));
    }

    public function test_lists_only_the_municipalities_of_that_province()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class, ['province' => 'luanda'])
            ->assertOk()
            ->assertSee('Found 16 municipalities.');
    }

    public function test_a_province_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class, ['province' => 'non-existent-province'])
            ->assertHasErrors(['Province not found']);
    }

    public function test_the_province_is_required()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class)
            ->assertHasErrors(['You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.']);
    }

    public function test_the_province_must_be_text()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class, ['province' => ['bengo']])
            ->assertHasErrors(['The province must be the slug of the province as text, for example "bengo".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listProvinceMunicipalities::class, ['province' => 'bengo'])
            ->assertName('list-province-municipalities')
            ->assertTitle("List a Province's Municipalities");
    }
}
