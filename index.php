<?php require_once 'views/layout/header.php'; ?>

<!--Imagen central-->
<div class="relative h-[85vh] bg-blue-900 flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center opacity-40"
         style="background-image: url('/TFC_DAW/public/img/hero.jpg')"></div>
    <div class="relative text-center text-white px-4">
        <img src="/TFC_DAW/public/img/logo.png" alt="Genil Shopping Center" class="h-64 w-auto mx-auto mb-6 bg-white border-ml rounded-xl">
        <p class="text-xl text-blue-100 mb-8">El centro comercial del corazón de Granada</p>
        <div class="flex gap-4 justify-center">
            <a href="/TFC_DAW/public/index.php" class="bg-white text-blue-900 px-8 py-3 rounded font-bold hover:bg-blue-50 transition text-sm uppercase tracking-wide">
                Ver restaurantes
            </a>
            <a href="#servicios" class="border border-white text-white px-8 py-3 rounded font-bold hover:bg-white hover:text-blue-900 transition text-sm uppercase tracking-wide">
                Descúbrenos
            </a>
        </div>
    </div>
</div>

<!--Estadísticas-->
<div class="bg-blue-800 text-white">
    <div class="max-w-7xl mx-auto px-6 py-8 grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
        <div>
            <p class="text-4xl font-bold">+50</p>
            <p class="text-blue-200 text-sm uppercase tracking-wide mt-1">Tiendas</p>
        </div>
        <div>
            <p class="text-4xl font-bold">+10</p>
            <p class="text-blue-200 text-sm uppercase tracking-wide mt-1">Restaurantes</p>
        </div>
        <div>
            <p class="text-4xl font-bold">500</p>
            <p class="text-blue-200 text-sm uppercase tracking-wide mt-1">Plazas parking</p>
        </div>
        <div>
            <p class="text-4xl font-bold">20.000</p>
            <p class="text-blue-200 text-sm uppercase tracking-wide mt-1">m²</p>
        </div>
    </div>
</div>

<!--Accesos directos-->
<div id="servicios" class="max-w-7xl mx-auto px-6 py-16">
    <h2 class="text-3xl font-bold text-blue-900 text-center mb-2">Descubre el centro</h2>
    <p class="text-gray-600 text-center mb-10">Todo lo que necesitas en un solo lugar</p>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
        <a href="/TFC_DAW/public/index.php"
           class="group bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md transition p-8 text-center">
            <img src="/TFC_DAW/public/img/icons/comida.svg" alt="Restaurantes" class="h-16 w-16 mx-auto mb-4">
            <h3 class="font-bold text-blue-900 uppercase text-sm tracking-wide group-hover:text-blue-600 transition">Restaurantes</h3>
            <p class="text-gray-400 text-xs mt-1">Reserva tu mesa</p>
        </a>
        <a href="#"
           class="group bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md transition p-8 text-center">
            <img src="/TFC_DAW/public/img/icons/tiendas.svg" alt="Tiendas" class="h-16 w-16 mx-auto mb-4">
            <h3 class="font-bold text-blue-900 uppercase text-sm tracking-wide group-hover:text-blue-600 transition">Tiendas</h3>
            <p class="text-gray-400 text-xs mt-1">+50 establecimientos</p>
        </a>
        <a href="#"
           class="group bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md transition p-8 text-center">
            <img src="/TFC_DAW/public/img/icons/gimnasio.svg" alt="Gimnasio" class="h-16 w-16 mx-auto mb-4">
            <h3 class="font-bold text-blue-900 uppercase text-sm tracking-wide group-hover:text-blue-600 transition">Gimnasio</h3>
            <p class="text-gray-400 text-xs mt-1">Deporte y salud</p>
        </a>
        <a href="#"
           class="group bg-white border border-slate-100 rounded-xl shadow-sm hover:shadow-md transition p-8 text-center">
            <img src="/TFC_DAW/public/img/icons/parking.svg" alt="Parking" class="h-16 w-16 mx-auto mb-4">
            <h3 class="font-bold text-blue-900 uppercase text-sm tracking-wide group-hover:text-blue-600 transition">Aparcamiento</h3>
            <p class="text-gray-400 text-xs mt-1">Gratuito para clientes</p>
        </a>
    </div>
</div>

<!--Novedades-->
<div class="bg-slate-50 py-16 shadow-xl shadow-blue-300">
    <div class="max-w-7xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-blue-900 mb-2">Novedades</h2>
        <p class="text-gray-400 mb-10">Últimas noticias del Genil Shopping Center</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
                <img src="/TFC_DAW/public/img/sushi_tokio.jpg" alt="Sushi Tokio" class="w-full h-48 object-cover">
                <div class="p-5">
                    <p class="text-xs text-blue-500 uppercase tracking-wide mb-1">Mayo 2026</p>
                    <h3 class="font-bold text-gray-800 mb-2">Sushi Tokio ya está abierto en Planta 1</h3>
                    <p class="text-gray-500 text-sm">Nuevo restaurante japonés con la mejor cocina tradicional de Granada.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
                <img src="/TFC_DAW/public/img/parking.png" alt="Parking" class="w-full h-48 object-cover">
                <div class="p-5">
                    <p class="text-xs text-blue-500 uppercase tracking-wide mb-1">Abril 2026</p>
                    <h3 class="font-bold text-gray-800 mb-2">Nueva planta de parking con 200 plazas</h3>
                    <p class="text-gray-500 text-sm">Ampliamos nuestra zona de aparcamiento para mayor comodidad.</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-sm overflow-hidden hover:shadow-md transition">
                <img src="/TFC_DAW/public/img/ocio_infantil.png" alt="Ocio Infantil" class="w-full h-48 object-cover">
                <div class="p-5">
                    <p class="text-xs text-blue-500 uppercase tracking-wide mb-1">Marzo 2026</p>
                    <h3 class="font-bold text-gray-800 mb-2">Nueva zona de ocio infantil en Planta 2</h3>
                    <p class="text-gray-500 text-sm">Espacio dedicado al entretenimiento familiar con actividades para niños.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'views/layout/footer.php'; ?>