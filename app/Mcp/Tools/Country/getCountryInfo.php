<?php

namespace App\Mcp\Tools\Country;

use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Services\AngolaService;
use Illuminate\Contracts\JsonSchema\JsonSchema;
use Illuminate\JsonSchema\Types\Type;
use Laravel\Mcp\Request;
use Laravel\Mcp\Response;
use Laravel\Mcp\ResponseFactory;
use Laravel\Mcp\Server\Attributes\Description;
use Laravel\Mcp\Server\Attributes\Name;
use Laravel\Mcp\Server\Attributes\Title;
use Laravel\Mcp\Server\Tool;
use Laravel\Mcp\Server\Tools\Annotations\IsReadOnly;

#[Name('get-country-info')]
#[Title('Get Angola\'s general information')]
#[Description('Get general information about Angola (main capital, main language, currency, timezone and codes) and the total number of provinces, capitals, municipalities, communes, districts, ethnic groups and languages.')]
#[IsReadOnly(true)]
class getCountryInfo extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse;

    public function __construct(protected AngolaService $angolaService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        return $this->respondWith(fn () => $this->getCountryInfo(), 'the country info');
    }

    private function getCountryInfo(): ResponseFactory
    {
        $info = $this->angolaService->info();

        return $this->structuredResponse("Country: {$info['name']}.", $info);
    }

    /**
     * Get the tool's output schema.
     *
     * @return array<string, Type>
     */
    public function outputSchema(JsonSchema $schema): array
    {
        return [
            'name' => $schema->string()
                ->description('The official name of the country.'),
            'continent' => $schema->string()
                ->description('The continent where the country is.'),
            'area' => $schema->integer()
                ->description('The area of the country in square kilometres (km²).'),
            'main_capital' => $schema->string()
                ->description('The main capital of the country.'),
            'main_language' => $schema->string()
                ->description('The main language of the country.'),
            'currency' => $schema->string()
                ->description('The currency of the country.'),
            'timezone' => $schema->string()
                ->description('The timezone of the country.'),
            'phone_code' => $schema->string()
                ->description('The international phone code of the country.'),
            'internet_code' => $schema->string()
                ->description('The internet country code (top-level domain).'),
            'provinces' => $schema->integer()
                ->description('The total number of provinces.'),
            'capitals' => $schema->integer()
                ->description('The total number of capitals.'),
            'municipalities' => $schema->integer()
                ->description('The total number of municipalities.'),
            'communes' => $schema->integer()
                ->description('The total number of communes.'),
            'districts' => $schema->integer()
                ->description('The total number of districts.'),
            'ethnic_groups' => $schema->integer()
                ->description('The total number of ethnic groups.'),
            'languages' => $schema->integer()
                ->description('The total number of languages.'),
        ];
    }
}
