<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Commune;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class MunicipalityService
{
    public function all(): Collection
    {
        return Municipality::with('province')->get();
    }

    /**
     * A page of municipalities, each with its province.
     */
    public function getMunicipalities(int $page, int $perPage): LengthAwarePaginator
    {
        return Municipality::with('province')->orderBy('id')->paginate($perPage, page: $page);
    }

    public function find(string $slug): Municipality
    {
        return Municipality::with('province')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('municipality');
    }

    /**
     * The details of a municipality: its province and the number of communes and districts it has.
     */
    public function getMunicipalityDetails(string $slug): Municipality
    {
        return Municipality::with('province')
            ->withCount(['communes', 'districts'])
            ->where('slug', $slug)
            ->first()
            ?? throw new ResourceNotFoundException('municipality');
    }

    public function communes(string $municipality): Collection
    {
        return $this->findBySlug($municipality)->communes;
    }

    /**
     * The details of a commune: its municipality and the province of that municipality.
     */
    public function getCommuneDetails(string $municipality, string $commune): Commune
    {
        return $this->findBySlug($municipality)->communes()->with('municipality.province')->where('slug', $commune)->first()
            ?? throw new ResourceNotFoundException('commune');
    }

    public function commune(string $municipality, string $commune): Commune
    {
        return $this->findBySlug($municipality)->communes()->where('slug', $commune)->first()
            ?? throw new ResourceNotFoundException('commune');
    }

    public function districts(string $municipality): Collection
    {
        return $this->findBySlug($municipality)->districts;
    }

    public function district(string $municipality, string $district): District
    {
        return $this->findBySlug($municipality)->districts()->where('slug', $district)->first()
            ?? throw new ResourceNotFoundException('district');
    }

    private function findBySlug(string $slug): Municipality
    {
        return Municipality::where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('municipality');
    }
}
