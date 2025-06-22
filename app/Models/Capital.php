<?php

namespace App\Models;

use App\Models\Provincia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Capital extends Model
{
    use HasFactory;
    protected $table = 'capitais';
    protected $fillable = ['provincia_id', 'capitalable_id','capitalable_type'];
    protected $hidden = ['id','capitalable','provincia_id', 'capitalable_id','capitalable_type', 'created_at', 'updated_at'];

    public function provincia(): BelongsTo{
        return $this->belongsTo(Provincia::class);
    }

    public function capitalable(): MorphTo{
        return $this->morphTo();
    }

}
