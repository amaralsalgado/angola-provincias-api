<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etnia extends Model
{
    use HasFactory;

    protected $table = 'etnias';

    protected $fillable = ['nome'];

    protected $hidden = ['id','created_at','updated_at','pivot'];

    public function provincias(){
        return $this->belongsToMany(Provincia::class);
    }
}
