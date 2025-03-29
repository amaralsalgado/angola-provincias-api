<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lingua_Provincia extends Model
{
    use HasFactory;

    protected $table = 'lingua_provincia';
    protected $fillable = ['lingua_id','provincia_id'];
    protected $hidden = ['pivot','lingua_id','provincia_id','id','created_at','updated_at'];
}
