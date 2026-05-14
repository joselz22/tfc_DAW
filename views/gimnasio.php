<?php require_once __DIR__ . '/../views/layout/header.php'; ?>

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-blue-900 mb-2">Gimnasio</h1>
    <p class="text-gray-500 mb-10">Instalaciones deportivas de primer nivel en el corazón de Granada</p>
    <div>
        <img src="/TFC_DAW/public/img/genil_fitness.png" alt="Genil Fitness Club" class="rounded-xl shadow-xl w-full object-cover h-auto md:h-96 mb-4 ">
    </div>
    <!--Info-->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
        <div class="bg-white rounded-xl shadow p-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Genil Fitness Club</h2>
            <div class="space-y-4 text-sm text-gray-600">
                <div class="flex items-center gap-3">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-5 w-5" alt="ubicacion">
                    <span>Planta 3 — Acceso directo desde el parking</span>
                </div>
                <div class="flex items-center gap-3">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-5 w-5" alt="horario">
                    <div>
                        <p>Lunes a viernes: 07:00 - 23:00</p>
                        <p>Sábados: 08:00 - 22:00</p>
                        <p>Domingos: 09:00 - 21:00</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <img src="/TFC_DAW/public/img/icons/contacto.svg" class="h-5 w-5" alt="contacto">
                    <span>958 000 111 — gimnasio@genilshopping.es</span>
                </div>
            </div>
        </div>

        <!--Tarifas-->
        <div class="bg-white rounded-xl shadow p-8">
            <h2 class="text-2xl font-bold text-blue-900 mb-6">Tarifas</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center py-3 border-b border-slate-100">
                    <span class="font-medium text-gray-700">Día</span>
                    <span class="font-bold text-blue-800">8,00 €</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b border-slate-100">
                    <span class="font-medium text-gray-700">Mensual</span>
                    <span class="font-bold text-blue-800">35,00 €</span>
                </div>
                <div class="flex justify-between items-center py-3 border-b border-slate-100">
                    <span class="font-medium text-gray-700">Trimestral</span>
                    <span class="font-bold text-blue-800">90,00 €</span>
                </div>
                <div class="flex justify-between items-center py-3">
                    <span class="font-medium text-gray-700">Anual</span>
                    <span class="font-bold text-blue-800">300,00 €</span>
                </div>
            </div>
        </div>
    </div>

    <!--Instalaciones-->
    <h2 class="text-2xl font-bold text-blue-900 mb-6">Instalaciones</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-md transition">
            <img src="/TFC_DAW/public/img/icons/gimnasio.svg" class="h-12 w-12 mx-auto mb-3" alt="sala">
            <p class="font-semibold text-blue-900 text-sm">Sala de musculación</p>
            <p class="text-gray-400 text-xs mt-1">+100 máquinas</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-md transition">
            <img src="/TFC_DAW/public/img/icons/cardio.svg" class="h-12 w-12 mx-auto mb-3" alt="cardio">
            <p class="font-semibold text-blue-900 text-sm">Zona cardio</p>
            <p class="text-gray-400 text-xs mt-1">Cintas, bicis y elípticas</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-md transition">
            <img src="/TFC_DAW/public/img/icons/clase.svg" class="h-12 w-12 mx-auto mb-3" alt="clases">
            <p class="font-semibold text-blue-900 text-sm">Clases dirigidas</p>
            <p class="text-gray-400 text-xs mt-1">Yoga, pilates, spinning</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center hover:shadow-md transition">
            <img src="/TFC_DAW/public/img/icons/taquilla.svg" class="h-12 w-12 mx-auto mb-3" alt="piscina">
            <p class="font-semibold text-blue-900 text-sm">Vestuarios</p>
            <p class="text-gray-400 text-xs mt-1">Taquillas y duchas</p>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/../views/layout/footer.php'; ?>