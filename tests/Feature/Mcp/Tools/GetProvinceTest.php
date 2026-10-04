<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Province\getProvince;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetProvinceTest extends TestCase
{
    public function test_returns_the_province_with_its_capital_and_the_totals_of_related_records()
    {
        AngolaProvincesServer::tool(getProvince::class, ['province' => 'bengo'])
            ->assertOk()
            ->assertSee('Province: Bengo.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json->whereAll([
                'name' => 'Bengo',
                'slug' => 'bengo',
                'area' => 31371,
                'founded_at' => '1980-04-26',
                'capital' => ['name' => 'Dande', 'slug' => 'dande'],
                'total_municipalities' => 12,
                'total_communes' => 19,
                'total_districts' => 0,
                'total_ethnic_groups' => 2,
                'total_languages' => 3,
            ]));
    }

    public function test_a_province_that_does_not_exist_is_an_error()
    {
        AngolaProvincesServer::tool(getProvince::class, ['province' => 'non-existent-province'])
            ->assertHasErrors(['Province not found']);
    }

    public function test_the_province_is_required()
    {
        AngolaProvincesServer::tool(getProvince::class)
            ->assertHasErrors(['You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.']);
    }

    public function test_the_province_must_be_text()
    {
        AngolaProvincesServer::tool(getProvince::class, ['province' => ['bengo']])
            ->assertHasErrors(['The province must be the slug of the province as text, for example "bengo".']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getProvince::class, ['province' => 'bengo'])
            ->assertName('get-province')
            ->assertTitle("Get a Province's details");
    }
}
