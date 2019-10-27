<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJogoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('foto1');
            $table->string('foto2');
            $table->time('horario');
            $table->date('data');
            $table->unsignedBigInteger('time1');
            $table->unsignedBigInteger('time2');
            $table->unsignedBigInteger('estadio_id');
            $table->foreign('estadio_id')->references('id')->on('estadios');
            $table->foreign('time1')->references('id')->on('times');
            $table->foreign('time2')->references('id')->on('times');
            $table->text('localizacao');
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
        Schema::dropIfExists('jogos');
    }
}
