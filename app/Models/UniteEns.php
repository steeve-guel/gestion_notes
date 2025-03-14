<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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

    public function cours(): BelongsToMany
    {
        return $this->belongsToMany(Cours::class, 'unite_ens_cours')->withPivot(
            'coeff',
            'coursMagistral',
            'tDiriges',
            'tPratiques',
            'tPersEtudiant',
            'volmHoraireTPers',
            'created_at',
            'updated_at'
        );
    }
}
