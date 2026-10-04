<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\EthnicGroup\getEthnicGroup;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetEthnicGroupTest extends TestCase
{
    public function test_returns_the_ethnic_group_with_the_provinces_where_it_is_present()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class, ['ethnic_group' => 'bakongo'])
            ->assertOk()
            ->assertSee('Ethnic group: Bakongo.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Bakongo')
                ->where('slug', 'bakongo')
                ->where('provinces', [
                    ['name' => 'Bengo', 'slug' => 'bengo'],
                    ['name' => 'Cabinda', 'slug' => 'cabinda'],
                    ['name' => 'Uíge', 'slug' => 'uige'],
                    ['name' => 'Zaire', 'slug' => 'zaire'],
                ]));
    }

    public function test_an_ethnic_group_present_in_many_provinces_lists_all_of_them()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class, ['ethnic_group' => 'ambundu'])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('name', 'Ambundu')
                ->where('slug', 'ambundu')
                ->has('provinces', 7));
    }

    public function test_an_ethnic_group_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class, ['ethnic_group' => 'non-existent-ethnic-group'])
            ->assertHasErrors(['Ethnic group not found']);
    }

    public function test_the_ethnic_group_is_required()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class)
            ->assertHasErrors(['You must specify the slug of the ethnic group, for example "ambundu". Use the list-ethnic-groups tool to find it.']);
    }

    public function test_the_ethnic_group_must_be_text()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class, ['ethnic_group' => ['ambundu']])
            ->assertHasErrors(['The ethnic group must be the slug of the ethnic group as text, for example "ambundu".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getEthnicGroup::class, ['ethnic_group' => 'ambundu'])
            ->assertName('get-ethnic-group')
            ->assertTitle("Get an Ethnic Group's details");
    }
}
