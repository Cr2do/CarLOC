<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marques')->insert([
           [
               'name' => 'Chevrolet',
               'logo' => 'image/Chevrolet/logo.jpg'
           ],
            [
                'name' => 'MERCEDES',
                'logo' => 'image/Mercedes/Logo.jpg'
            ],
            [
                'name' => 'ROLL ROYCE',
                'logo' => 'image/RR/logo.jpg'
            ],
            [
                'name' => 'TOYOTA',
                'logo' => 'image/TOYOTA/logo.png'
            ]
        ]);
    }
}
