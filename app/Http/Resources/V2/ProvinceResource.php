<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProvinceResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'area' => $this->area,
            'founded_at' => $this->founded_at->toDateString(),
            'capital' => $this->whenLoaded('capital', fn () => LocationResource::make($this->capital?->capitalable)),
            'municipalities' => MunicipalityResource::collection($this->whenLoaded('municipalities')),
            'ethnic_groups' => EthnicGroupResource::collection($this->whenLoaded('ethnicGroups')),
            'languages' => LanguageResource::collection($this->whenLoaded('languages')),
        ];
    }
}
