<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>
<?php /** @var array $restaurantes */ ?>

<div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-blue-900">Restaurantes</h1>
    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
        <a href="/TFC_DAW/public/index.php?action=crear"
           class="bg-blue-800 text-white px-4 py-2 rounded-lg hover:bg-blue-900 transition text-sm font-semibold">
            + Añadir restaurante
        </a>
    <?php endif; ?>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    <?php foreach ($restaurantes as $r): ?>
    <div class="bg-white rounded-xl shadow hover:shadow-lg transition overflow-hidden border-t-4 border-blue-800">
        <div class="p-6">
            <h2 class="text-xl font-bold text-blue-900 mb-1"><?= htmlspecialchars($r['nombre']) ?></h2>
            <p class="text-gray-500 text-sm mb-3"><?= htmlspecialchars($r['descripcion']) ?></p>
            <div class="text-sm text-gray-600 space-y-1">
                <p> <?= htmlspecialchars($r['ubicacion']) ?></p>
                <p> <?= htmlspecialchars($r['horario']) ?></p>
            </div>
        </div>
        <div class="px-6 py-3 bg-slate-50 flex items-center justify-between border-t border-slate-100">
            <a href="/TFC_DAW/public/index.php?action=reservar&id=<?= $r['id_restaurante'] ?>"
               class="bg-sky-500 text-white px-4 py-1.5 rounded-lg text-sm hover:bg-sky-600 transition font-medium">
                Reservar
            </a>
            <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
            <div class="flex gap-3 text-sm">
                <a href="/TFC_DAW/public/index.php?action=editar&id=<?= $r['id_restaurante'] ?>"
                   class="text-blue-700 hover:underline font-medium">Editar</a>
                <a href="/TFC_DAW/public/index.php?action=eliminar&id=<?= $r['id_restaurante'] ?>"
                   onclick="return confirm('¿Eliminar este restaurante?')"
                   class="text-red-500 hover:underline font-medium">Eliminar</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>