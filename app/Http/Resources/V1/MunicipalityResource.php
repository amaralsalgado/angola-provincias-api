<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MunicipalityResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'nome' => $this->name,
            'slug' => $this->slug,
            'distritos' => DistrictResource::collection($this->whenLoaded('districts')),
            'comunas' => CommuneResource::collection($this->whenLoaded('communes')),
            'provincia' => ProvinceResource::make($this->whenLoaded('province')),
        ];
    }
}
