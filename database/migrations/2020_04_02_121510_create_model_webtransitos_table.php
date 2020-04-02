<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelWebtransitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->string('matricula');
            $table->string('nome_agente');
            $table->string('placa');
            $table->string('marca');
            $table->string('modelo');
            $table->string('cor');
            $table->string('chassi');
            $table->string('pais');
            $table->string('especie');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aits');
    }
}
