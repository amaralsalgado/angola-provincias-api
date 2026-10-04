<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\listProvinceEthnicGroups;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListProvinceEthnicGroupsTest extends TestCase
{
    public function test_lists_the_ethnic_groups_of_the_province()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class, ['province' => 'bengo'])
            ->assertOk()
            ->assertSee('Found 2 ethnic groups.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('data', [
                    ['name' => 'Ambundu', 'slug' => 'ambundu'],
                    ['name' => 'Bakongo', 'slug' => 'bakongo'],
                ]));
    }

    public function test_lists_only_the_ethnic_groups_of_that_province()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class, ['province' => 'luanda'])
            ->assertOk()
            ->assertSee('Found 1 ethnic groups.');
    }

    public function test_a_province_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class, ['province' => 'non-existent-province'])
            ->assertHasErrors(['Province not found']);
    }

    public function test_the_province_is_required()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class)
            ->assertHasErrors(['You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.']);
    }

    public function test_the_province_must_be_text()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class, ['province' => ['bengo']])
            ->assertHasErrors(['The province must be the slug of the province as text, for example "bengo".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listProvinceEthnicGroups::class, ['province' => 'bengo'])
            ->assertName('list-province-ethnic-groups')
            ->assertTitle("List a Province's Ethnic Groups");
    }
}
