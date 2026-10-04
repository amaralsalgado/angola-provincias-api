<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class CommuneService
{
    public function all(): Collection
    {
        return Commune::with('municipality.province')->get();
    }

    /**
     * A page of communes, each with its municipality.
     */
    public function getCommunes(int $page, int $perPage): LengthAwarePaginator
    {
        return Commune::with('municipality')->orderBy('id')->paginate($perPage, page: $page);
    }

    public function find(string $slug): Commune
    {
        return Commune::with('municipality.province')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('commune');
    }
}
