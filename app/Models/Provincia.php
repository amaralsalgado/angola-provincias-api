<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincias';
    protected $fillable = ['nome', 'slug', 'extensao', 'data_fundacao', 'capital_id'];
    protected $hidden = ['id', 'capital_id', 'created_at', 'updated_at', 'pivot'];

    protected function casts(): array
    {
        return [
            'data_fundacao' => 'date:d-m-Y'
        ];
    }

    public function capital()
    {
        return $this->hasOne(Capital::class, 'id', 'capital_id');
    }

    public function municipios()
    {
        return $this->hasMany(Municipio::class);
    }

    public function linguas()
    {
        return $this->belongsToMany(Lingua::class);
    }

    public function etnias()
    {
        return $this->belongsToMany(Etnia::class);
    }
}
