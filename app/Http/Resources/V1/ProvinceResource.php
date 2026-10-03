<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->name,
            'slug' => $this->slug,
            'extensao' => $this->area,
            'data_fundacao' => $this->founded_at->format('d-m-Y'),
            'capital' => $this->whenLoaded('capital', fn () => LocationResource::make($this->capital?->capitalable)),
            'municipios' => MunicipalityResource::collection($this->whenLoaded('municipalities')),
            'etnias' => EthnicGroupResource::collection($this->whenLoaded('ethnicGroups')),
            'linguas' => LanguageResource::collection($this->whenLoaded('languages')),
        ];
    }
}
