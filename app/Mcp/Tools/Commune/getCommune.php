<?php

namespace App\Mcp\Tools\Commune;

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

#[Name('get-commune')]
#[Title('Get a Commune\'s details')]
#[Description('Get the details of a commune: its municipality and province. A commune is identified by the slug of its municipality and its own slug, because communes of different municipalities can share a slug. Use list-municipality-communes to find the slug of the commune.')]
#[IsReadOnly(true)]
class getCommune extends Tool
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

        return $this->respondWith(fn () => $this->getCommune($filters['municipality'], $filters['commune']), 'commune');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'municipality' => ['required', 'string'],
            'commune' => ['required', 'string'],
        ];
    }

    /**
     * @return array<string, string>
     */
    private function messages(): array
    {
        return [
            'municipality.required' => 'You must specify the slug of the municipality of the commune, for example "dande". Use the list-province-municipalities tool to find it.',
            'municipality.string' => 'The municipality must be the slug of the municipality as text, for example "dande".',
            'commune.required' => 'You must specify the slug of the commune, for example "caxito". Use the list-municipality-communes tool to find it.',
            'commune.string' => 'The commune must be the slug of the commune as text, for example "caxito".',
        ];
    }

    private function getCommune(string $municipalitySlug, string $communeSlug): ResponseFactory
    {
        $commune = $this->municipalityService->getCommuneDetails($municipalitySlug, $communeSlug);

        return $this->structuredResponse("Commune: {$commune->name}.", CommuneResource::fromModel($commune));
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
                ->description('The slug of the municipality the commune belongs to, as returned by list-province-municipalities (e.g. "dande").'),
            'commune' => $schema->string()
                ->required()
                ->description('The slug of the commune to retrieve, as returned by list-municipality-communes (e.g. "caxito").'),
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
                ->description('The commune name.'),
            'slug' => $schema->string()
                ->description('The commune slug.'),
            'municipality' => $schema->object([
                'name' => $schema->string()->description('The municipality name.'),
                'slug' => $schema->string()->description('The municipality slug.'),
            ])->description('The municipality the commune belongs to.'),
            'province' => $schema->object([
                'name' => $schema->string()->description('The province name.'),
                'slug' => $schema->string()->description('The province slug.'),
            ])->description('The province the commune belongs to.'),
        ];
    }
}
