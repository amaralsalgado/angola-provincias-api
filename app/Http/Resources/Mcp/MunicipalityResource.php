<?php

namespace App\Http\Resources\Mcp;

use App\Models\Municipality;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class MunicipalityResource
{
    /**
     * Transform a page of municipalities, each with its province, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromPaginator(LengthAwarePaginator $paginator): array
    {
        return [
            'data' => $paginator->getCollection()->map(fn (Municipality $municipality) => [
                'name' => $municipality->name,
                'slug' => $municipality->slug,
                'province' => [
                    'name' => $municipality->province->name,
                    'slug' => $municipality->province->slug,
                ],
            ])->all(),
            'pagination' => [
                'current_page' => $paginator->currentPage(),
                'next_page' => $paginator->currentPage() < $paginator->lastPage() ? $paginator->currentPage() + 1 : null,
                'prev_page' => $paginator->currentPage() > 1 ? $paginator->currentPage() - 1 : null,
                'last_page' => $paginator->lastPage(),
                'per_page' => $paginator->perPage(),
                'total' => $paginator->total(),
            ],
        ];
    }

    /**
     * Transform the municipalities into an array.
     *
     * @param  Collection<int, Municipality>  $municipalities
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $municipalities): array
    {
        return [
            'data' => $municipalities->map(fn (Municipality $municipality) => [
                'name' => $municipality->name,
                'slug' => $municipality->slug,
            ])->all(),
        ];
    }

    /**
     * Transform a municipality, with its province and the number of communes and districts, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromModel(Municipality $municipality): array
    {
        return [
            'name' => $municipality->name,
            'slug' => $municipality->slug,
            'province' => [
                'name' => $municipality->province->name,
                'slug' => $municipality->province->slug,
            ],
            'total_communes' => $municipality->communes_count,
            'total_districts' => $municipality->districts_count,
        ];
    }
}
