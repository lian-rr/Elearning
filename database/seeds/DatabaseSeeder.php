<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsuarioSeeder::class);
         $this->call(RolSeeder::class);
         $this->call(UsuarioRoleSeeder::class);
         $this->call(CursoSeeder::class);
         $this->call(MatriculaSeeder::class);
    }
}
