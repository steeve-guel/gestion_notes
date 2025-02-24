<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UniteEns extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'code',
        'intitule',
        'credits',
        'niveau',
        'semestre',
        'formation_id'
    ];

    public function formations(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }
}
