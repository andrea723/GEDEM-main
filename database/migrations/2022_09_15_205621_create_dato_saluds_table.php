<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatoSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dato_saluds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_datosp');
            $table->string('presEmbarazo');
            $table->string('espeEmba');
            $table->string('evaluadoMedicoForen');
            $table->string('espeForen');
            $table->string('presentaHeridas');
            $table->string('espeHeri');
            $table->string('poseeTrataMedico');
            $table->string('espeTratamiento');
            $table->string('poseEnferGeneral');
            $table->string('espeEnfeGeneral');
            $table->string('poseEnferesPecífica');
            $table->string('espeEnfeEsPecífica');
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
        Schema::dropIfExists('dato_saluds');
    }
}
