<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrendasVestirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prendas_vestirs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_datosp');
            $table->string('poseecamisa');
            $table->string('poseepantalon');
            $table->string('poseezapatos');
            $table->string('tallazapatos');
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
        Schema::dropIfExists('prendas_vestirs');
    }
}
