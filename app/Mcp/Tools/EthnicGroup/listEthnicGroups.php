<?php

namespace App\Mcp\Tools\EthnicGroup;

use App\Http\Resources\Mcp\EthnicGroupResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Services\EthnicGroupService;
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

#[Name('list-ethnic-groups')]
#[Title('List Angola\'s Ethnic Groups')]
#[Description('List the ethnic groups of Angola. Use get-ethnic-group for the provinces where one is present, or list-province-ethnic-groups for the ethnic groups of one province.')]
#[IsReadOnly(true)]
class listEthnicGroups extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse;

    public function __construct(protected EthnicGroupService $ethnicGroupService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        return $this->respondWith(fn () => $this->listEthnicGroups(), 'ethnic groups');
    }

    private function listEthnicGroups(): ResponseFactory
    {
        $ethnicGroups = $this->ethnicGroupService->getEthnicGroups();

        $textDescription = "Found {$ethnicGroups->count()} ethnic groups.";

        return $this->structuredResponse($textDescription, EthnicGroupResource::fromCollection($ethnicGroups));
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
                        ->description('The ethnic group name.'),
                    'slug' => $schema->string()
                        ->description('The ethnic group slug.'),
                ]))
                ->description('The list of ethnic groups.'),
        ];
    }
}
