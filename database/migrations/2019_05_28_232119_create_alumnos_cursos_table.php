<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_curso', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('alumno_id');

            $table->foreign('alumno_id')
                ->references('id')->on('alumnos')
                ->onDelete('cascade');

            $table->unsignedInteger('curso_id');

            $table->foreign('curso_id')
                ->references('id')->on('cursos')
                ->onDelete('cascade');
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
        Schema::dropIfExists('alumnos_cursos');
    }
}
