<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_treinos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_treino');
            $table->integer('registro');
            $table->integer('id_ideograma');
            $table->integer('id_adj_ideograma');
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
        Schema::dropIfExists('registro_treinos');
    }
}
