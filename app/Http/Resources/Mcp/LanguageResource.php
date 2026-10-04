<?php

namespace App\Http\Resources\Mcp;

use App\Models\Language;
use Illuminate\Support\Collection;

class LanguageResource
{
    /**
     * Transform the languages into an array.
     *
     * @param  Collection<int, Language>  $languages
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $languages): array
    {
        return [
            'data' => $languages->map(fn (Language $language) => [
                'name' => $language->name,
                'slug' => $language->slug,
            ])->all(),
        ];
    }

    /**
     * Transform a language, with the provinces where it is spoken, into an array.
     *
     * @return array<string, mixed>
     */
    public static function fromModel(Language $language): array
    {
        return [
            'name' => $language->name,
            'slug' => $language->slug,
            'provinces' => $language->provinces->map(fn ($province) => [
                'name' => $province->name,
                'slug' => $province->slug,
            ])->all(),
        ];
    }
}
