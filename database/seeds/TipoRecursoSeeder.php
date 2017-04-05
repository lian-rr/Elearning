<?php

use Illuminate\Database\Seeder;

class TipoRecursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_recurso')->insert([
            'nombre' => 'Seccion'
        ]);

        DB::table('tipo_recurso')->insert([
            'nombre' => 'Etiqueta'
        ]);

        DB::table('tipo_recurso')->insert([
            'nombre' => 'Archivos'
        ]);

        DB::table('tipo_recurso')->insert([
            'nombre' => 'Pagina'
        ]);
    }
}
