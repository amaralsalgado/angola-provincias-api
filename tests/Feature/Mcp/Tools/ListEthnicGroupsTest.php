<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\EthnicGroup\listEthnicGroups;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListEthnicGroupsTest extends TestCase
{
    public function test_lists_all_the_ethnic_groups()
    {
        AngolaProvincesServer::tool(listEthnicGroups::class)
            ->assertOk()
            ->assertSee('Found 12 ethnic groups.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 12, fn (AssertableJson $ethnicGroup) => $ethnicGroup
                    ->where('name', 'Ambundu')
                    ->where('slug', 'ambundu')));
    }

    public function test_the_ethnic_groups_do_not_carry_their_provinces()
    {
        AngolaProvincesServer::tool(listEthnicGroups::class)
            ->assertOk()
            ->assertDontSee('provinces');
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listEthnicGroups::class)
            ->assertName('list-ethnic-groups')
            ->assertTitle("List Angola's Ethnic Groups");
    }
}
