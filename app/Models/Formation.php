<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Formation extends Model
{
    //
    use HasFactory;

    protected $fillable=['code','domaine','mention','description','grade','specialite'];

    public function unite_ens():HasMany{
        return $this->hasMany(UniteEns::class);
    }
}
