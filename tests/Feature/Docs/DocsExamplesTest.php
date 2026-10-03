<?php

namespace Tests\Feature\Docs;

use Illuminate\Support\Arr;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

/**
 * Every docs example is a Blade file per API version (resources/views/docs/examples/v1|v2/...).
 * These tests keep the examples honest: they must exist for both versions and match what the API really returns.
 */
class DocsExamplesTest extends TestCase
{
    private const EXAMPLES_PATH = 'resources/views/docs/examples';

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_every_example_exists_in_both_versions()
    {
        $this->assertNotEmpty(self::exampleNames('v1'));
        $this->assertSame(self::exampleNames('v1'), self::exampleNames('v2'));
    }

    #[DataProvider('examples')]
    public function test_example_matches_the_real_api_response(string $version, string $name)
    {
        $rendered = view("docs.examples.$version.$name")->render();

        preg_match('/data-copy="([^"]+)"/', $rendered, $endpoint);
        preg_match('#<andypf-json-viewer[^>]*>(.*?)</andypf-json-viewer>#s', $rendered, $json);

        $this->assertNotEmpty($endpoint, "$version/$name has no endpoint");
        $this->assertNotEmpty($json, "$version/$name has no JSON");

        $example = json_decode(html_entity_decode(trim($json[1])), true);
        $this->assertIsArray($example, "$version/$name has invalid JSON");

        $endpoint = html_entity_decode($endpoint[1]);
        $this->assertMatchesRegularExpression("#/api/$version/#", $endpoint, "$version/$name documents the wrong version");

        $locale = $version === 'v1' ? 'pt' : 'en';

        // errors that can't be provoked on demand (429, 500) are checked against the API's own messages
        if (!in_array($example['code'], [200, 404], true)) {
            $messages = Arr::dot(app('translator')->get('api', [], $locale, false));
            $this->assertContains($example['message'], $messages, "$version/$name message is not an API message");

            return;
        }

        preg_match('#/api/v[12]/.*#', $endpoint, $path);
        static $requests = 0;
        $ip = '10.3.' . intdiv(++$requests, 250) . '.' . ($requests % 250);

        $response = $this->withServerVariables(['REMOTE_ADDR' => $ip])->getJson($path[0]);

        $response->assertStatus($example['code']);

        $actual = $response->json();
        $this->assertSame($actual['message'], $example['message'], "$version/$name message differs from the API");
        $this->assertShape($example, $actual, "$version/$name");
    }

    public static function examples(): array
    {
        $cases = [];

        foreach (['v1', 'v2'] as $version) {
            foreach (self::exampleNames($version) as $name) {
                $cases["$version/$name"] = [$version, $name];
            }
        }

        return $cases;
    }

    private static function exampleNames(string $version): array
    {
        // the data provider runs before the application is booted, so base_path() is not available yet
        $base = dirname(__DIR__, 3) . '/' . self::EXAMPLES_PATH . "/$version";
        $names = [];

        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($base, \FilesystemIterator::SKIP_DOTS)) as $file) {
            $relative = substr($file->getPathname(), strlen($base) + 1, -strlen('.blade.php'));
            $names[] = str_replace('/', '.', $relative);
        }

        sort($names);

        return $names;
    }

    /**
     * The example (usually trimmed) must have the same shape as the real response.
     */
    private function assertShape(mixed $example, mixed $actual, string $path): void
    {
        if (is_array($example) && array_is_list($example)) {
            if ($example === []) {
                return;
            }

            $this->assertIsArray($actual, $path);
            $this->assertNotEmpty($actual, "$path: the API returned no item to compare with the example");
            $this->assertShape($example[0], $actual[0], "$path[0]");

            return;
        }

        if (is_array($example)) {
            $this->assertIsArray($actual, $path);

            foreach ($example as $key => $value) {
                $this->assertArrayHasKey($key, $actual, "$path: the API response has no '$key'");
                $this->assertShape($value, $actual[$key], "$path.$key");
            }

            return;
        }

        if ($actual !== null) {
            $this->assertSame(gettype($example), gettype($actual), "$path has a different type");
        }
    }
}
