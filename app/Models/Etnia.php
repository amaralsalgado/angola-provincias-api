<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Etnia extends Model
{
    use HasFactory;

    protected $table = 'etnias';

    protected $fillable = ['nome', 'slug'];

    protected $hidden = ['id','created_at','updated_at','pivot'];

    public function provincias(): BelongsToMany{
        return $this->belongsToMany(Provincia::class);
    }
}
