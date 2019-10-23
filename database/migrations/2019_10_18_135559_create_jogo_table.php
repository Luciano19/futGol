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
        Schema::create('jogo', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->string('time1'); 
            $table->string('time2'); 
            $table->string('foto1');
            $table->string('foto2');
            $table->DateTime('horario');
            $table->date('data');
            $table->BigInteger('estadio_id');
            $table->foreign('estadio_id')->references('id')->on('estadio');
            $table->text('localização');
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
        Schema::dropIfExists('jogo');
    }
}
