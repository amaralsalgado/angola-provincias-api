<?php

namespace App\Http\Resources\Mcp;

use App\Models\Commune;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class CommuneResource
{
    /**
     * Transform a page of communes, each with its municipality, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromPaginator(LengthAwarePaginator $paginator): array
    {
        return [
            'data' => $paginator->getCollection()->map(fn (Commune $commune) => [
                'name' => $commune->name,
                'slug' => $commune->slug,
                'municipality' => [
                    'name' => $commune->municipality->name,
                    'slug' => $commune->municipality->slug,
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
     * Transform the communes into an array.
     *
     * @param  Collection<int, Commune>  $communes
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $communes): array
    {
        return [
            'data' => $communes->map(fn (Commune $commune) => [
                'name' => $commune->name,
                'slug' => $commune->slug,
            ])->all(),
        ];
    }

    /**
     * Transform the communes, each with its municipality, into an array.
     *
     * @param  Collection<int, Commune>  $communes
     * @return array<string, mixed>
     */
    public static function fromCollectionWithMunicipality(Collection $communes): array
    {
        return [
            'data' => $communes->map(fn (Commune $commune) => [
                'name' => $commune->name,
                'slug' => $commune->slug,
                'municipality' => [
                    'name' => $commune->municipality->name,
                    'slug' => $commune->municipality->slug,
                ],
            ])->all(),
        ];
    }

    /**
     * Transform a commune, with its municipality and province, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromModel(Commune $commune): array
    {
        return [
            'name' => $commune->name,
            'slug' => $commune->slug,
            'municipality' => [
                'name' => $commune->municipality->name,
                'slug' => $commune->municipality->slug,
            ],
            'province' => [
                'name' => $commune->municipality->province->name,
                'slug' => $commune->municipality->province->slug,
            ],
        ];
    }
}
