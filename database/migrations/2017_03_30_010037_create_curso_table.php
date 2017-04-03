<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function(Blueprint $table){
            $table->increments('id_curso');
            $table->string('nombre', 100);
            $table->string('descripcion', 2000);
            $table->integer('duracion');
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->boolean('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');

    }
}
