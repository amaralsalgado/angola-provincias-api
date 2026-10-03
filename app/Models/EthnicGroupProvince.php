<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EthnicGroupProvince extends Model
{
    use HasFactory;

    protected $table = 'ethnic_group_province';
    protected $fillable = ['ethnic_group_id', 'province_id'];
    protected $hidden = ['pivot', 'ethnic_group_id', 'province_id', 'id', 'created_at', 'updated_at'];

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class);
    }

    public function ethnicGroup(): BelongsTo
    {
        return $this->belongsTo(EthnicGroup::class);
    }
}
