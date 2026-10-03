<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LanguageResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->name,
            'slug' => $this->slug,
            'provincias' => ProvinceResource::collection($this->whenLoaded('provinces')),
        ];
    }
}
