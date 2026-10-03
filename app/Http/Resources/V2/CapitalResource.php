<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CapitalResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->capitalable->name,
            'slug' => $this->capitalable->slug,
            'province' => ProvinceResource::make($this->whenLoaded('province')),
        ];
    }
}
