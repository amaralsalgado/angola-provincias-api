<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Commune\getCommune;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetCommuneTest extends TestCase
{
    public function test_returns_the_commune_with_its_municipality_and_province()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'dande', 'commune' => 'caxito'])
            ->assertOk()
            ->assertSee('Commune: Caxito.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json->whereAll([
                'name' => 'Caxito',
                'slug' => 'caxito',
                'municipality' => ['name' => 'Dande', 'slug' => 'dande'],
                'province' => ['name' => 'Bengo', 'slug' => 'bengo'],
            ]));
    }

    public function test_the_municipality_tells_apart_communes_that_share_a_slug()
    {
        // "cutato" is a commune of Chinguar (Bié) and also of the municipality of Cutato (Cubango)
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'chinguar', 'commune' => 'cutato'])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Cutato')
                ->where('slug', 'cutato')
                ->where('municipality', ['name' => 'Chinguar', 'slug' => 'chinguar'])
                ->where('province', ['name' => 'Bié', 'slug' => 'bie']));

        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'cutato', 'commune' => 'cutato'])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Cutato')
                ->where('slug', 'cutato')
                ->where('municipality', ['name' => 'Cutato', 'slug' => 'cutato'])
                ->where('province', ['name' => 'Cubango', 'slug' => 'cubango']));
    }

    public function test_a_commune_of_another_municipality_is_not_found()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'cacuaco', 'commune' => 'caxito'])
            ->assertHasErrors(['Commune not found']);
    }

    public function test_a_commune_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'dande', 'commune' => 'non-existent-commune'])
            ->assertHasErrors(['Commune not found']);
    }

    public function test_a_municipality_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'non-existent-municipality', 'commune' => 'caxito'])
            ->assertHasErrors(['Municipality not found']);
    }

    public function test_the_municipality_is_required()
    {
        AngolaProvincesServer::tool(getCommune::class, ['commune' => 'caxito'])
            ->assertHasErrors(['You must specify the slug of the municipality of the commune, for example "dande". Use the list-province-municipalities tool to find it.']);
    }

    public function test_the_commune_is_required()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'dande'])
            ->assertHasErrors(['You must specify the slug of the commune, for example "caxito". Use the list-municipality-communes tool to find it.']);
    }

    public function test_the_slugs_must_be_text()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => ['dande'], 'commune' => 'caxito'])
            ->assertHasErrors(['The municipality must be the slug of the municipality as text, for example "dande".']);

        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'dande', 'commune' => ['caxito']])
            ->assertHasErrors(['The commune must be the slug of the commune as text, for example "caxito".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getCommune::class, ['municipality' => 'dande', 'commune' => 'caxito'])
            ->assertName('get-commune')
            ->assertTitle("Get a Commune's details");
    }
}
