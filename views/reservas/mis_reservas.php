<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>
<?php /** @var array $reservas */ ?>

<div class="max-w-4xl mx-auto px-4 py-12">

    <h1 class="text-3xl font-bold text-blue-900 mb-2">Mis reservas</h1>
    <p class="text-gray-500 mb-8">Hola, <?= htmlspecialchars($_SESSION['usuario']) ?>. Aquí puedes ver y gestionar tus reservas.</p>

    <?php if (isset($_SESSION['exito_reserva'])): ?>
        <div class="bg-green-50 border border-green-200 text-green-700 rounded-lg px-4 py-3 mb-6 text-sm">
            <?= $_SESSION['exito_reserva'] ?>
            <?php unset($_SESSION['exito_reserva']); ?>
        </div>
    <?php endif; ?>

    <?php if (empty($reservas)): ?>
        <div class="bg-white rounded-xl shadow p-10 text-center">
            <p class="text-gray-400 text-lg mb-4">No tienes ninguna reserva todavía.</p>
            <a href="/TFC_DAW/public/index.php"
               class="bg-blue-800 text-white px-6 py-2 rounded-lg hover:bg-blue-900 transition font-semibold text-sm">
                Ver restaurantes
            </a>
        </div>
    <?php else: ?>
        <div class="space-y-4">
            <?php foreach ($reservas as $r): ?>
            <div class="bg-white rounded-xl shadow p-6 flex items-center justify-between">
                <div>
                    <h2 class="text-lg font-bold text-blue-900 mb-1">
                        <?= htmlspecialchars($r['nombre_restaurante']) ?>
                    </h2>
                    <div class="text-sm text-gray-500 space-y-1">
                        <div class="flex items-center gap-2">
                            <img src="/TFC_DAW/public/img/icons/calendario.svg" class="h-4 w-4" alt="fecha">
                            <span><?= date('d/m/Y', strtotime($r['fecha'])) ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="/TFC_DAW/public/img/icons/reloj.svg" class="h-4 w-4" alt="hora">
                            <span><?= substr($r['hora'], 0, 5) ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="/TFC_DAW/public/img/icons/personas.svg" class="h-4 w-4" alt="personas">
                            <span><?= $r['num_personas'] ?> persona<?= $r['num_personas'] > 1 ? 's' : '' ?></span>
                        </div>
                        <div class="flex items-center gap-2">
                            <img src="/TFC_DAW/public/img/icons/ubicacion.svg" class="h-4 w-4" alt="ubicacion">
                            <span><?= htmlspecialchars($r['ubicacion']) ?></span>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col items-end gap-3">
                    <?php if ($r['estado'] === 'activa'): ?>
                        <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1 rounded-full">
                            Activa
                        </span>
                        <a href="/TFC_DAW/controllers/ReservaController.php?action=cancelar&id=<?= $r['id_reserva'] ?>"
                           onclick="return confirm('¿Cancelar esta reserva?')"
                           class="text-red-500 text-sm hover:underline font-medium">
                            Cancelar
                        </a>
                    <?php else: ?>
                        <span class="bg-red-100 text-red-500 text-xs font-semibold px-3 py-1 rounded-full">
                            Cancelada
                        </span>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>