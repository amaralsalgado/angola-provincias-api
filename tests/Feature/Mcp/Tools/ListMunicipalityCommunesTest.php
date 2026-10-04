<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Municipality\listMunicipalityCommunes;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListMunicipalityCommunesTest extends TestCase
{
    public function test_lists_the_communes_of_the_municipality()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class, ['municipality' => 'dande'])
            ->assertOk()
            ->assertSee('Found 3 communes.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('data', [
                    ['name' => 'Caxito', 'slug' => 'caxito'],
                    ['name' => 'Mabubas', 'slug' => 'mabubas'],
                    ['name' => 'Quicabo', 'slug' => 'quicabo'],
                ]));
    }

    public function test_lists_only_the_communes_of_that_municipality()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class, ['municipality' => 'cacuaco'])
            ->assertOk()
            ->assertSee('Found 2 communes.')
            ->assertDontSee('Caxito');
    }

    public function test_a_municipality_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class, ['municipality' => 'non-existent-municipality'])
            ->assertHasErrors(['Municipality not found']);
    }

    public function test_the_municipality_is_required()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class)
            ->assertHasErrors(['You must specify the slug of the municipality, for example "dande". Use the list-province-municipalities tool to find it.']);
    }

    public function test_the_municipality_must_be_text()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class, ['municipality' => ['dande']])
            ->assertHasErrors(['The municipality must be the slug of the municipality as text, for example "dande".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listMunicipalityCommunes::class, ['municipality' => 'dande'])
            ->assertName('list-municipality-communes')
            ->assertTitle("List a Municipality's Communes");
    }
}
