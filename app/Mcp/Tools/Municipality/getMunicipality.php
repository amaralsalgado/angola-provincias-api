<?php

namespace App\Mcp\Tools\Municipality;

use App\Http\Resources\Mcp\MunicipalityResource;
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

#[Name('get-municipality')]
#[Title('Get a Municipality\'s details')]
#[Description('Get the details of a municipality: its province and how many communes and districts it has.')]
#[IsReadOnly(true)]
class getMunicipality extends Tool
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

        return $this->respondWith(fn () => $this->getMunicipality($filters['municipality']), 'municipality');
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

    private function getMunicipality(string $slug): ResponseFactory
    {
        $municipality = $this->municipalityService->getMunicipalityDetails($slug);

        return $this->structuredResponse("Municipality: {$municipality->name}.", MunicipalityResource::fromModel($municipality));
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
                ->description('The slug of the municipality to retrieve, as returned by list-province-municipalities (e.g. "dande").'),
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
                ->description('The municipality name.'),
            'slug' => $schema->string()
                ->description('The municipality slug.'),
            'province' => $schema->object([
                'name' => $schema->string()->description('The province name.'),
                'slug' => $schema->string()->description('The province slug.'),
            ])->description('The province the municipality belongs to.'),
            'total_communes' => $schema->integer()
                ->description('The number of communes of the municipality.'),
            'total_districts' => $schema->integer()
                ->description('The number of districts of the municipality.'),
        ];
    }
}
