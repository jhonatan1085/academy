<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMatriculaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_matricula', function (Blueprint $table) {
            $table->bigIncrements('id');
            //relaciones
            $table->unsignedBigInteger('matricula_id');
            $table->foreign('matricula_id')->references('id')->on('matricula');
            $table->unsignedBigInteger('grado_seccion_id');
            $table->foreign('grado_seccion_id')->references('id')->on('grado_seccion');
            $table->unsignedBigInteger('anio_academico_id');
            $table->foreign('anio_academico_id')->references('id')->on('anio_academico');
            $table->unsignedBigInteger('nivel_academico_id');
            $table->foreign('nivel_academico_id')->references('id')->on('nivel_academico');
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
        Schema::dropIfExists('detalle_matricula');
    }
}
