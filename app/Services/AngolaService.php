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
     * General information about the country, with the total of records of each entity.
     */
    public function info(): array
    {
        return [
            'name' => 'Republic of Angola',
            'continent' => 'Africa',
            'area' => 1246700,
            'main_capital' => 'Luanda',
            'main_language' => 'Portuguese',
            'currency' => 'Kwanza (kz)',
            'timezone' => 'WAT (UTC+1)',
            'phone_code' => '+244',
            'internet_code' => '.ao',
            ...$this->totals(),
        ];
    }

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
