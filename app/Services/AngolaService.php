<?php

namespace App\Services;

use App\Models\Capital;
use App\Models\Commune;
use App\Models\District;
use App\Models\EthnicGroup;
use App\Models\Language;
use App\Models\Municipality;
use App\Models\Province;

class AngolaService
{
    /**
     * Total of records of each entity.
     */
    public function totals(): array
    {
        return [
            'provinces' => Province::count(),
            'capitals' => Capital::count(),
            'municipalities' => Municipality::count(),
            'communes' => Commune::count(),
            'districts' => District::count(),
            'ethnic_groups' => EthnicGroup::count(),
            'languages' => Language::count(),
        ];
    }
}
