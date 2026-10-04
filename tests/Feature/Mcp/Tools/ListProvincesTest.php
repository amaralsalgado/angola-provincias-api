<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\listProvinces;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListProvincesTest extends TestCase
{
    public function test_lists_all_the_provinces_with_their_capital()
    {
        AngolaProvincesServer::tool(listProvinces::class)
            ->assertOk()
            ->assertSee('Found 21 provinces.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 21, fn (AssertableJson $province) => $province
                    ->where('name', 'Bengo')
                    ->where('slug', 'bengo')
                    ->where('area', 31371)
                    ->where('founded_at', '1980-04-26')
                    ->where('capital', ['name' => 'Dande', 'slug' => 'dande'])));
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listProvinces::class)
            ->assertName('list-provinces')
            ->assertTitle("List Angola's Provinces");
    }
}
