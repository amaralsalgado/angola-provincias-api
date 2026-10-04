<?php

namespace App\Mcp\Tools\Language;

use App\Http\Resources\Mcp\LanguageResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Services\LanguageService;
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

#[Name('list-languages')]
#[Title('List Angola\'s Languages')]
#[Description('List the languages of Angola. Use get-language for the provinces where one is spoken, or list-province-languages for the languages of one province.')]
#[IsReadOnly(true)]
class listLanguages extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse;

    public function __construct(protected LanguageService $languageService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        return $this->respondWith(fn () => $this->listLanguages(), 'languages');
    }

    private function listLanguages(): ResponseFactory
    {
        $languages = $this->languageService->getLanguages();

        $textDescription = "Found {$languages->count()} languages.";

        return $this->structuredResponse($textDescription, LanguageResource::fromCollection($languages));
    }

    /**
     * Get the tool's output schema.
     *
     * @return array<string, Type>
     */
    public function outputSchema(JsonSchema $schema): array
    {
        return [
            'data' => $schema->array()
                ->items($schema->object([
                    'name' => $schema->string()
                        ->description('The language name.'),
                    'slug' => $schema->string()
                        ->description('The language slug.'),
                ]))
                ->description('The list of languages.'),
        ];
    }
}
