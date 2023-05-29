<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->ID();
            $table->string('matricula', 10)->unique();
            $table->string('nombre', 120);
            $table->date('fecha_nacimiento');
            $table->string('telefono', 20);
            $table->string('email', 50)->nullable(); // nullable() indicamos que la columna puede contener valores nulos, es decir que su valor es opcional. 

            $table->unsignedBigInteger('fk_nivel'); // Esta es la columna que agregaremos a la tabla de alumnos, le damos el tipo de dato que se le da al ID al crear las tablas y por ultimo le idicamos un nombre que es fk_nivel para identificar que hace referencia a otra tabla
            $table->foreign('fk_nivel')->references('ID')->on('niveles'); // Hacemos la conexión con la otra tabla, en este caso relacionamos por el nombre que es fk_nivel, hacemos referencia por el ID de la tabla niveles

            $table->dateTime('fecha_creacion', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('fecha_actualizacion', $precision = 0)->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->boolean('activo')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
