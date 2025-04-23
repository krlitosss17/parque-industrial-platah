<template>
  <div>
    <!-- PRELOADER -->
    <div v-if="loading" class="fixed inset-0 bg-white z-50 flex items-center justify-center">
      <!-- Imagen del logotipo durante la precarga -->
      <img src="/images/logo-platah.png" alt="Cargando..." class="w-48 animate-pulse" />
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div v-show="!loading">
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
            <img src="/images/logo-platah.png" alt="Logo Platah" class="h-10 ml-6" />
          </a>

          <!-- Menú navegación -->
          <nav class="space-x-6 text-grey-700">
            <a href="#nosotros" class="hover:text-grey-600">Nosotros</a>
            <a href="#ubicacion" class="hover:text-grey-600">Ubicación</a>
            <a href="#servicios" class="hover:text-grey-600">Servicios</a>
            <a href="#directorio" class="hover:text-grey-600">Directorio</a>
            <a href="#contacto" class="hover:text-grey-600">Contacto</a>
            <a :href="route('vacantes.index')" class="font-semibold text-grey-700">Ofertas Laborales</a>
            <a href="/login" class="bg-yellow-600 px-4 py-2 rounded hover:bg-yellow-700" style="color:azure;">Acceso Empresas</a>
          </nav>
        </div>
      </header>

      <!-- PORTADA -->
      <section id="top" class="relative h-screen bg-cover bg-center" style="background-image: url('/images/wall_01.webp');">
        <!-- Capa oscura encima del fondo -->
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center px-6">
          <div class="max-w-7xl w-full grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
            <!-- Imagen a la izquierda -->
            <div class="flex justify-center">
              <img src="/images/logo_w.webp" alt="Industria" class="w-80 max-w-full" />
            </div>

            <!-- Texto a la derecha -->
            <div class="text-white text-center md:text-left">
              <h1 class="text-4xl md:text-6xl font-montserrat font-bold">Parque Industrial PLATAH</h1>
              <p class="mt-4 text-lg md:text-xl max-w-xl">Conectando empresas con infraestructura y oportunidades en el corazón de México.</p>
            </div>
          </div>
        </div>
      </section>

      <!-- SECCIÓN NOSOTROS -->
      <section id="nosotros" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
          <!-- Imagen del lado izquierdo -->
          <div class="w-full md:w-1/2">
            <img src="/images/nosotros_1.webp" alt="Nosotros" class="rounded-lg shadow-lg w-full" />
          </div>

          <!-- Texto del lado derecho -->
          <div class="w-full md:w-1/2 text-left md:pl-10" data-aos="fade-left">
            <!-- Título con animación -->
            <h2 class="text-4xl font-bold mb-4 text-yellow-700 animate__animated animate__slideInLeft">
              NOSOTROS
            </h2>
            <p class="text-gray-600 text-lg leading-relaxed">
              En el Parque Industrial Platah impulsamos el crecimiento industrial sustentable y tecnológico en Hidalgo. Contamos con ubicación estratégica, infraestructura moderna y un ecosistema empresarial colaborativo que promueve la inversión.
            </p>
          </div>
        </div>
      </section>

      <!-- PIE DE PÁGINA -->
      <footer class="bg-gray-900 text-white text-center py-6 mt-12">
        <p>© 2025 Parque Industrial Platah. Todos los derechos reservados.</p>
        <p>
          <a href="#" class="underline">Aviso de privacidad</a> |
          <a href="#" class="underline">Contrato de confidencialidad</a>
        </p>
      </footer>
    </div>
  </div>
</template>

<script setup>
// Importamos herramientas de Vue para estado reactivo y ciclo de vida
import { ref, onMounted } from 'vue'

// Variable reactiva para controlar si se está cargando la página
const loading = ref(true)

// Simulamos una carga de 2 segundos para mostrar el preloader
onMounted(() => {
  setTimeout(() => {
    loading.value = false
  }, 2000)
})

// route() viene de Ziggy y se usa para las rutas de Laravel
</script>

<style scoped>
/* Estilo para el header con efecto de desenfoque */
header {
  backdrop-filter: blur(2px);
}

/* Enlaces del menú */
nav a {
  text-decoration: none;
}

nav a:hover {
  color: #4B5563;
}

/* Enlaces generales */
a {
  color: #6B7280;
}

/* Enlaces del pie de página */
footer a {
  color: #ffffff;
}

/* Animación simple del preloader */
@keyframes pulse {
  0%, 100% {
    opacity: 0.5;
  }
  50% {
    opacity: 1;
  }
}

.animate-pulse {
  animation: pulse 1.5s infinite;
}
</style>
