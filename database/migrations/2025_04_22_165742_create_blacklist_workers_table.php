<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('blacklist_workers', function (Blueprint $table) {
            $table->id(); // ID del registro
            $table->string('name'); // Nombre del trabajador (obligatorio)
            $table->string('curp'); // CURP del trabajador (obligatorio)
            $table->string('nss'); // Número de Seguro Social (obligatorio)
            $table->text('reason'); // Motivo de la incidencia (obligatorio)
            $table->date('departure_date'); // Fecha de salida
            $table->unsignedBigInteger('company_id'); // FK: empresa que reporta
            $table->timestamps(); // created_at y updated_at

            // Clave foránea a companies (sin eliminación en cascada)
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blacklist_workers');
    }
};
