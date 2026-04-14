<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->string('isbn', 20)->unique(); // el isbn no puede repetirse
            $table->string('genero');
            $table->year('anio_publicacion');
            $table->text('sinopsis')->nullable();  // campo opcional
            $table->decimal('precio_dia', 5, 2);
            $table->boolean('disponible')->default(true); // por defecto el libro esta disponible
            $table->string('portada')->nullable();
            $table->timestamps(); // crea created_at y updated_at automaticamente
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
