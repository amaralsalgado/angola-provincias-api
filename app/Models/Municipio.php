<?php

namespace App\Models;

use App\Models\Provincia;
use App\Models\Comuna;
use App\Models\destrito;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $fillable = ['nome','provincia_id'] ;
    protected $hidden = ['id','provincia_id','created_at','updated_at'];

    public function provincia(){
        return $this->belongsTo(Provincia::class);
    }

    public function comunas(){
        return $this->hasMany(Comuna::class);
    }

    public function distritos(){
        return $this->hasMany(Distrito::class);
    }
}
