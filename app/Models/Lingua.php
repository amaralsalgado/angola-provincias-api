<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingua extends Model
{
    use HasFactory;

    protected $table = 'linguas';
    protected $fillable = ['nome'] ;
    protected $hidden = ['pivot','id','created_at','updated_at'];


    public function provincias(){
        return $this->belongsToMany(Provincia::class);
    }
}
