<?php

namespace Tests\Feature\Docs;

use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class DocsTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    #[DataProvider('versions')]
    public function test_every_docs_page_renders_in_each_version(string $version)
    {
        $pages = collect(Route::getRoutes()->getRoutesByName())
            ->filter(fn ($route, $name) => str_starts_with($name, 'docs.'));

        $this->assertNotEmpty($pages);

        foreach ($pages as $name => $route) {
            $this->get('/' . str_replace('{version}', $version, $route->uri()))->assertOk();
        }
    }

    public function test_docs_open_on_the_latest_version()
    {
        $this->get('/docs')->assertRedirect('/docs/2.x');
    }

    public function test_unversioned_docs_pages_no_longer_exist()
    {
        $this->get('/docs/provincias')->assertNotFound();
        $this->get('/docs/tratamento-de-erros')->assertNotFound();
    }

    public function test_unknown_versions_and_pages_are_not_found()
    {
        $this->get('/docs/3.x')->assertNotFound();
        $this->get('/docs/2.x/nope')->assertNotFound();
    }

    public function test_v1_docs_show_only_the_v1_endpoints_and_examples()
    {
        $this->get('/docs/1.x/provincias')
            ->assertOk()
            ->assertSee('/api/v1/provincias', false)
            ->assertSee('data_fundacao')
            ->assertSee('25-01-1576')
            ->assertDontSee('/api/v2', false)
            ->assertDontSee('founded_at');
    }

    public function test_v2_docs_show_only_the_v2_endpoints_and_examples()
    {
        $this->get('/docs/2.x/provincias')
            ->assertOk()
            ->assertSee('/api/v2/provinces', false)
            ->assertSee('founded_at')
            ->assertSee('1576-01-25')
            ->assertDontSee('/api/v1', false)
            ->assertDontSee('data_fundacao');
    }

    public function test_menu_links_stay_on_the_current_version()
    {
        $this->get('/docs/2.x/provincias')
            ->assertSee('/docs/2.x/capitais', false)
            ->assertDontSee('/docs/1.x/capitais', false);

        $this->get('/docs/1.x/provincias')
            ->assertSee('/docs/1.x/capitais', false)
            ->assertDontSee('/docs/2.x/capitais', false);
    }

    public function test_version_select_offers_the_same_page_in_each_version_with_the_current_one_selected()
    {
        $v2 = $this->get('/docs/2.x/provincias')->assertOk()->getContent();
        $v1 = $this->get('/docs/1.x/provincias')->assertOk()->getContent();

        foreach ([$v1, $v2] as $page) {
            $this->assertStringContainsString('<select', $page);
            $this->assertMatchesRegularExpression('#<option value="[^"]*/docs/1\.x/provincias"#', $page);
            $this->assertMatchesRegularExpression('#<option value="[^"]*/docs/2\.x/provincias"#', $page);
        }

        $this->assertMatchesRegularExpression('#<option value="[^"]*/docs/2\.x/provincias"[^>]*\sselected#', $v2);
        $this->assertDoesNotMatchRegularExpression('#<option value="[^"]*/docs/1\.x/provincias"[^>]*\sselected#', $v2);
        $this->assertMatchesRegularExpression('#<option value="[^"]*/docs/1\.x/provincias"[^>]*\sselected#', $v1);
    }

    public function test_theme_toggle_keeps_the_checkbox_the_script_listens_to()
    {
        $this->get('/docs/2.x')
            ->assertOk()
            ->assertSee('<input type="checkbox" name="theme" id="btn-theme"', false)
            ->assertSee('Mudar para o modo escuro')
            ->assertSee('Mudar para o modo claro');
    }

    public static function versions(): array
    {
        return [['1.x'], ['2.x']];
    }
}
