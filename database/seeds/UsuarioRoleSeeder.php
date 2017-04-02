<?php

use Illuminate\Database\Seeder;

class UsuarioRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_rol')->insert([
            'usuario' => 1,
            'rol' => 1,
            'estado' => true,
        ]);
    }
}
