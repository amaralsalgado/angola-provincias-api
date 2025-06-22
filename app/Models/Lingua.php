<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Lingua extends Model
{
    use HasFactory;

    protected $table = 'linguas';
    protected $fillable = ['nome', 'slug'];
    protected $hidden = ['pivot','id','created_at','updated_at'];


    public function provincias(): BelongsToMany{
        return $this->belongsToMany(Provincia::class);
    }
}
