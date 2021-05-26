<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            'nom' => 'VBrussels',
            'ville' => 'brussels',
            'pays' => 'Belgique',
            'max' => 9,
            'ATT' => 2 ,
            'DC' => 2,
            'CT' => 2,
            'RP' => 3,
            'continent_id' => 1,
        ]);

        DB::table('equipes')->insert([
            'nom' => 'VAnvers',
            'ville' => 'Anvers',
            'pays' => 'Belgique',
            'max' => 9,
            'ATT' => 2 ,
            'DC' => 2,
            'CT' => 2,
            'RP' => 3,
            'continent_id' => 1,
        ]);

        DB::table('equipes')->insert([
            'nom' => 'VGenk',
            'ville' => 'Genk',
            'pays' => 'Belgique',
            'max' => 9,
            'ATT' => 2 ,
            'DC' => 2,
            'CT' => 2,
            'RP' => 3,
            'continent_id' => 1,
        ]);

        DB::table('equipes')->insert([
            'nom' => 'VHalle',
            'ville' => 'Halle',
            'pays' => 'Belgique',
            'max' => 9,
            'ATT' => 2 ,
            'DC' => 2,
            'CT' => 2,
            'RP' => 3,
            'continent_id' => 1,
        ]);

        DB::table('equipes')->insert([
            'nom' => 'VEnghien',
            'ville' => 'Enghien',
            'pays' => 'Belgique',
            'max' => 9,
            'ATT' => 2 ,
            'DC' => 2,
            'CT' => 2,
            'RP' => 3,
            'continent_id' => 1,
        ]);
    }
}
