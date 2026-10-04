<?php

namespace App\Mcp\Tools\Capital;

use App\Http\Resources\Mcp\CapitalResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Services\CapitalService;
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

#[Name('list-capitals')]
#[Title('List Angola\'s Capitals')]
#[Description('List the capital of each province of Angola, with the province it belongs to. A capital is a municipality, a commune or a district; the type says which.')]
#[IsReadOnly(true)]
class listCapitals extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse;

    public function __construct(protected CapitalService $capitalService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        return $this->respondWith(fn () => $this->listCapitals(), 'capitals');
    }

    private function listCapitals(): ResponseFactory
    {
        $capitals = $this->capitalService->getCapitals();

        $textDescription = "Found {$capitals->count()} capitals.";

        return $this->structuredResponse($textDescription, CapitalResource::fromCollection($capitals));
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
                        ->description('The name of the capital.'),
                    'slug' => $schema->string()
                        ->description('The slug of the capital.'),
                    'type' => $schema->string()
                        ->enum(['municipality', 'commune', 'district'])
                        ->description('What the capital is: a municipality, a commune or a district.'),
                    'province' => $schema->object([
                        'name' => $schema->string()->description('The province name.'),
                        'slug' => $schema->string()->description('The province slug.'),
                    ])->description('The province the capital belongs to.'),
                ]))
                ->description('The list of capitals, one per province.'),
        ];
    }
}
