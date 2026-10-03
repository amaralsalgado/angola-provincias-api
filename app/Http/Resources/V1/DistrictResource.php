<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DistrictResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->name,
            'slug' => $this->slug,
            'municipio' => MunicipalityResource::make($this->whenLoaded('municipality')),
        ];
    }
}
