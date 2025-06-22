<?php

namespace App\Models;

use app\Models\Provincia;
use app\Models\Etnia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etnia_Provincia extends Model
{
    use HasFactory;

    protected $table = 'etnia_provincia';
    protected $fillable = ['etnia_id','provincia_id'];
    protected $hidden = ['pivot','etnia_id','provincia_id','id','created_at','updated_at'];

    public function provincias(): BelongsTo{
        return $this->belongsTo(Provincia::class);
    }

    public function etnias(): BelongsTo{
        return $this->belongsTo(Etnia::class);
    }

}
