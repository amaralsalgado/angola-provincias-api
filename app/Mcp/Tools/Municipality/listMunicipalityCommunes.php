<?php

namespace App\Mcp\Tools\Municipality;

use App\Http\Resources\Mcp\CommuneResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Mcp\Tools\Traits\ValidatesRequests;
use App\Services\MunicipalityService;
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

#[Name('list-municipality-communes')]
#[Title('List a Municipality\'s Communes')]
#[Description('List the communes of a municipality. Use list-province-municipalities to find the slug of the municipality.')]
#[IsReadOnly(true)]
class listMunicipalityCommunes extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected MunicipalityService $municipalityService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), messages: $this->messages());

        return $this->respondWith(fn () => $this->listMunicipalityCommunes($filters['municipality']), 'municipality communes');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'municipality' => ['required', 'string'],
        ];
    }

    /**
     * @return array<string, string>
     */
    private function messages(): array
    {
        return [
            'municipality.required' => 'You must specify the slug of the municipality, for example "dande". Use the list-province-municipalities tool to find it.',
            'municipality.string' => 'The municipality must be the slug of the municipality as text, for example "dande".',
        ];
    }

    private function listMunicipalityCommunes(string $slug): ResponseFactory
    {
        $communes = $this->municipalityService->communes($slug);

        $textDescription = "Found {$communes->count()} communes.";

        return $this->structuredResponse($textDescription, CommuneResource::fromCollection($communes));
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'municipality' => $schema->string()
                ->required()
                ->description('The slug of the municipality to list the communes of, as returned by list-province-municipalities (e.g. "dande").'),
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
                        ->description('The commune name.'),
                    'slug' => $schema->string()
                        ->description('The commune slug.'),
                ]))
                ->description('The list of communes of the municipality.'),
        ];
    }
}
