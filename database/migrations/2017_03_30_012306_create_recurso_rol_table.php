<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecursoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurso_rol', function(Blueprint $table){
            $table->increments('id_recurso_rol');
            $table->integer('recurso')->unsigned();
            $table->integer('rol')->unsigned();
            $table->boolean('estado');
        });

        Schema::table('recurso_rol', function(Blueprint $table){
            $table->foreign('recurso')->references('id_recurso')->on('recurso');
            $table->foreign('rol')->references('id_rol')->on('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurso_rol');

    }
}
