<?php

namespace App\Mcp\Tools\Language;

use App\Http\Resources\Mcp\LanguageResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Mcp\Tools\Traits\ValidatesRequests;
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

#[Name('get-language')]
#[Title('Get a Language\'s details')]
#[Description('Get the details of a language: the provinces where it is spoken. Use list-languages to find the slug of the language.')]
#[IsReadOnly(true)]
class getLanguage extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected LanguageService $languageService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), messages: $this->messages());

        return $this->respondWith(fn () => $this->getLanguage($filters['language']), 'language');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'language' => ['required', 'string'],
        ];
    }

    /**
     * @return array<string, string>
     */
    private function messages(): array
    {
        return [
            'language.required' => 'You must specify the slug of the language, for example "kimbundu". Use the list-languages tool to find it.',
            'language.string' => 'The language must be the slug of the language as text, for example "kimbundu".',
        ];
    }

    private function getLanguage(string $slug): ResponseFactory
    {
        $language = $this->languageService->find($slug);

        return $this->structuredResponse("Language: {$language->name}.", LanguageResource::fromModel($language));
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'language' => $schema->string()
                ->required()
                ->description('The slug of the language to retrieve, as returned by list-languages (e.g. "kimbundu").'),
        ];
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
                ->description('The language name.'),
            'slug' => $schema->string()
                ->description('The language slug.'),
            'provinces' => $schema->array()
                ->items($schema->object([
                    'name' => $schema->string()->description('The province name.'),
                    'slug' => $schema->string()->description('The province slug.'),
                ]))
                ->description('The provinces where the language is spoken.'),
        ];
    }
}
