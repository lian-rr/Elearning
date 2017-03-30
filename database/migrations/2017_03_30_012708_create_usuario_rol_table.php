<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rol', function(Blueprint $table){
            $table->increments('id_usuario_rol');
            $table->integer('usuario')->unsigned();
            $table->integer('rol')->unsigned();
            $table->boolean('estado');
        });

        Schema::table('usuario_rol', function(Blueprint $table){
            $table->foreign('usuario')->references('id_usuario')->on('usuario');
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
        Schema::dropIfExist('usuario_rol');

    }
}
