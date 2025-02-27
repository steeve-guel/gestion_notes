<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function formations()
    {
        return $this->belongsToMany(Formation::class, 'formations_enseignants');
    }
    public function cours()
    {
        return $this->belongsToMany(Cours::class, 'cours_enseignants');
    }
}
