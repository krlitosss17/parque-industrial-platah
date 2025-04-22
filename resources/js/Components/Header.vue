<!-- resources/js/Components/Header.vue -->

<template>
    <header class="bg-white shadow p-4 flex justify-between items-center">
      <!-- Logotipo -->
      <img src="/images/logo-platah.png" alt="Logo Parque Industrial Platah" class="h-12 w-auto" />
  
      <!-- Menú de navegación -->
      <nav class="space-x-4">
        <a href="#" class="text-gray-800 hover:text-blue-600">Inicio</a>
        <a href="#" class="text-gray-800 hover:text-blue-600">Nosotros</a>
        <a href="#" class="text-gray-800 hover:text-blue-600">Ubicación</a>
        <a href="#" class="text-gray-800 hover:text-blue-600">Servicios</a>
        <a href="#" class="text-gray-800 hover:text-blue-600">Directorio</a>
        <a :href="route('vacantes.index')" class="text-gray-800 hover:text-blue-600">Ofertas</a>
        <a href="/login" class="text-gray-800 hover:text-blue-600">Acceso</a>
      </nav>
    </header>
  </template>
  
  <script setup>
  // Este componente no necesita lógica por ahora
  </script>
  