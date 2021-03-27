<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModeleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modeles')->insert([
            [
                'marque_id' => '1',
                'name' => 'camaro'
            ],
            [
                'marque_id' => '1',
                'name' => 'spark'
            ],
            [
                'marque_id' => '1',
                'name' => 'suburban'
            ],
            [
                'marque_id' => '2',
                'name' => 'benz'
            ],
            [
                'marque_id' => '2',
                'name' => 'benz-2021'
            ],
            [
                'marque_id' => '2',
                'name' => 'mercedes-amg'
            ],
            [
                'marque_id' => '3',
                'name' => 'ghost'
            ],
            [
                'marque_id' => '3',
                'name' => 'luxury'
            ],
            [
                'marque_id' => '3',
                'name' => 'wraith'
            ],
            [
                'marque_id' => '4',
                'name' => '4runner'
            ],
            [
                'marque_id' => '4',
                'name' => 'avensis'
            ],
            [
                'marque_id' => '4',
                'name' => 'corolla'
            ],
            [
                'marque_id' => '4',
                'name' => 'supra'
            ]
        ]);
    }
}
