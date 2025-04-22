<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // ID del usuario
            $table->string('name'); // Nombre del usuario
            $table->string('email')->unique(); // Correo electrónico
            $table->string('password'); // Contraseña
            $table->enum('role', ['admin', 'empresa']); // Rol
            $table->unsignedBigInteger('company_id')->nullable(); // Empresa asociada (si aplica)
            $table->timestamps(); // created_at y updated_at

            // Clave foránea a companies
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
