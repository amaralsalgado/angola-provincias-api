<?php

namespace Tests\Feature\Mcp\Tools;

use App\Mcp\Servers\AngolaProvincesServer;
use App\Mcp\Tools\Commune\listCommunes;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class ListCommunesTest extends TestCase
{
    public function test_lists_the_first_page_of_communes_with_their_municipality()
    {
        AngolaProvincesServer::tool(listCommunes::class)
            ->assertOk()
            ->assertSee('Found 378 communes (page 1 of 26).')
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 15, fn (AssertableJson $commune) => $commune
                    ->where('name', 'Bula Atumba')
                    ->where('slug', 'bula-atumba')
                    ->where('municipality', ['name' => 'Bula Atumba', 'slug' => 'bula-atumba']))
                ->has('pagination', fn (AssertableJson $pagination) => $pagination->whereAll([
                    'current_page' => 1,
                    'next_page' => 2,
                    'prev_page' => null,
                    'last_page' => 26,
                    'per_page' => 15,
                    'total' => 378,
                ])));
    }

    public function test_lists_another_page_with_a_different_page_size()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['page' => 3, 'per_page' => 50])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 50)
                ->has('pagination', fn (AssertableJson $pagination) => $pagination->whereAll([
                    'current_page' => 3,
                    'next_page' => 4,
                    'prev_page' => 2,
                    'last_page' => 8,
                    'per_page' => 50,
                    'total' => 378,
                ])));
    }

    public function test_the_last_page_has_the_remaining_communes_and_no_next_page()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['page' => 26])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->has('data', 3)
                ->has('pagination', fn (AssertableJson $pagination) => $pagination
                    ->where('next_page', null)
                    ->where('prev_page', 25)
                    ->etc()));
    }

    public function test_a_page_after_the_last_is_empty()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['page' => 100])
            ->assertOk()
            ->assertStructuredContent(fn (AssertableJson $json) => $json
                ->where('data', [])
                ->has('pagination'));
    }

    public function test_every_commune_appears_once_across_the_pages()
    {
        $communes = collect();

        foreach (range(1, 8) as $page) {
            AngolaProvincesServer::tool(listCommunes::class, ['page' => $page, 'per_page' => 50])
                ->assertOk()
                ->assertStructuredContent(function (AssertableJson $json) use ($communes) {
                    foreach ($json->toArray()['data'] as $commune) {
                        $communes->push($commune['municipality']['slug'].'/'.$commune['slug']);
                    }

                    $json->etc();
                });
        }

        $this->assertCount(378, $communes);
        $this->assertCount(378, $communes->unique());
    }

    public function test_the_page_size_is_limited()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['per_page' => 100])
            ->assertHasErrors(['The per page field must not be greater than 50.']);
    }

    public function test_the_page_must_be_at_least_one()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['page' => 0])
            ->assertHasErrors(['The page field must be at least 1.']);
    }

    public function test_the_page_must_be_a_number()
    {
        AngolaProvincesServer::tool(listCommunes::class, ['page' => 'first'])
            ->assertHasErrors(['The page field must be an integer.']);
    }

    public function test_is_named_and_titled()
    {
        AngolaProvincesServer::tool(listCommunes::class)
            ->assertName('list-communes')
            ->assertTitle("List Angola's Communes");
    }
}
