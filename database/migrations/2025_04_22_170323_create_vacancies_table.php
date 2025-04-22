<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id(); // ID de la vacante
            $table->string('title'); // Título de la vacante (obligatorio)
            $table->text('description'); // Descripción de la vacante (obligatorio)
            $table->text('requirements'); // Requisitos de la vacante (obligatorio)
            $table->decimal('salary', 10, 2); // Salario ofrecido (obligatorio)
            $table->string('contact'); // Información de contacto (correo o teléfono) (obligatorio)
            $table->string('contact_name'); // Nombre de contacto (obligatorio)
            $table->unsignedBigInteger('company_id'); // FK: empresa que publica la vacante (obligatorio)
            $table->timestamps(); // created_at y updated_at

            // Clave foránea a companies
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
