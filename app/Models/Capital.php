<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capital extends Model
{
    use HasFactory;
    protected $table = 'capitais';
    protected $fillable = ['nome','provincia_id'];
    protected $hidden = ['id','created_at','updated_at'];

    public function provincia(){
        return $this->hasOne(Provincia::class);
    }

}
