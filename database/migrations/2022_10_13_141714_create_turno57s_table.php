<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turno57s', function (Blueprint $table) {
            $table->id();
            $table->string('DocumentoID');
            $table->string('Titulo');
            $table->string('Operacion');
            $table->string('Descripcion');
            $table->string('#');
            $table->string('Ruta');
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
        Schema::dropIfExists('turno57s');
    }
};
