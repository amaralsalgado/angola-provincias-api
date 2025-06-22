<?php

namespace App\Models;

use App\Models\Provincia;
use App\Models\Comuna;
use App\Models\destrito;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $fillable = ['nome', 'slug', 'provincia_id'];
    protected $hidden = ['id', 'provincia_id', 'created_at', 'updated_at'];

    public function provincia(): BelongsTo{
        return $this->belongsTo(Provincia::class);
    }

    public function comunas(): HasMany{
        return $this->hasMany(Comuna::class);
    }

    public function distritos(): HasMany{
        return $this->hasMany(Distrito::class);
    }
}
