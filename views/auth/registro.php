<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>

<div class="max-w-md mx-auto px-4 py-12">
    <div class="bg-white rounded-xl shadow p-8">

        <h1 class="text-3xl font-bold text-blue-900 mb-2 text-center">Crear cuenta</h1>
        <p class="text-gray-500 text-sm text-center mb-6">Regístrate para gestionar tus reservas</p>

        <?php if (isset($_SESSION['error_registro'])): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 mb-5 text-sm">
                <?= $_SESSION['error_registro'] ?>
                <?php unset($_SESSION['error_registro']); ?>
            </div>
        <?php endif; ?>

        <form action="/TFC_DAW/controllers/AuthController.php?action=registro" method="POST" class="space-y-5">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
                <input type="text" name="nombre" required placeholder="Tu nombre"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required placeholder="tu@email.com"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                <input type="password" name="password" required placeholder="Mínimo 6 caracteres"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Confirmar contraseña</label>
                <input type="password" name="confirm" required placeholder="Repite tu contraseña"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                    class="w-full bg-blue-800 text-white py-2 rounded-lg hover:bg-blue-900 transition font-semibold">
                Crear cuenta
            </button>

        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            ¿Ya tienes cuenta?
            <a href="/TFC_DAW/views/auth/login.php" class="text-sky-600 hover:underline font-medium">
                Inicia sesión
            </a>
        </p>

    </div>
</div>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>