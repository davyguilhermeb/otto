<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alvos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('criado_por');
            $table->string('endereco');
            $table->text('google_maps');
            $table->string('img');
            $table->integer('status'); //0 - aguardando aprovar, 1 - aprovado
            $table->integer('publico'); //0 - nao, 1 - sim (mostrar em resultados ou nao)
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
        Schema::dropIfExists('alvos');
    }
}
