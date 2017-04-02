<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function(Blueprint $table){
            $table->increments('id_historial');
            $table->integer('usuario')->unsigned();
            $table->timestamp('fecha_ultimo_ingreso')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('ip',20);
            $table->string('os',10);
            $table->string('navegador',20);
        });

        Schema::table('historial', function(Blueprint $table){
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
        Schema::dropIfExists('historial');
    }
}
