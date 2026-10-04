<?php

namespace App\Mcp\Tools\Province;

use App\Http\Resources\Mcp\ProvinceResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
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

#[Name('list-provinces')]
#[Title('List Angola\'s Provinces')]
#[Description('List the provinces of Angola with their area, founding date and capital. Use get-province for the details of one province.')]
#[IsReadOnly(true)]
class listProvinces extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse;

    public function __construct(protected ProvinceService $provinceService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        return $this->respondWith(fn () => $this->listProvinces(), 'provinces');
    }

    private function listProvinces(): ResponseFactory
    {
        $provinces = $this->provinceService->getAllWithCapital();

        $textDescription = "Found {$provinces->count()} provinces.";

        return $this->structuredResponse($textDescription, ProvinceResource::fromCollection($provinces));
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
                        ->description('The province name.'),
                    'slug' => $schema->string()
                        ->description('The province slug.'),
                    'area' => $schema->integer()
                        ->nullable()
                        ->description('The province area in square kilometres (km²). Null when unknown.'),
                    'founded_at' => $schema->string()
                        ->format('date')
                        ->description('When the province was founded (YYYY-MM-DD).'),
                    'capital' => $schema->object([
                        'name' => $schema->string()->description('The capital name.'),
                        'slug' => $schema->string()->description('The capital slug.'),
                    ])->nullable()->description('The capital of the province. Null when the province has no capital.'),
                ]))
                ->description('The list of provinces.'),
        ];
    }
}
