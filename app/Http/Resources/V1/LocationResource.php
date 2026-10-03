<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Minimal representation (nome, slug) of a municipality, commune or district.
 */
class LocationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->name,
            'slug' => $this->slug,
        ];
    }
}
