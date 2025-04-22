<template>
  <div>
    <!-- ==================== ENCABEZADO ==================== -->
    <header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
      <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">

        <!-- LOGOTIPO -->
        <!-- Asegúrate de que este archivo exista en /public/logo_platah.png -->
        <img src="/images/logo-platah.png" alt="Logo Platah" class="h-10" />

        <!-- MENÚ DE NAVEGACIÓN -->
        <!-- Enlaces internos hacia las secciones de la misma landing -->
        <nav class="space-x-6 text-gray-700">
          <a href="#nosotros" class="hover:text-blue-600">Nosotros</a>
          <a href="#ubicacion" class="hover:text-blue-600">Ubicación</a>
          <a href="#servicios" class="hover:text-blue-600">Servicios</a>
          <a href="#directorio" class="hover:text-blue-600">Directorio</a>
          <a href="#contacto" class="hover:text-blue-600">Contacto</a>

          <!-- Enlace dinámico generado con Ziggy hacia el módulo de vacantes -->
          <a :href="route('vacantes.index')" class="text-blue-600 font-semibold">Ofertas Laborales</a>

          <!-- Enlace al sistema de acceso para empresas (login) -->
          <a href="/login" class="text-white bg-blue-600 px-4 py-2 rounded">Acceso Empresas</a>
        </nav>
      </div>
    </header>

    <!-- ==================== PORTADA ==================== -->
    <!-- Imagen de fondo con superposición oscura y texto central -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('/portada.jpg');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-6xl font-bold">Parque Industrial Platah</h1>
      </div>
    </section>

    <!-- ==================== SECCIÓN "NOSOTROS" ==================== -->
    <!-- Posteriormente esta sección será un componente independiente -->
    <section id="nosotros" class="py-20 bg-gray-50 text-center">
      <h2 class="text-3xl font-bold mb-4">Nosotros</h2>
      <p class="max-w-3xl mx-auto text-gray-600">[Contenido pendiente]</p>
    </section>

    <!-- ==================== PIE DE PÁGINA ==================== -->
    <!-- Incluye información legal y enlaces básicos -->
    <footer class="bg-gray-900 text-white text-center py-6 mt-12">
      <p>© 2025 Parque Industrial Platah. Todos los derechos reservados.</p>
      <p>
        <a href="#" class="underline">Aviso de privacidad</a> |
        <a href="#" class="underline">Contrato de confidencialidad</a>
      </p>
    </footer>
  </div>
</template>

<script setup>
// Importante: Esto habilita el uso de la función `route()` de Ziggy para las rutas dinámicas de Laravel
</script>

<style scoped>
/* Scoped: estilos aplican solo dentro del componente */
/* Puedes añadir aquí animaciones, transiciones o ajustes visuales */
</style>
