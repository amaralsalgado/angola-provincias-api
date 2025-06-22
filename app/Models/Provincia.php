<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    protected $fillable = ['nome', 'slug', 'extensao', 'data_fundacao',];
    protected $hidden = ['id', 'created_at', 'updated_at', 'pivot'];

    protected function casts(): array
    {
        return [
            'data_fundacao' => 'date:d-m-Y'
        ];
    }

    public function capital(): HasOne
    {
        return $this->hasOne(Capital::class);
    }

    public function municipios(): HasMany
    {
        return $this->hasMany(Municipio::class);
    }

    public function linguas(): BelongsToMany
    {
        return $this->belongsToMany(Lingua::class);
    }

    public function etnias(): BelongsToMany
    {
        return $this->belongsToMany(Etnia::class);
    }
}
