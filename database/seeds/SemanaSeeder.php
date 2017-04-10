<?php

use Illuminate\Database\Seeder;

class SemanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semana')->insert([
            'tema' => 'Semana 1',
            'visible' => true,
            'estado' => true,
            'curso' => 1,
        ]);
        DB::table('semana')->insert([
            'tema' => 'Semana 2',
            'visible' => true,
            'estado' => true,
            'curso' => 1,
        ]);
        DB::table('semana')->insert([
            'tema' => 'Semana 3',
            'visible' => true,
            'estado' => true,
            'curso' => 1,
        ]);

        DB::table('semana')->insert([
            'tema' => 'Semana 1',
            'visible' => true,
            'estado' => true,
            'curso' => 2,
        ]);
        DB::table('semana')->insert([
            'tema' => 'Semana 2',
            'visible' => true,
            'estado' => true,
            'curso' => 2,
        ]);
        DB::table('semana')->insert([
            'tema' => 'Semana 3',
            'visible' => true,
            'estado' => true,
            'curso' => 2,
        ]);
    }
}
