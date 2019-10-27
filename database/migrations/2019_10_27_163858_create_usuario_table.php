<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email');
            $table->string('senha');
            $table->string('cpf');
            $table->string('nomecompleto');
            $table->date('datanascimento');
            $table->string('sexo');
            $table->string('telefone');
            $table->string('endereço');
            $table->unsignedBigInteger('jogos_id');
            $table->foreign('jogos_id')->references('id')->on('jogos');
            $table->string('foto');
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
        Schema::dropIfExists('usuarios');
    }
}
