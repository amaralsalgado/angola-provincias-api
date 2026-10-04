<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Province extends Model
{
    use HasFactory;

    protected $table = 'provinces';

    protected $fillable = ['name', 'slug', 'area', 'founded_at'];

    protected $hidden = ['id', 'created_at', 'updated_at', 'pivot'];

    protected function casts(): array
    {
        return [
            'area' => 'integer',
            'founded_at' => 'date:d-m-Y',
        ];
    }

    public function capital(): HasOne
    {
        return $this->hasOne(Capital::class);
    }

    public function municipalities(): HasMany
    {
        return $this->hasMany(Municipality::class);
    }

    public function communes(): HasManyThrough
    {
        return $this->hasManyThrough(Commune::class, Municipality::class);
    }

    public function districts(): HasManyThrough
    {
        return $this->hasManyThrough(District::class, Municipality::class);
    }

    public function languages(): BelongsToMany
    {
        return $this->belongsToMany(Language::class)->orderByPivot('id');
    }

    public function ethnicGroups(): BelongsToMany
    {
        return $this->belongsToMany(EthnicGroup::class)->orderByPivot('id');
    }
}
