<?php

namespace App\Services;

use App\Exceptions\ResourceNotFoundException;
use App\Models\Commune;
use App\Models\District;
use App\Models\EthnicGroup;
use App\Models\Language;
use App\Models\Municipality;
use App\Models\Province;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class ProvinceService
{
    public function all(): Collection
    {
        return Province::with($this->fullRelations())->get();
    }

    /**
     * Provinces with their capital, without the municipalities, ethnic groups and languages.
     */
    public function getAllWithCapital(): Collection
    {
        return Province::with('capital.capitalable')->orderBy('id')->get();
    }

    /**
     * The details of a province: its capital and the number of municipalities, communes, districts, ethnic groups and languages it has.
     */
    public function getProvinceDetails(string $slug): Province
    {
        return Province::with('capital.capitalable')
            ->withCount(['municipalities', 'communes', 'districts', 'ethnicGroups', 'languages'])
            ->where('slug', $slug)
            ->first()
            ?? throw new ResourceNotFoundException('province');
    }

    public function find(string $slug): Province
    {
        return $this->findBySlug($slug, $this->fullRelations());
    }

    public function ethnicGroups(string $province): Collection
    {
        return $this->findBySlug($province)->ethnicGroups;
    }

    public function ethnicGroup(string $province, string $ethnicGroup): EthnicGroup
    {
        return $this->findBySlug($province)->ethnicGroups()->where('slug', $ethnicGroup)->first()
            ?? throw new ResourceNotFoundException('ethnic_group');
    }

    public function languages(string $province): Collection
    {
        return $this->findBySlug($province)->languages;
    }

    public function language(string $province, string $language): Language
    {
        return $this->findBySlug($province)->languages()->where('slug', $language)->first()
            ?? throw new ResourceNotFoundException('language');
    }

    public function municipalities(string $province): Collection
    {
        return $this->findBySlug($province)->municipalities;
    }

    public function municipality(string $province, string $municipality): Municipality
    {
        return $this->findBySlug($province)->municipalities()->where('slug', $municipality)->first()
            ?? throw new ResourceNotFoundException('municipality');
    }

    public function capital(string $province): Model
    {
        $capital = $this->findBySlug($province, ['capital.capitalable'])->capital?->capitalable;

        return $capital ?? throw new ResourceNotFoundException('capital');
    }

    /**
     * The communes of all the municipalities of a province, each with its municipality.
     */
    public function getProvinceCommunes(string $slug): Collection
    {
        return $this->findBySlug($slug)->communes()->with('municipality')->orderBy('communes.id')->get();
    }

    public function communes(string $province, string $municipality): Collection
    {
        return $this->municipality($province, $municipality)->communes;
    }

    public function commune(string $province, string $municipality, string $commune): Commune
    {
        return $this->municipality($province, $municipality)->communes()->where('slug', $commune)->first()
            ?? throw new ResourceNotFoundException('commune');
    }

    public function districts(string $province, string $municipality): Collection
    {
        return $this->municipality($province, $municipality)->districts;
    }

    public function district(string $province, string $municipality, string $district): District
    {
        return $this->municipality($province, $municipality)->districts()->where('slug', $district)->first()
            ?? throw new ResourceNotFoundException('district');
    }

    private function findBySlug(string $slug, array $with = []): Province
    {
        return Province::where('slug', $slug)->with($with)->first()
            ?? throw new ResourceNotFoundException('province');
    }

    private function fullRelations(): array
    {
        return ['capital.capitalable', 'municipalities.districts', 'municipalities.communes', 'ethnicGroups', 'languages'];
    }
}
