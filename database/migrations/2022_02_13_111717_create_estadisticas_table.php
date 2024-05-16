<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadisticasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estadisticas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_equipo');
            $table->integer('P_jugados');
            $table->integer('P_ganados');
            $table->integer('P_perdidos');
            $table->integer('P_empatados');
            $table->integer('G_favor');
            $table->integer('G_contra');
            $table->integer('G_diferencia');
            $table->integer('puntos');
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
        Schema::dropIfExists('estadisticas');
    }
}