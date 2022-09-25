<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatospsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datosps', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('type_document');
            $table->string('nationality');
            $table->string('cedula');
            $table->string('country');
            $table->string('placeBirth');
            $table->string('maritalStatus');
            $table->string('dateBirth');
            $table->string('civilState');
            $table->string('sexualOrigin');
            $table->string('anotherOrientation');
            $table->string('otraOrientation');
            $table->string('particularSigns');
            $table->string('instructionLevel');
            $table->string('instructionStatus');
            $table->string('occupation');
            $table->string('laborSkills');
            $table->string('numberChildren');
            $table->string('region');
            $table->string('municipality');
            $table->string('parroquia');
            $table->string('direction');
            $table->rememberToken();
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
        Schema::dropIfExists('datosps');
    }
}
