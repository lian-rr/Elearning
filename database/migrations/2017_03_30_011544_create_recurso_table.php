<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso', function(Blueprint $table){
            $table->increments('id_recurso');
            $table->string('nombre',30);
            $table->string('url', 255);
            $table->integer('tipo_recurso')->unsigned();
            $table->integer('recurso_padre')->unsigned()->nullable();
            $table->boolean('visible');
            $table->integer('secuencia');
            $table->string('notas',100);
            $table->boolean('estado');
            $table->integer('semana');
        });

        Schema::table('recurso', function(Blueprint $table){
            $table->foreign('tipo_recurso')->references('id_tipo_recurso')->on('tipo_recurso');
            $table->foreign('recurso_padre')->references('id_recurso')->on('recurso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso');
        
    }
}
