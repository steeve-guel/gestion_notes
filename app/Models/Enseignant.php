<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Enseignant extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'code',
        'nom',
        'prenom',
        'email',
        'telephone',
        'grade'
    ];

    public function formations():BelongsToMany
    {
        return $this->belongsToMany(Formation::class, 'formations_enseignants');
    }
    public function cours():BelongsToMany
    {
        return $this->belongsToMany(Cours::class, 'cours_enseignants');
    }

    public function notes():HasMany
    {
        return $this->hasMany(Note::class);
    }
}
