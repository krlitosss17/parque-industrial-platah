<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // ID de la empresa
            $table->string('name'); // Nombre de la empresa
            $table->string('email'); // Correo electrónico de contacto
            $table->string('phone'); // Teléfono de contacto
            $table->string('website')->nullable(); // Sitio web (opcional)
            $table->timestamps(); // created_at y updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
