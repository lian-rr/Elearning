<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_rol', function(Blueprint $table){
            $table->increments('id_curso_rol');
            $table->integer('curso')->unsigned();
            $table->integer('rol')->unsigned();
        });

        Schema::table('curso_rol', function(Blueprint $table){
            $table->foreign('curso')->references('id_curso')->on('curso');
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
        Schema::dropIfExists('curso_rol');

    }
}
