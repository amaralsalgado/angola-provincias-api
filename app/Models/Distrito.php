<?php

namespace App\Models;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Distrito extends Model
{
    use HasFactory;

    protected $table = 'distritos';
    protected $fillable = ['nome', 'slug', 'municipio_id'];
    protected $hidden = ['id','municipio_id','created_at','updated_at'];


    public function municipio(): BelongsTo{
        return $this->belongsTo(Municipio::class);
    }
}
