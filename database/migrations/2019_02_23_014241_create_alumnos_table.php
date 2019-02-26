<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno');
            $table->string('no_control');
            $table->string('estatura');
            $table->string('peso');
            $table->string('curp');
            $table->string('fecha_nacimiento');
            $table->string('sexo');
            $table->string('edad');
            $table->string('lugar_nacimiento');
            $table->string('domicilio');
            $table->string('telefono');
            $table->string('codigo_postal');
            $table->timestamps();

            $table->integer('grupo_id')->unsigned();
            $table->foreign('grupo_id')->references('id')->on('grupos')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
