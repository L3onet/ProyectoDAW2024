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
        Schema::create('aseguradoras', function (Blueprint $table) {
            $table->integer('clave_aseguradora')->primary(); // Clave primaria
            $table->string('nombre', 255);                   // Nombre VARCHAR(255)
            $table->dateTime('fecha_inicial');               // Fecha inicial DATETIME
            $table->dateTime('fecha_final');                 // Fecha final DATETIME
            $table->string('no_seguro', 255); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aseguradoras');
    }
};
