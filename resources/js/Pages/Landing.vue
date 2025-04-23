<template>
  <div>
    <!-- BARRA SUPERIOR INFORMATIVA -->
<div class="bg-black text-white text-sm py-2 px-4 w-full fixed top-0 left-0 z-50">
  <div class="max-w-7xl mx-auto flex justify-between items-center">
    <div>
      <!-- Información de contacto -->
      <span class="mr-4">📞 (771) 123 4567</span>
      <span class="mr-4">✉️ contacto@platah.mx</span>
      <span>📍 Villa de Tezontepec, Hidalgo</span>
    </div>
  </div>
</div>
    <!-- ENCABEZADO -->
    <header class="bg-white/80 backdrop-blur shadow-md fixed top-8 left-0 w-full z-40">
      <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logotipo -->
        <a href="#top" class="block">
        <img src="/images/logo-platah.png" alt="Logo Platah" class="h-10 ml-6"></a>

        <!-- Menú navegación -->
        <nav class="space-x-6 text-grey-700">
          <a href="#nosotros" class="hover:text-grey-600">Nosotros</a>
          <a href="#ubicacion" class="hover:text-grey-600">Ubicación</a>
          <a href="#servicios" class="hover:text-grey-600">Servicios</a>
          <a href="#directorio" class="hover:text-grey-600">Directorio</a>
          <a href="#contacto" class="hover:text-grey-600">Contacto</a>
          <a :href="route('vacantes.index')" class="font-semibold text-grey-700">Ofertas Laborales</a>
          <a href="/login" class="bg-yellow-600 px-4 py-2 rounded hover:bg-yellow-700" style="color:azure;"> Acceso Empresas </a>
        </nav>
      </div>
    </header>

    <!-- Portada -->
    <section class="relative h-screen bg-cover bg-center" style="background-image: url('/images/wall_01.png');">
      <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-6xl font-bold">Parque Industrial Platah</h1>
      </div>
    </section>

    <!-- Secciones (serán componentes después) -->
    <section id="nosotros" class="py-20 bg-gray-50 text-center">
      <h2 class="text-3xl font-bold mb-4">Nosotros</h2>
      <p class="max-w-3xl mx-auto text-gray-600">[Contenido pendiente]</p>
    </section>

    <!-- PIE DE PÁGINA -->
    <footer class="bg-gray-900 text-white text-center py-6 mt-12">
      <p>© 2025 Parque Industrial Platah. Todos los derechos reservados.</p>
      <p><a href="#" class="underline">Aviso de privacidad</a> | <a href="#" class="underline">Contrato de confidencialidad</a></p>
    </footer>
  </div>
</template>

<script setup>
// Usaremos `route()` gracias a Ziggy para las rutas de Laravel
</script>

<style scoped>
/* Barra de navegación - Header */
header {
  backdrop-filter: blur(10px); /* Da el efecto de desenfoque detrás del header */
}

nav a {
  text-decoration: none; /* Elimina el subrayado de los enlaces */
}

nav a:hover {
  color: #4B5563; /* Color gris más suave al pasar el ratón */
}

/* Ajuste a los colores */
a {
  color: #6B7280; /* Un color gris suave */
}

/* Estilos del pie de página */
footer a {
  color: #ffffff; /* Blanco para los enlaces del pie de página */
}
</style>
