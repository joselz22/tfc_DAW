<?php require_once __DIR__ . '/../../../views/layout/header.php'; ?>

<div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-blue-900 mb-6">Añadir restaurante</h1>

    <div class="bg-white rounded-xl shadow p-8">
        <form action="/TFC_DAW/admin/index.php?action=guardar" method="POST" class="space-y-5">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" required
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                <input type="text" name="ubicacion"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Horario</label>
                <input type="text" name="horario" placeholder="Ej: 12:00 - 23:00"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="flex gap-3 pt-2">
                <button type="submit"
                        class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-900 transition font-semibold">
                    Guardar
                </button>
                <a href="/TFC_DAW/admin/index.php"
                   class="bg-slate-200 text-gray-700 px-6 py-2 rounded-lg hover:bg-slate-300 transition font-semibold">
                    Cancelar
                </a>
            </div>

        </form>
    </div>
</div>

<?php require_once __DIR__ . '/../../../views/layout/footer.php'; ?>