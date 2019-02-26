<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('grupo');
            $table->timestamps();

            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')->references('id')->on('carreras')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('ejercicio_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
