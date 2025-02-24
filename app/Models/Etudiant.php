<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'ine',
        'nom',
        'prenom',
        'lieuNaiss',
        'dateNaiss',
        'formation_id'
    ];

    public function formations(): BelongsTo
    {
        return $this->belongsTo(Formation::class);
    }
}
