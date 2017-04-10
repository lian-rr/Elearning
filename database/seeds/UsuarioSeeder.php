<?php

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
           'nombre' => 'Administrador',
            'email' => 'admin@admin.ad',
            'password' => bcrypt('1234'),
            'genero' => 'male',
            'pais' => 'Costa Rica',
            'lenguaje' => 'español'
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Student',
            'email' => 'est@est.es',
            'password' => bcrypt('1234'),
            'genero' => 'female',
            'pais' => 'Costa Rica',
            'lenguaje' => 'español'
        ]);
    }
}
