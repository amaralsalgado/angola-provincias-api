<?php

namespace App\Mcp\Tools\Commune;

use App\Http\Resources\Mcp\CommuneResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\HasPaginationOutputSchema;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Mcp\Tools\Traits\ValidatesRequests;
use App\Services\CommuneService;
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

#[Name('list-communes')]
#[Title('List Angola\'s Communes')]
#[Description('List the communes of Angola, paginated, each with its municipality. Use list-province-communes or list-municipality-communes to narrow the list down, and get-commune for the details of one commune.')]
#[IsReadOnly(true)]
class listCommunes extends Tool
{
    use HandlesErrors, HasPaginationOutputSchema, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected CommuneService $communeService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), nonBlankable: ['page', 'per_page']);

        return $this->respondWith(fn () => $this->listCommunes($filters), 'communes');
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
    private function listCommunes(array $filters): ResponseFactory
    {
        $communes = $this->communeService->getCommunes(
            page: $filters['page'] ?? 1,
            perPage: $filters['per_page'] ?? 15,
        );

        $textDescription = "Found {$communes->total()} communes (page {$communes->currentPage()} of {$communes->lastPage()}).";

        return $this->structuredResponse($textDescription, CommuneResource::fromPaginator($communes));
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
                ->description('The number of communes to retrieve per page.'),
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
                        ->description('The commune slug. Not unique on its own: use it together with the municipality slug.'),
                    'municipality' => $schema->object([
                        'name' => $schema->string()->description('The municipality name.'),
                        'slug' => $schema->string()->description('The municipality slug.'),
                    ])->description('The municipality the commune belongs to.'),
                ]))
                ->description('The list of communes.'),
            'pagination' => $this->paginationOutputSchema($schema),
        ];
    }
}
