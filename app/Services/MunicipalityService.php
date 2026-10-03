<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Commune;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Collection;

class MunicipalityService
{
    public function all(): Collection
    {
        return Municipality::with('province')->get();
    }

    public function find(string $slug): Municipality
    {
        return Municipality::with('province')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('municipality');
    }

    public function communes(string $municipality): Collection
    {
        return $this->findBySlug($municipality)->communes;
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
