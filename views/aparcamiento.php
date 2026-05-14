<?php require_once __DIR__ . '/../views/layout/header.php'; ?>

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-blue-900 mb-2">Aparcamiento</h1>
    <p class="text-gray-500 mb-10">500 plazas gratuitas para clientes del centro</p>
    <!--Estadísticas-->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <div class="bg-white rounded-xl shadow p-6 text-center border-t-4 border-green-500">
            <p class="text-4xl font-bold text-green-600 mb-1">342</p>
            <p class="text-gray-500 text-sm uppercase tracking-wide">Plazas libres</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center border-t-4 border-red-400">
            <p class="text-4xl font-bold text-red-500 mb-1">158</p>
            <p class="text-gray-500 text-sm uppercase tracking-wide">Plazas ocupadas</p>
        </div>
        <div class="bg-white rounded-xl shadow p-6 text-center border-t-4 border-blue-800">
            <p class="text-4xl font-bold text-blue-800 mb-1">500</p>
            <p class="text-gray-500 text-sm uppercase tracking-wide">Total plazas</p>
        </div>
    </div>
    <!--Plazas-->
    <div class="bg-white rounded-xl shadow p-8 mb-10">
        <h2 class="text-2xl font-bold text-blue-900 mb-2">Mapa de plazas</h2>
        <p class="text-gray-400 text-sm mb-6">Estado actual del aparcamiento en tiempo real</p>

        <div class="flex flex-wrap gap-4 mb-6 text-sm">
            <div class="flex items-center gap-2">
                <div class="h-4 w-8 rounded bg-green-400"></div>
                <span class="text-gray-600">Libre</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="h-4 w-8 rounded bg-red-400"></div>
                <span class="text-gray-600">Ocupada</span>
            </div>
            <div class="flex items-center gap-2">
                <div class="h-4 w-8 rounded bg-blue-300"></div>
                <span class="text-gray-600">Reservada</span>
            </div>
        </div>
        <div class="w-full flex justify-center">
            <img src="/TFC_DAW/public/img/plazas.png"
                alt="Mapa del aparcamiento"
                class="w-full max-w-4xl mt-2">
        </div>

    </div>
    <!--Info-->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-bold text-blue-900 mb-4">Información</h3>
            <ul class="space-y-2 text-sm text-gray-600">
                <li class="flex items-center gap-2">- Gratuito para clientes con ticket de compra</li>
                <li class="flex items-center gap-2">- 2 horas gratuitas sin ticket</li>
                <li class="flex items-center gap-2">- Acceso 24 horas</li>
                <li class="flex items-center gap-2">- Plazas para personas con movilidad reducida</li>
                <li class="flex items-center gap-2">- Plazas para vehículos eléctricos con cargador</li>
            </ul>
        </div>
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="font-bold text-blue-900 mb-4">Tarifas</h3>
            <div class="space-y-2 text-sm">
                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-gray-600">Primeras 2 horas</span>
                    <span class="font-semibold text-green-600">Gratis</span>
                </div>
                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-gray-600">Hora adicional</span>
                    <span class="font-semibold text-gray-800">1,50 €</span>
                </div>
                <div class="flex justify-between py-2 border-b border-slate-100">
                    <span class="text-gray-600">Día completo</span>
                    <span class="font-semibold text-gray-800">8,00 €</span>
                </div>
                <div class="flex justify-between py-2">
                    <span class="text-gray-600">Abono mensual</span>
                    <span class="font-semibold text-gray-800">50,00 €</span>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require_once __DIR__ . '/../views/layout/footer.php'; ?>