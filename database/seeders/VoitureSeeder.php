<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class VoitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('voitures')->insert([
            [
                'modele_id' =>'1',
                'image' => 'image/Chevrolet/camaro.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 2020,
                'etat' => 'Neuf',
                'poids_vide' => 2090,
                'places' => 4,
                'daily_price' => 4900
            ],
            [
                'modele_id' =>'2',
                'image' => 'image/Chevrolet/spark.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 550,
                'etat' => 'Pas trop Neuf',
                'poids_vide' => 80,
                'places' => 2,
                'daily_price' => 5000
            ],
            [
                'modele_id' =>'4',
                'image' => 'image/Mercedes/benz.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 520,
                'etat' => 'Neuf',
                'poids_vide' => 90,
                'places' => 4,
                'daily_price' => 10000
            ],
            [
                'modele_id' =>'6',
                'image' => 'image/Mercedes/mercedes-amg.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 820,
                'etat' => 'Neuf plus',
                'poids_vide' => 200,
                'places' => 4,
                'daily_price' => 1000
            ],
            [
                'modele_id' =>'8',
                'image' => 'image/RR/luxury.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 123,
                'etat' => 'Neuf',
                'poids_vide' => 90,
                'places' => 4,
                'daily_price' => 10000
            ],
            [
                'modele_id' =>'9',
                'image' => 'image/RR/wraith.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 1500,
                'etat' => 'Neuf',
                'poids_vide' => 33,
                'places' => 2,
                'daily_price' => 31000
            ],
            [
                'modele_id' =>'10',
                'image' => 'image/TOYOTA/4runner.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 979,
                'etat' => 'Neuf',
                'poids_vide' => 55,
                'places' => 4,
                'daily_price' => 5500
            ],
            [
                'modele_id' =>'11',
                'image' => 'image/TOYOTA/avensis.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 1000,
                'etat' => 'Neuf',
                'poids_vide' => 66,
                'places' => 4,
                'daily_price' => 9000
            ],
            [
                'modele_id' =>'12',
                'image' => 'image/TOYOTA/corolla.jpg',
                'immatriculation' => \Illuminate\Support\Str::random(7),
                'puissance' => 500,
                'etat' => 'Neuf',
                'poids_vide' => 40,
                'places' => 4,
                'daily_price' => 6000
            ]
        ]);
    }
}
