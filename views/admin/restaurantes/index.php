<?php require_once __DIR__ . '/../../../views/layout/header.php'; ?>
<?php /** @var array $restaurantes */ ?>

<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-blue-900">Panel Admin — Restaurantes</h1>
    <a href="/TFC_DAW/admin/index.php?action=crear"
       class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition text-sm font-semibold">
        + Añadir restaurante
    </a>
</div>

<div class="bg-white rounded-xl shadow overflow-hidden">
    <table class="w-full text-sm">
        <thead class="bg-blue-900 text-white">
            <tr>
                <th class="px-4 py-3 text-left">ID</th>
                <th class="px-4 py-3 text-left">Nombre</th>
                <th class="px-4 py-3 text-left">Descripción</th>
                <th class="px-4 py-3 text-left">Ubicación</th>
                <th class="px-4 py-3 text-left">Horario</th>
                <th class="px-4 py-3 text-left">Acciones</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-slate-100">
            <?php foreach ($restaurantes as $r): ?>
            <tr class="hover:bg-slate-50 transition">
                <td class="px-4 py-3 text-gray-500"><?= $r['id_restaurante'] ?></td>
                <td class="px-4 py-3 font-medium text-blue-900"><?= htmlspecialchars($r['nombre']) ?></td>
                <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars($r['descripcion']) ?></td>
                <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars($r['ubicacion']) ?></td>
                <td class="px-4 py-3 text-gray-600"><?= htmlspecialchars($r['horario']) ?></td>
                <td class="px-4 py-3 flex gap-3">
                    <a href="/TFC_DAW/admin/index.php?action=editar&id=<?= $r['id_restaurante'] ?>"
                       class="text-sky-600 hover:underline font-medium">Editar</a>
                    <a href="/TFC_DAW/admin/index.php?action=eliminar&id=<?= $r['id_restaurante'] ?>"
                       onclick="return confirm('¿Eliminar este restaurante?')"
                       class="text-red-500 hover:underline font-medium">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once __DIR__ . '/../../../views/layout/footer.php'; ?>