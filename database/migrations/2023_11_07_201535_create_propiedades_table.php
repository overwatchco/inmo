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
        Schema::create('propiedades', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_propiedad')->unique();
            $table->string('codigo_usuario');
            $table->string('pais');
            $table->string('departamento');
            $table->string('ciudad');
            $table->string('barrio');
            $table->string('area_contruccion');
            $table->string('area_privada');
            $table->string('precio');
            $table->string('precio_administracion');
            $table->string('antiguedad');
            $table->string('baños');
            $table->string('habitaciones');
            $table->string('parqueadero');
            $table->string('longitud');
            $table->string('latitud');
            $table->string('descripcion',800);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedades');
    }
};
