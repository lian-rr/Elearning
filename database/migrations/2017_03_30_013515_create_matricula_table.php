<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula', function(Blueprint $table){
            $table->increments('id_matricula');
            $table->integer('periodo');
            $table->integer('ano');
            $table->integer('curso')->unsigned();
            $table->integer('usuario')->unsigned();
            $table->timestamp('fecha_matricula');
        });
        
        Schema::table('matricula', function(Blueprint $table){
            $table->foreign('curso')->references('id_curso')->on('curso');
            $table->foreign('usuario')->references('id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matricula');

    }
}
