<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Capital\listCapitals;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListCapitalsTest extends TestCase
{
    public function test_lists_the_capital_of_each_province_with_its_type_and_province()
    {
        AngolaProvincesServer::tool(listCapitals::class)
            ->assertOk()
            ->assertSee('Found 21 capitals.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 21, fn (AssertableJson $capital) => $capital
                    ->where('name', 'Dande')
                    ->where('slug', 'dande')
                    ->where('type', 'municipality')
                    ->where('province', ['name' => 'Bengo', 'slug' => 'bengo'])));
    }

    public function test_a_capital_can_have_a_name_different_from_its_province()
    {
        AngolaProvincesServer::tool(listCapitals::class)
            ->assertOk()
            ->assertSee('"name":"Cuito","slug":"cuito","type":"municipality","province":{"name":"Bié","slug":"bie"}', false);
    }

    public function test_every_province_appears_once()
    {
        $provinces = collect();

        AngolaProvincesServer::tool(listCapitals::class)
            ->assertOk()
            ->assertStructuredContent(function (AssertableJson $json) use ($provinces) {
                foreach ($json->toArray()['data'] as $capital) {
                    $provinces->push($capital['province']['slug']);
                }

                $json->etc();
            });

        $this->assertCount(21, $provinces);
        $this->assertCount(21, $provinces->unique());
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listCapitals::class)
            ->assertName('list-capitals')
            ->assertTitle("List Angola's Capitals");
    }
}
