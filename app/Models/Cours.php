<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'code',
        'intitule'
    ];

    public function unite_ens(): BelongsToMany
    {
        return $this->belongsToMany(UniteEns::class, 'unite_ens_cours')->withPivot(
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

    public function enseignants()
    {
        return $this->hasMany(Enseignant::class,'cours_enseignants');
    }
}
