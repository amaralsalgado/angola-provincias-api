<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';
    protected $fillable = ['name', 'slug', 'municipality_id'];
    protected $hidden = ['id', 'municipality_id', 'created_at', 'updated_at'];

    public function municipality(): BelongsTo
    {
        return $this->belongsTo(Municipality::class);
    }
}
