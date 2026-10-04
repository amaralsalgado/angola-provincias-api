<?php

namespace App\Mcp\Tools\EthnicGroup;

use App\Http\Resources\Mcp\EthnicGroupResource;
use App\Mcp\Tools\Traits\HandlesErrors;
use App\Mcp\Tools\Traits\ReturnsStructuredResponse;
use App\Mcp\Tools\Traits\ValidatesRequests;
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

#[Name('get-ethnic-group')]
#[Title('Get an Ethnic Group\'s details')]
#[Description('Get the details of an ethnic group: the provinces where it is present. Use list-ethnic-groups to find the slug of the ethnic group.')]
#[IsReadOnly(true)]
class getEthnicGroup extends Tool
{
    use HandlesErrors, ReturnsStructuredResponse, ValidatesRequests;

    public function __construct(protected EthnicGroupService $ethnicGroupService)
    {
        //
    }

    /**
     * Handle the tool request.
     */
    public function handle(Request $request): ResponseFactory|Response
    {
        $filters = $this->validated($request, $this->rules(), messages: $this->messages());

        return $this->respondWith(fn () => $this->getEthnicGroup($filters['ethnic_group']), 'ethnic group');
    }

    /**
     * @return array<string, mixed>
     */
    private function rules(): array
    {
        return [
            'ethnic_group' => ['required', 'string'],
        ];
    }

    /**
     * @return array<string, string>
     */
    private function messages(): array
    {
        return [
            'ethnic_group.required' => 'You must specify the slug of the ethnic group, for example "ambundu". Use the list-ethnic-groups tool to find it.',
            'ethnic_group.string' => 'The ethnic group must be the slug of the ethnic group as text, for example "ambundu".',
        ];
    }

    private function getEthnicGroup(string $slug): ResponseFactory
    {
        $ethnicGroup = $this->ethnicGroupService->find($slug);

        return $this->structuredResponse("Ethnic group: {$ethnicGroup->name}.", EthnicGroupResource::fromModel($ethnicGroup));
    }

    /**
     * Get the tool's input schema.
     *
     * @return array<string, Type>
     */
    public function schema(JsonSchema $schema): array
    {
        return [
            'ethnic_group' => $schema->string()
                ->required()
                ->description('The slug of the ethnic group to retrieve, as returned by list-ethnic-groups (e.g. "ambundu").'),
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
                ->description('The ethnic group name.'),
            'slug' => $schema->string()
                ->description('The ethnic group slug.'),
            'provinces' => $schema->array()
                ->items($schema->object([
                    'name' => $schema->string()->description('The province name.'),
                    'slug' => $schema->string()->description('The province slug.'),
                ]))
                ->description('The provinces where the ethnic group is present.'),
        ];
    }
}
