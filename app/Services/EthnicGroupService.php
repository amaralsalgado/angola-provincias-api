<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\EthnicGroup;
use Illuminate\Database\Eloquent\Collection;

class EthnicGroupService
{
    public function all(): Collection
    {
        return EthnicGroup::with('provinces')->get();
    }

    public function find(string $slug): EthnicGroup
    {
        return EthnicGroup::with('provinces')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('ethnic_group');
    }
}
