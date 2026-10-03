<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Capital;
use App\Models\Commune;
use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Collection;

class CapitalService
{
    public function all(): Collection
    {
        return Capital::with(['province', 'capitalable'])->get();
    }

    /**
     * Finds the capital of the province that contains the given municipality, commune or district.
     */
    public function find(string $slug): Capital
    {
        $provinceId = $this->provinceIdFromSlug($slug);

        $capital = $provinceId
            ? Capital::with(['province', 'capitalable'])->where('province_id', $provinceId)->first()
            : null;

        if (!$capital) {
            throw new ResourceNotFoundException('capital');
        }

        return $capital;
    }

    private function provinceIdFromSlug(string $slug): ?int
    {
        return Municipality::where('slug', $slug)->value('province_id')
            ?? Commune::with('municipality')->where('slug', $slug)->first()?->municipality->province_id
            ?? District::with('municipality')->where('slug', $slug)->first()?->municipality->province_id;
    }
}
