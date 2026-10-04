<?php

namespace App\Mcp\Tools\Province;

use App\Http\Resources\Mcp\ProvinceResource;
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

#[Name('get-province')]
#[Title('Get a Province\'s details')]
#[Description('Get the details of a province: its area, founding date, capital and how many municipalities, communes, districts, ethnic groups and languages it has.')]
#[IsReadOnly(true)]
class getProvince extends Tool
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

        return $this->respondWith(fn () => $this->getProvince($filters['province']), 'province');
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

    private function getProvince(string $slug): ResponseFactory
    {
        $province = $this->provinceService->getProvinceDetails($slug);

        return $this->structuredResponse("Province: {$province->name}.", ProvinceResource::fromModel($province));
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
                ->description('The slug of the province to retrieve, as returned by list-provinces (e.g. "bengo").'),
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
            'total_municipalities' => $schema->integer()
                ->description('The number of municipalities of the province.'),
            'total_communes' => $schema->integer()
                ->description('The number of communes of the province, across all its municipalities.'),
            'total_districts' => $schema->integer()
                ->description('The number of districts of the province, across all its municipalities.'),
            'total_ethnic_groups' => $schema->integer()
                ->description('The number of ethnic groups present in the province.'),
            'total_languages' => $schema->integer()
                ->description('The number of languages spoken in the province.'),
        ];
    }
}
