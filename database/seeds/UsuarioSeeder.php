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
            'genero' => 'papu',
            'pais' => 'Costa Rica',
            'lenguaje' => 'español'
        ]);
    }
}
