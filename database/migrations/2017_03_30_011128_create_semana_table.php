<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSemanaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semana', function(Blueprint $table){
            $table->increments('id_semana');
            $table->string('tema',30);
            $table->boolean('visible');
            $table->boolean('estado');
            $table->integer('curso')->unsigned();
        });

        Schema::table('semana', function(Blueprint $table){
            $table->foreign('curso')->references('id_curso')->on('curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('semana');

    }
}
