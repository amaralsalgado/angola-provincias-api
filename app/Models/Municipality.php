<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipality extends Model
{
    use HasFactory;

    protected $table = 'municipalities';
    protected $fillable = ['name', 'slug', 'province_id'];
    protected $hidden = ['id', 'province_id', 'created_at', 'updated_at'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function communes(): HasMany
    {
        return $this->hasMany(Commune::class);
    }

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
