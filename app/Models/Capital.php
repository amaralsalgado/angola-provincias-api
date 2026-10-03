<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Capital extends Model
{
    use HasFactory;

    protected $table = 'capitals';
    protected $fillable = ['province_id', 'capitalable_id', 'capitalable_type'];
    protected $hidden = ['id', 'capitalable', 'province_id', 'capitalable_id', 'capitalable_type', 'created_at', 'updated_at'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function capitalable(): MorphTo
    {
        return $this->morphTo();
    }
}
