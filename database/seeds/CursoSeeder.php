<?php

use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('curso')->insert([
            'nombre' => 'Machine Learning',
            'duracion' => 12,
            'fecha_inicio' => date('Y-m-d', mktime(0,0,0,5,31,2017)),
            'fecha_final' => date('Y-m-d', mktime(0,0,0,8,30,2017)),
            'estado' => true
        ]);
    }
}
