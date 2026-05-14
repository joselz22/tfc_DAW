<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>
<?php /** @var array $restaurante */ ?>

<div class="max-w-lg mx-auto px-4 py-12">
    <div class="bg-white rounded-xl shadow p-8">

        <h1 class="text-3xl font-bold text-blue-900 mb-1">Hacer reserva</h1>
        <p class="text-gray-500 text-sm mb-6">
            <?= htmlspecialchars($restaurante['nombre']) ?> —
            <?= htmlspecialchars($restaurante['ubicacion']) ?>
        </p>

        <?php if (isset($_SESSION['error_reserva'])): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 mb-5 text-sm">
                <?= $_SESSION['error_reserva'] ?>
                <?php unset($_SESSION['error_reserva']); ?>
            </div>
        <?php endif; ?>

        <form id="form-reserva" action="/TFC_DAW/controllers/ReservaController.php?action=guardar" method="POST" class="space-y-5">

            <div id="errores-reserva"
                class="hidden bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 text-sm">
            </div>

            <input type="hidden" name="id_restaurante" value="<?= $restaurante['id_restaurante'] ?>">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Fecha</label>
                <input id="fecha" type="date" name="fecha" required
                    min="<?= date('Y-m-d') ?>"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Hora</label>
                <select id="hora" name="hora" required
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Selecciona una hora</option>
                    <option value="13:00:00">13:00</option>
                    <option value="13:30:00">13:30</option>
                    <option value="14:00:00">14:00</option>
                    <option value="14:30:00">14:30</option>
                    <option value="15:00:00">15:00</option>
                    <option value="20:00:00">20:00</option>
                    <option value="20:30:00">20:30</option>
                    <option value="21:00:00">21:00</option>
                    <option value="21:30:00">21:30</option>
                    <option value="22:00:00">22:00</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Número de personas</label>
                <input id="num_personas" type="number" name="num_personas" required min="1" max="20" placeholder="Ej: 2"
                    class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="w-full bg-blue-800 text-white py-2 rounded-lg hover:bg-blue-900 transition font-semibold">
                Confirmar reserva
            </button>
        </form>

        <div class="mt-4 text-center">
            <a href="/TFC_DAW/public/index.php" class="text-sm text-gray-400 hover:underline">
                Volver a restaurantes
            </a>
        </div>

    </div>
</div>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>