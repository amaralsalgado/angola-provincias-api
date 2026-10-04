<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Country\getCountryInfo;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetCountryInfoTest extends TestCase
{
    public function test_returns_the_country_info_and_the_totals_of_each_kind_of_record()
    {
        AngolaProvincesServer::tool(getCountryInfo::class)
            ->assertOk()
            ->assertSee('Country: Republic of Angola.')
            ->assertStructuredContent(fn (AssertableJson $json) => $json->whereAll([
                'name' => 'Republic of Angola',
                'continent' => 'Africa',
                'area' => 1246700,
                'main_capital' => 'Luanda',
                'main_language' => 'Portuguese',
                'currency' => 'Kwanza (kz)',
                'timezone' => 'WAT (UTC+1)',
                'phone_code' => '+244',
                'internet_code' => '.ao',
                'provinces' => 21,
                'capitals' => 21,
                'municipalities' => 326,
                'communes' => 378,
                'districts' => 0,
                'ethnic_groups' => 12,
                'languages' => 12,
            ]));
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(getCountryInfo::class)
            ->assertName('get-country-info')
            ->assertTitle("Get Angola's general information");
    }
}
