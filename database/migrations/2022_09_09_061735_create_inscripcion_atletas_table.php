<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscripcionAtletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcion_atletas', function (Blueprint $table) {
            $table->increments('id_inscripcion_atletas');
            $table->string('type_document');
            $table->string('nationality');
            $table->string('identification');
            $table->string('name');
            $table->string('lastname');
            $table->string('gender');
            $table->string('datebirth');
            $table->string('state');
            $table->string('municipality');
            $table->string('parish');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('recordtime');
            $table->string('reducedmobility')->nullable();
            $table->string('category');
            $table->string('size');
            $table->string('runnigclub')->nullable();
            $table->string('accountholder');
            $table->string('accountidentification');
            $table->string('datepay');
            $table->string('bank');
            $table->string('reference');
            $table->string('amount');
            $table->string('accountphone');
            $table->boolean('terms');
            $table->string('aproved')->default('pending');
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
        Schema::dropIfExists('inscripcion_atletas');
    }
}
