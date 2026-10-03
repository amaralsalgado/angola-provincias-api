<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\District;
use Illuminate\Database\Eloquent\Collection;

class DistrictService
{
    public function all(): Collection
    {
        return District::with('municipality.province')->get();
    }

    public function find(string $slug): District
    {
        return District::with('municipality.province')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('district');
    }
}
