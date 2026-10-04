<?php

namespace App\Mcp\Tools\Province;

use App\Http\Resources\Mcp\LanguageResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Mcp\Tools\Traits\ValidatesRequests;
use App\Services\ProvinceService;
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

#[Name('list-province-languages')]
#[Title('List a Province\'s Languages')]
#[Description('List the languages spoken in a province. Use list-provinces to find the slug of the province.')]
#[IsReadOnly(true)]
class listProvinceLanguages extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected ProvinceService $provinceService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), messages: $this->messages());

        return $this->respondWith(fn () => $this->listProvinceLanguages($filters['province']), 'province languages');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'province' => ['required', 'string'],
        ];
    }

    /**
     * @return array<string, string>
     */
    private function messages(): array
    {
        return [
            'province.required' => 'You must specify the slug of the province, for example "bengo". Use the list-provinces tool to find it.',
            'province.string' => 'The province must be the slug of the province as text, for example "bengo".',
        ];
    }

    private function listProvinceLanguages(string $slug): ResponseFactory
    {
        $languages = $this->provinceService->languages($slug);

        $textDescription = "Found {$languages->count()} languages.";

        return $this->structuredResponse($textDescription, LanguageResource::fromCollection($languages));
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'province' => $schema->string()
                ->required()
                ->description('The slug of the province to list the languages of, as returned by list-provinces (e.g. "bengo").'),
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
            'data' => $schema->array()
                ->items($schema->object([
                    'name' => $schema->string()
                        ->description('The language name.'),
                    'slug' => $schema->string()
                        ->description('The language slug.'),
                ]))
                ->description('The list of languages spoken in the province.'),
        ];
    }
}
