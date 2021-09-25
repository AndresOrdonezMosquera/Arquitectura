<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonsTable extends Migration
{
   
    public function up()
    {
        Schema::create('tipo_documento', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('nivel_educativo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('profesion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->timestamps();
        });
        Schema::create('persona', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('tipo_documento_id');
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documento');
            $table->unsignedBigInteger('nivel_educativo_id');
            $table->foreign('nivel_educativo_id')->references('id')->on('nivel_educativo');
            $table->unsignedBigInteger('profesion_id');
            $table->foreign('profesion_id')->references('id')->on('profesion');
            $table->string('codebar')->unique();
            $table->string('identificacion');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('email');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('persona');
        Schema::dropIfExists('profesion');
        Schema::dropIfExists('nivel_educativo');
        Schema::dropIfExists('tipo_documento');
    }
}
