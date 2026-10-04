<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Language\listLanguages;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListLanguagesTest extends TestCase
{
    public function test_lists_all_the_languages()
    {
        AngolaProvincesServer::tool(listLanguages::class)
            ->assertOk()
            ->assertSee('Found 12 languages.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 12, fn (AssertableJson $language) => $language
                    ->where('name', 'Kimbundu')
                    ->where('slug', 'kimbundu')));
    }

    public function test_the_languages_do_not_carry_their_provinces()
    {
        AngolaProvincesServer::tool(listLanguages::class)
            ->assertOk()
            ->assertDontSee('provinces');
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listLanguages::class)
            ->assertName('list-languages')
            ->assertTitle("List Angola's Languages");
    }
}
