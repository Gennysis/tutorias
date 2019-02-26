<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosEjerciciosRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos_respuestas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->integer('alumno_id')->unsigned();
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('respuesta_id')->unsigned();
            $table->foreign('respuesta_id')->references('id')->on('respuestas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos_respuestas');
    }
}
