<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // ID del comunicado
            $table->string('title'); // Título del comunicado (obligatorio)
            $table->text('content'); // Contenido del comunicado (obligatorio)
            $table->string('image')->nullable(); // Ruta de la imagen asociada al comunicado (opcional)
            $table->unsignedBigInteger('created_by'); // FK: usuario que crea el comunicado (solo administradores)
            $table->timestamps(); // created_at y updated_at

            // Clave foránea a users (administrador)
            $table->foreign('created_by')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
