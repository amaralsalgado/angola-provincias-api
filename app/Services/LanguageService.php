<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Language;
use Illuminate\Database\Eloquent\Collection;

class LanguageService
{
    public function all(): Collection
    {
        return Language::with('provinces')->get();
    }

    /**
     * All the languages, without their provinces.
     */
    public function getLanguages(): Collection
    {
        return Language::orderBy('id')->get();
    }

    public function find(string $slug): Language
    {
        return Language::with('provinces')->where('slug', $slug)->first()
            ?? throw new ResourceNotFoundException('language');
    }
}
