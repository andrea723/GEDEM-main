<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallasGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallas_generals', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_datosp');
            $table->string('pesoKilo');
            $table->string('tallaCamisa');
            $table->string('tallaPantalon');
            $table->string('tallaZapatos');
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
        Schema::dropIfExists('tallas_generals');
    }
}
