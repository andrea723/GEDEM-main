<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_familias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_datosp');
            $table->string('nomFami');
            $table->string('apeFami');
            $table->string('naciFami');
            $table->string('ceduFami');
            $table->string('parenteso');
            $table->string('nroTelef');
            $table->string('indigena');
            $table->string('observaciones');
            $table->foreign("id_datosp")
                    ->references("id")
                    ->on("datosps")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dato_familias');
    }
}
