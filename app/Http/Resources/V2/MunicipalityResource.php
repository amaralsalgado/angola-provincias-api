<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipalityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'districts' => DistrictResource::collection($this->whenLoaded('districts')),
            'communes' => CommuneResource::collection($this->whenLoaded('communes')),
            'province' => ProvinceResource::make($this->whenLoaded('province')),
        ];
    }
}
