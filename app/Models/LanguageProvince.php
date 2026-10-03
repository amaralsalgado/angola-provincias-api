<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LanguageProvince extends Model
{
    use HasFactory;

    protected $table = 'language_province';
    protected $fillable = ['language_id', 'province_id'];
    protected $hidden = ['pivot', 'language_id', 'province_id', 'id', 'created_at', 'updated_at'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }
}
