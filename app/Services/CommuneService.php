<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Commune;
use Illuminate\Database\Eloquent\Collection;

class CommuneService
{
    public function all(): Collection
    {
        return Commune::with('municipality.province')->get();
    }

    public function find(string $slug): Commune
    {
        return Commune::with('municipality.province')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('commune');
    }
}
