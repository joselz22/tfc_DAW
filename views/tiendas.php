<?php require_once __DIR__ . '/../views/layout/header.php'; ?>

<div class="max-w-7xl mx-auto px-6 py-12">

    <h1 class="text-4xl font-bold text-blue-900 mb-2">Tiendas</h1>
    <p class="text-gray-500 mb-10">Descubre todos nuestros establecimientos</p>

    <!--Filtros (sin funcionalidad)-->
    <div class="flex gap-3 mb-8 flex-wrap">
        <button class="filtro-btn bg-blue-800 text-white px-4 py-2 rounded-full text-sm font-semibold" data-filtro="todas">Todas</button>
        <button class="filtro-btn bg-white border border-slate-200 text-gray-600 px-4 py-2 rounded-full text-sm hover:border-blue-800 hover:text-blue-800 transition" data-filtro="moda">Moda</button>
        <button class="filtro-btn bg-white border border-slate-200 text-gray-600 px-4 py-2 rounded-full text-sm hover:border-blue-800 hover:text-blue-800 transition" data-filtro="tecnologia">Tecnología</button>
        <button class="filtro-btn bg-white border border-slate-200 text-gray-600 px-4 py-2 rounded-full text-sm hover:border-blue-800 hover:text-blue-800 transition" data-filtro="deporte">Deporte</button>
        <button class="filtro-btn bg-white border border-slate-200 text-gray-600 px-4 py-2 rounded-full text-sm hover:border-blue-800 hover:text-blue-800 transition" data-filtro="hogar">Hogar</button>
        <button class="filtro-btn bg-white border border-slate-200 text-gray-600 px-4 py-2 rounded-full text-sm hover:border-blue-800 hover:text-blue-800 transition" data-filtro="belleza">Belleza</button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!--1-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="moda">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/zara.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">Zara</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Moda</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Moda actual para toda la familia.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 1 — Local 1</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>

        </div>

        <!--2-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="tecnologia">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/apple.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">Apple Store</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Tecnología</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Productos y accesorios Apple.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 1 — Local 3</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>
        </div>

        <!--3-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="deporte">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/decathlon.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">Decathlon</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Deporte</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Material deportivo para todos los deportes.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 2 — Local 3</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>

        </div>

        <!--4-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="hogar">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/ikea.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">IKEA</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Hogar</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Muebles y decoración para el hogar.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 2 — Local 10</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>

        </div>

        <!--5-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="belleza">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/sephora.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">Sephora</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Belleza</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Perfumería y cosmética de lujo.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 1 — Local 5</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>

        </div>

        <!--6-->
        <div class="bg-white rounded-xl shadow hover:shadow-md transition p-6 border-t-4 border-blue-800" data-categoria="moda">
            <div class="flex items-center gap-4 mb-3">
                <div class="bg-blue-50 rounded-lg p-3">
                    <img src="/TFC_DAW/public/img/icons/h&m.svg" class="h-8 w-8" alt="tienda">
                </div>
                <div>
                    <h2 class="font-bold text-blue-900">H&M</h2>
                    <span class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Moda</span>
                </div>
            </div>
            <p class="text-gray-500 text-sm mb-3">Moda accesible para toda la familia.</p>
            <div class="text-xs text-gray-400 space-y-1">
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                    <span>Planta 1 — Local 11</span>
                </div>
                <div class="flex items-center gap-2">
                    <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                    <span>10:00 - 22:00</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/../views/layout/footer.php'; ?>