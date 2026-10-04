<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Language\getLanguage;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetLanguageTest extends TestCase
{
    public function test_returns_the_language_with_the_provinces_where_it_is_spoken()
    {
        AngolaProvincesServer::tool(getLanguage::class, ['language' => 'kikongo'])
            ->assertOk()
            ->assertSee('Language: Kikongo.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Kikongo')
                ->where('slug', 'kikongo')
                ->where('provinces', [
                    ['name' => 'Bengo', 'slug' => 'bengo'],
                    ['name' => 'Cabinda', 'slug' => 'cabinda'],
                    ['name' => 'Uíge', 'slug' => 'uige'],
                    ['name' => 'Zaire', 'slug' => 'zaire'],
                ]));
    }

    public function test_a_language_spoken_in_every_province_lists_all_of_them()
    {
        AngolaProvincesServer::tool(getLanguage::class, ['language' => 'portugues'])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Português')
                ->where('slug', 'portugues')
                ->has('provinces', 21));
    }

    public function test_a_language_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getLanguage::class, ['language' => 'non-existent-language'])
            ->assertHasErrors(['Language not found']);
    }

    public function test_the_language_is_required()
    {
        AngolaProvincesServer::tool(getLanguage::class)
            ->assertHasErrors(['You must specify the slug of the language, for example "kimbundu". Use the list-languages tool to find it.']);
    }

    public function test_the_language_must_be_text()
    {
        AngolaProvincesServer::tool(getLanguage::class, ['language' => ['kimbundu']])
            ->assertHasErrors(['The language must be the slug of the language as text, for example "kimbundu".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getLanguage::class, ['language' => 'kimbundu'])
            ->assertName('get-language')
            ->assertTitle("Get a Language's details");
    }
}
