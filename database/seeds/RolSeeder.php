<?php

use Illuminate\Database\Seeder;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
            'nombre' => 'Administrador',
            'estado' => true,
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Moderator',
            'estado' => true,
        ]);

        DB::table('rol')->insert([
            'nombre' => 'Profesor',
            'estado' => true,
        ]);
        DB::table('rol')->insert([
            'nombre' => 'Student',
            'estado' => true,
        ]);
    }
}
