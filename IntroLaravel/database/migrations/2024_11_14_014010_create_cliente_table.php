<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',150);
            $table->string('apellido');
            $table->string('correo');
            $table->string('telefono',20);
            $table->timestamps(); //Son dos columnas extra para la administración y control de afirmación, el primero que manda es la fecha y hora que se creo, la segunda es la hora y fecha cuando se edito o actualizo el registro

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cliente');
    }
};
