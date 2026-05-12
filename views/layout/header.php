<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genil Shopping Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="text-gray-800 min-h-screen flex flex-col" style="background-image: url('/TFC_DAW/public/img/background.png'); background-attachment: fixed; background-size: cover; background-position: center;">
<div class="min-h-screen flex flex-col" style="background-color: rgba(255,255,255,0.70);">
<nav class="bg-blue-900 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-3 flex items-center justify-between">

        <a href="/TFC_DAW/index.php" class="flex items-center gap-3 hover:text-blue-200 transition">
            <img src="/TFC_DAW/public/img/logo.png" alt="Logo Genil Shopping Center" class="h-12 w-auto bg-white rounded-xl">
            <span class="text-xl font-bold tracking-wide">Genil Shopping Center</span>
        </a>

        <div class="flex items-center gap-6 text-sm font-medium">
            <a href="/TFC_DAW/index.php" class="hover:text-blue-200 transition">Inicio</a>
            <a href="/TFC_DAW/public/index.php" class="hover:text-blue-200 transition">Restaurantes</a>

            <?php if (isset($_SESSION['usuario'])): ?>
                <a href="/TFC_DAW/views/reservas/mis_reservas.php" class="hover:text-blue-200 transition">
                    Mis reservas
                </a>
                <?php if ($_SESSION['rol'] === 'admin'): ?>
                    <a href="/TFC_DAW/public/index.php?action=admin"
                       class="bg-sky-400 text-blue-900 px-3 py-1 rounded-full hover:bg-sky-300 transition font-semibold">
                        Panel Admin
                    </a>
                <?php endif; ?>
                <a href="/TFC_DAW/controllers/AuthController.php?action=logout"
                   class="bg-white text-blue-900 px-3 py-1 rounded-full hover:bg-blue-100 transition font-semibold">
                    Cerrar sesión
                </a>
            <?php else: ?>
                <a href="/TFC_DAW/views/auth/login.php" class="hover:text-blue-200 transition">
                    Iniciar sesión
                </a>
                <a href="/TFC_DAW/views/auth/registro.php"
                   class="bg-white text-blue-900 px-3 py-1 rounded-full hover:bg-blue-100 transition font-semibold">
                    Registrarse
                </a>
            <?php endif; ?>
        </div>

    </div>
</nav>

<main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8">