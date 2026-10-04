<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\listProvinceCommunes;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListProvinceCommunesTest extends TestCase
{
    public function test_lists_the_communes_of_the_province_with_their_municipality()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => 'bengo'])
            ->assertOk()
            ->assertSee('Found 19 communes.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 19, fn (AssertableJson $commune) => $commune
                    ->where('name', 'Bula Atumba')
                    ->where('slug', 'bula-atumba')
                    ->where('municipality', ['name' => 'Bula Atumba', 'slug' => 'bula-atumba'])));
    }

    public function test_the_communes_come_from_all_the_municipalities_of_the_province()
    {
        $communes = AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => 'bengo']);

        $communes->assertSee('Caxito')->assertSee('"slug":"dande"', false);
    }

    public function test_lists_only_the_communes_of_that_province()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => 'luanda'])
            ->assertOk()
            ->assertSee('Found 13 communes.')
            ->assertDontSee('Caxito');
    }

    public function test_a_province_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => 'non-existent-province'])
            ->assertHasErrors(['Province not found']);
    }

    public function test_the_province_is_required()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class)
            ->assertHasErrors(['You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.']);
    }

    public function test_the_province_must_be_text()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => ['bengo']])
            ->assertHasErrors(['The province must be the slug of the province as text, for example "bengo".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listProvinceCommunes::class, ['province' => 'bengo'])
            ->assertName('list-province-communes')
            ->assertTitle("List a Province's Communes");
    }
}
