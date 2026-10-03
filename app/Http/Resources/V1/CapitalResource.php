<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CapitalResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->capitalable->name,
            'slug' => $this->capitalable->slug,
            'provincia' => ProvinceResource::make($this->whenLoaded('province')),
        ];
    }
}
