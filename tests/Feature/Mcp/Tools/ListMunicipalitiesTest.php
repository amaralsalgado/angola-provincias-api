<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Municipality\listMunicipalities;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListMunicipalitiesTest extends TestCase
{
    public function test_lists_the_first_page_of_municipalities_with_their_province()
    {
        AngolaProvincesServer::tool(listMunicipalities::class)
            ->assertOk()
            ->assertSee('Found 326 municipalities (page 1 of 22).')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 15, fn (AssertableJson $municipality) => $municipality
                    ->where('name', 'Bula Atumba')
                    ->where('slug', 'bula-atumba')
                    ->where('province', ['name' => 'Bengo', 'slug' => 'bengo']))
                ->has('pagination', fn (AssertableJson $pagination) => $pagination->whereAll([
                    'current_page' => 1,
                    'next_page' => 2,
                    'prev_page' => null,
                    'last_page' => 22,
                    'per_page' => 15,
                    'total' => 326,
                ])));
    }

    public function test_lists_another_page_with_a_different_page_size()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['page' => 3, 'per_page' => 50])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 50)
                ->has('pagination', fn (AssertableJson $pagination) => $pagination->whereAll([
                    'current_page' => 3,
                    'next_page' => 4,
                    'prev_page' => 2,
                    'last_page' => 7,
                    'per_page' => 50,
                    'total' => 326,
                ])));
    }

    public function test_the_last_page_has_the_remaining_municipalities_and_no_next_page()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['page' => 7, 'per_page' => 50])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 26)
                ->has('pagination', fn (AssertableJson $pagination) => $pagination
                    ->where('next_page', null)
                    ->where('prev_page', 6)
                    ->etc()));
    }

    public function test_a_page_after_the_last_is_empty()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['page' => 100])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('data', [])
                ->has('pagination'));
    }

    public function test_every_municipality_appears_once_across_the_pages()
    {
        $slugs = collect();

        foreach (range(1, 7) as $page) {
            AngolaProvincesServer::tool(listMunicipalities::class, ['page' => $page, 'per_page' => 50])
                ->assertOk()
                ->assertStructuredContent(function (AssertableJson $json) use ($slugs) {
                    foreach ($json->toArray()['data'] as $municipality) {
                        $slugs->push($municipality['slug']);
                    }

                    $json->etc();
                });
        }

        $this->assertCount(326, $slugs);
        $this->assertCount(326, $slugs->unique());
    }

    public function test_the_page_size_is_limited()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['per_page' => 100])
            ->assertHasErrors(['The per page field must not be greater than 50.']);
    }

    public function test_the_page_must_be_at_least_one()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['page' => 0])
            ->assertHasErrors(['The page field must be at least 1.']);
    }

    public function test_the_page_must_be_a_number()
    {
        AngolaProvincesServer::tool(listMunicipalities::class, ['page' => 'first'])
            ->assertHasErrors(['The page field must be an integer.']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listMunicipalities::class)
            ->assertName('list-municipalities')
            ->assertTitle("List Angola's Municipalities");
    }
}
