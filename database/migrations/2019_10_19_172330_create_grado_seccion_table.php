<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradoSeccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_seccion', function (Blueprint $table) {
            $table->bigIncrements('id');
            //relaciones
            $table->unsignedBigInteger('grado_id');
            $table->foreign('grado_id')->references('id')->on('grado');
            $table->unsignedBigInteger('seccion_id');
            $table->foreign('seccion_id')->references('id')->on('seccion');
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
        Schema::dropIfExists('grado_seccion');
    }
}
