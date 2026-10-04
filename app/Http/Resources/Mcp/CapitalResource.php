<?php

namespace App\Http\Resources\Mcp;

use App\Models\Capital;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class CapitalResource
{
    /**
     * Transform the capitals, each with the kind of place it is and its province, into an array.
     *
     * @param  Collection<int, Capital>  $capitals
     * @return array<string, mixed>
     */
    public static function fromCollection(Collection $capitals): array
    {
        return [
            'data' => $capitals->map(fn (Capital $capital) => [
                'name' => $capital->capitalable->name,
                'slug' => $capital->capitalable->slug,
                'type' => Str::snake(class_basename($capital->capitalable_type)),
                'province' => [
                    'name' => $capital->province->name,
                    'slug' => $capital->province->slug,
                ],
            ])->all(),
        ];
    }
}
