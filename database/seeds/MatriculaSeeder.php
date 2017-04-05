<?php

use Illuminate\Database\Seeder;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matricula')->insert([
            'periodo' => 1,
            'ano' => 2017,
            'curso' => 1,
            'usuario' => 1,
            'nota' => 98,
        ]);
    }
}
