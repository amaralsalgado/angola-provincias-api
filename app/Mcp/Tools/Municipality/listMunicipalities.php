<?php

namespace App\Mcp\Tools\Municipality;

use App\Http\Resources\Mcp\MunicipalityResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\HasPaginationOutputSchema;
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

#[Name('list-municipalities')]
#[Title('List Angola\'s Municipalities')]
#[Description('List the municipalities of Angola, paginated, each with its province. Use list-province-municipalities for the municipalities of one province, and get-municipality for the details of one municipality.')]
#[IsReadOnly(true)]
class listMunicipalities extends Tool
{
    use HandlesErrors, HasPaginationOutputSchema, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected MunicipalityService $municipalityService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), nonBlankable: ['page', 'per_page']);

        return $this->respondWith(fn () => $this->listMunicipalities($filters), 'municipalities');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'page' => ['nullable', 'integer', 'min:1'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:50'],
        ];
    }

    /**
     * @param  array<string, mixed>  $filters
     */
    private function listMunicipalities(array $filters): ResponseFactory
    {
        $municipalities = $this->municipalityService->getMunicipalities(
            page: $filters['page'] ?? 1,
            perPage: $filters['per_page'] ?? 15,
        );

        $textDescription = "Found {$municipalities->total()} municipalities (page {$municipalities->currentPage()} of {$municipalities->lastPage()}).";

        return $this->structuredResponse($textDescription, MunicipalityResource::fromPaginator($municipalities));
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'page' => $schema->integer()
                ->default(1)
                ->min(1)
                ->description('The page number to retrieve.'),
            'per_page' => $schema->integer()
                ->default(15)
                ->min(1)
                ->max(50)
                ->description('The number of municipalities to retrieve per page.'),
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
                        ->description('The municipality name.'),
                    'slug' => $schema->string()
                        ->description('The municipality slug.'),
                    'province' => $schema->object([
                        'name' => $schema->string()->description('The province name.'),
                        'slug' => $schema->string()->description('The province slug.'),
                    ])->description('The province the municipality belongs to.'),
                ]))
                ->description('The list of municipalities.'),
            'pagination' => $this->paginationOutputSchema($schema),
        ];
    }
}
