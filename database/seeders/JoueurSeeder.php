<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('joueurs')->insert([
            'nom' => 'blkf',
            'prenom' => 'Amine',
            'age' => 21,
            'numero' => 9,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'mmm',
            'prenom' => 'Mahah',
            'age' => 24,
            'numero' => 10,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'frfr',
            'prenom' => 'Salim',
            'age' => 23,
            'numero' => 11,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'vvvf',
            'prenom' => 'Bilal',
            'age' => 25,
            'numero' => 12,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'vfvf',
            'prenom' => 'Said',
            'age' => 31,
            'numero' => 13,
            'pays' => 'Belgique',
            'genre_id' => 2,
            'role_id' => 2,
            'equipe_id' => 3
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'vrvr',
            'prenom' => 'Elias',
            'age' => 26,
            'numero' => 15,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 2,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'vezv',
            'prenom' => 'Antoine',
            'age' => 33,
            'numero' => 16,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 1
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'flefl',
            'prenom' => 'Gauhier',
            'age' => 21,
            'numero' => 20,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 3
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'llrlrl',
            'prenom' => 'Yassine',
            'age' => 29,
            'numero' => 18,
            'pays' => 'Belgique',
            'genre_id' => 2,
            'role_id' => 1,
            'equipe_id' => 4
        ]);

        DB::table('joueurs')->insert([
            'nom' => 'kkkk',
            'prenom' => 'Cem',
            'age' => 30,
            'numero' => 19,
            'pays' => 'Belgique',
            'genre_id' => 1,
            'role_id' => 1,
            'equipe_id' => 4
        ]);


    
    }
}