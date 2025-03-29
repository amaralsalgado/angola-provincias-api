<?php

namespace App\Models;

use App\Models\Municipio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comunas';
    protected $fillable = ['nome','municipio_id'];
    protected $hidden = ['id','municipio_id','created_at','updated_at'];

    public function municipio(){
        return $this->belongsTo(Municipio::class);
    }
}
