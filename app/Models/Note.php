<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'note',
        'typeControl',
        'dateControl',
        'appreciation',
        'etudiant_id',
        'cours_id',
        'enseignant_id'
    ];

    public function etudiant(): BelongsTo
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function cours(): BelongsTo
    {
        return $this->belongsTo(Cours::class);
    }

    public function enseignants(): BelongsTo
    {
        return $this->belongsTo(Enseignant::class);
    }
}
