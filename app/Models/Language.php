<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Language extends Model
{
    use HasFactory;

    protected $table = 'languages';
    protected $fillable = ['name', 'slug'];
    protected $hidden = ['id', 'created_at', 'updated_at', 'pivot'];

    public function provinces(): BelongsToMany
    {
        return $this->belongsToMany(Province::class)->orderByPivot('id');
    }
}
