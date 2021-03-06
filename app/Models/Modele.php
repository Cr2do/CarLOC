<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

    public function marque(){
        return $this->belongsTo(Marque::class);
    }

    public function voitures(){
        return $this->hasMany(Voiture::class);
    }
}
