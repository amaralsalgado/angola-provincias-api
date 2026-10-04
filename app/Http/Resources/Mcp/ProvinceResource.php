<?php

namespace App\Http\Resources\Mcp;

use App\Models\Province;
use Illuminate\Support\Collection;

class ProvinceResource
{
    /**
     * Transform the provinces (with their capital) into an array.
     *
     * @param  Collection<int, Province>  $provinces
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $provinces): array
    {
        return [
            'data' => $provinces->map(fn (Province $province) => self::baseFields($province))->all(),
        ];
    }

    /**
     * Transform a province, with its capital and the number of municipalities, communes, districts, ethnic groups and languages, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromModel(Province $province): array
    {
        return [
            ...self::baseFields($province),
            'total_municipalities' => $province->municipalities_count,
            'total_communes' => $province->communes_count,
            'total_districts' => $province->districts_count,
            'total_ethnic_groups' => $province->ethnic_groups_count,
            'total_languages' => $province->languages_count,
        ];
    }

    /**
     * Transform a province, with its capital, into an array.
     *
     * @return array<string, mixed>
     */
    private static function baseFields(Province $province): array
    {
        return [
            'name' => $province->name,
            'slug' => $province->slug,
            'area' => $province->area,
            'founded_at' => $province->founded_at->toDateString(),
            'capital' => $province->capital?->capitalable ? [
                'name' => $province->capital->capitalable->name,
                'slug' => $province->capital->capitalable->slug,
            ] : null,
        ];
    }
}
