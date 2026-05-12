<?php require_once __DIR__ . '/../../views/layout/header.php'; ?>

<div class="max-w-md mx-auto px-4 py-12">
    <div class="bg-white rounded-xl shadow p-8">

        <h1 class="text-3xl font-bold text-blue-900 mb-2 text-center">Iniciar sesión</h1>
        <p class="text-gray-500 text-sm text-center mb-6">Accede a tu cuenta del Genil Shopping Center</p>

        <?php if (isset($_SESSION['error_login'])): ?>
            <div class="bg-red-50 border border-red-200 text-red-700 rounded-lg px-4 py-3 mb-5 text-sm">
                <?= $_SESSION['error_login'] ?>
                <?php unset($_SESSION['error_login']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['exito_registro'])): ?>
            <div class="bg-green-50 border border-green-200 text-green-700 rounded-lg px-4 py-3 mb-5 text-sm">
                <?= $_SESSION['exito_registro'] ?>
                <?php unset($_SESSION['exito_registro']); ?>
            </div>
        <?php endif; ?>

        <form action="/TFC_DAW/controllers/AuthController.php?action=login" method="POST" class="space-y-5">

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                <input type="email" name="email" required placeholder="usuario@email.com"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Contraseña</label>
                <input type="password" name="password" required placeholder="••••••••"
                       class="w-full border border-slate-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                    class="w-full bg-blue-800 text-white py-2 rounded-lg hover:bg-blue-900 transition font-semibold">
                Entrar
            </button>

        </form>

        <p class="text-center text-sm text-gray-500 mt-6">
            ¿No tienes cuenta?
            <a href="/TFC_DAW/views/auth/registro.php" class="text-sky-600 hover:underline font-medium">
                Regístrate
            </a>
        </p>

    </div>
</div>

<?php require_once __DIR__ . '/../../views/layout/footer.php'; ?>