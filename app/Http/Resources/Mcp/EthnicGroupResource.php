<?php

namespace App\Http\Resources\Mcp;

use App\Models\EthnicGroup;
use Illuminate\Support\Collection;

class EthnicGroupResource
{
    /**
     * Transform the ethnic groups into an array.
     *
     * @param  Collection<int, EthnicGroup>  $ethnicGroups
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $ethnicGroups): array
    {
        return [
            'data' => $ethnicGroups->map(fn (EthnicGroup $ethnicGroup) => [
                'name' => $ethnicGroup->name,
                'slug' => $ethnicGroup->slug,
            ])->all(),
        ];
    }

    /**
     * Transform an ethnic group, with the provinces where it is present, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromModel(EthnicGroup $ethnicGroup): array
    {
        return [
            'name' => $ethnicGroup->name,
            'slug' => $ethnicGroup->slug,
            'provinces' => $ethnicGroup->provinces->map(fn ($province) => [
                'name' => $province->name,
                'slug' => $province->slug,
            ])->all(),
        ];
    }
}
