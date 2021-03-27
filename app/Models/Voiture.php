<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;

    protected $fillable = [
        'immatriculation',
        'puissance',
        'etat',
        'poids_vide',
        'places',
        'daily_price'
    ];

    public function modele(){
        return $this->belongsTo(Modele::class);
    }

    public function locations(){
        return $this->hasMany(Location::class);
    }
}
