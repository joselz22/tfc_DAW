<?php require_once __DIR__ . '/../../../views/layout/header.php'; ?>
<?php /** @var array $restaurante */ ?>

<div class="max-w-xl mx-auto">
    <h1 class="text-3xl font-bold text-blue-900 mb-6">Editar restaurante</h1>

    <div class="bg-white rounded-xl shadow p-8">
        <form action="/TFC_DAW/admin/index.php?action=actualizar" method="POST" class="space-y-5">
            <input type="hidden" name="id" value="<?= $restaurante['id_restaurante'] ?>">
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" required
                       value="<?= htmlspecialchars($restaurante['nombre']) ?>"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
                <textarea name="descripcion" rows="3"
                          class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"><?= htmlspecialchars($restaurante['descripcion']) ?></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Ubicación</label>
                <input type="text" name="ubicacion"
                       value="<?= htmlspecialchars($restaurante['ubicacion']) ?>"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Horario</label>
                <input type="text" name="horario"
                       value="<?= htmlspecialchars($restaurante['horario']) ?>"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="flex gap-3 pt-2">
                <button type="submit"
                        class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-900 transition font-semibold">
                    Actualizar
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