<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\listProvinceLanguages;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListProvinceLanguagesTest extends TestCase
{
    public function test_lists_the_languages_of_the_province()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class, ['province' => 'bengo'])
            ->assertOk()
            ->assertSee('Found 3 languages.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('data', [
                    ['name' => 'Português', 'slug' => 'portugues'],
                    ['name' => 'Kimbundu', 'slug' => 'kimbundu'],
                    ['name' => 'Kikongo', 'slug' => 'kikongo'],
                ]));
    }

    public function test_lists_only_the_languages_of_that_province()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class, ['province' => 'luanda'])
            ->assertOk()
            ->assertSee('Found 2 languages.');
    }

    public function test_a_province_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class, ['province' => 'non-existent-province'])
            ->assertHasErrors(['Province not found']);
    }

    public function test_the_province_is_required()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class)
            ->assertHasErrors(['You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.']);
    }

    public function test_the_province_must_be_text()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class, ['province' => ['bengo']])
            ->assertHasErrors(['The province must be the slug of the province as text, for example "bengo".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listProvinceLanguages::class, ['province' => 'bengo'])
            ->assertName('list-province-languages')
            ->assertTitle("List a Province's Languages");
    }
}
