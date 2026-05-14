<?php if (session_status() === PHP_SESSION_NONE) session_start(); ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genil Shopping Center</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /*Para Chrome, Opera, Safari*/
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e40af;
            border-radius: 999px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #1e3a8a;
        }

        /*Para que funcione en Firefox*/
        * {
            scrollbar-width: thin;
            scrollbar-color: #1e40af #f1f5f9;
        }
    </style>
</head>

<body class="text-gray-800 min-h-screen flex flex-col" style="background-image: url('/TFC_DAW/public/img/background.png'); background-attachment: fixed; background-size: cover; background-position: center;">
    <div class="min-h-screen flex flex-col" style="background-color: rgba(255,255,255,0.70);">
        <nav class="bg-white shadow-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-6 py-3 flex items-center justify-between">
                <!--Logo-->
                <a href="/TFC_DAW/index.php" class="flex items-center gap-3">
                    <img src="/TFC_DAW/public/img/logo.png" alt="Genil Shopping Center" class="h-20 w-auto">
                </a>
                <!--Menú-->
                <div class="hidden md:flex items-center gap-8 text-sm font-semibold uppercase tracking-wide text-gray-700">
                    <a href="/TFC_DAW/index.php" class="hover:text-blue-800 transition">Inicio</a>
                    <a href="/TFC_DAW/public/index.php" class="hover:text-blue-800 transition">Restaurantes</a>
                    <a href="/TFC_DAW/tiendas.php" class="hover:text-blue-800 transition">Tiendas</a>
                    <a href="/TFC_DAW/gimnasio.php" class="hover:text-blue-800 transition">Gimnasio</a>
                    <a href="/TFC_DAW/aparcamiento.php" class="hover:text-blue-800 transition">Aparcamiento</a>
                    <a href="/TFC_DAW/novedades.php" class="hover:text-blue-800 transition">Novedades</a>
                    <?php if (isset($_SESSION['usuario'])): ?>
                        <span class="text-blue-800 font-bold"><?= htmlspecialchars($_SESSION['usuario']) ?></span>
                        <a href="/TFC_DAW/controllers/ReservaController.php?action=mis_reservas" class="hover:text-blue-800 transition">Mis reservas</a>
                        <?php if ($_SESSION['rol'] === 'admin'): ?>
                            <a href="/TFC_DAW/admin/index.php"
                                class="bg-blue-800 text-white px-4 py-1.5 rounded hover:bg-blue-900 transition">
                                Admin
                            </a>
                        <?php endif; ?>
                        <a href="/TFC_DAW/controllers/AuthController.php?action=logout"
                            class="border border-blue-800 text-blue-800 px-4 py-1.5 rounded hover:bg-blue-50 transition">
                            Salir
                        </a>
                    <?php else: ?>
                        <a href="/TFC_DAW/views/auth/login.php"
                            class="border border-blue-800 text-blue-800 px-4 py-1.5 rounded hover:bg-blue-50 transition">
                            Acceder
                        </a>
                        <a href="/TFC_DAW/views/auth/registro.php"
                            class="bg-blue-800 text-white px-4 py-1.5 rounded hover:bg-blue-900 transition">
                            Registrarse
                        </a>
                    <?php endif; ?>
                </div>
                <!--Menú hamburguesa para móvil-->
                <button id="menu-toggle" class="md:hidden flex flex-col gap-1.5 p-2 focus:outline-none">
                    <span class="hamburger-line block h-0.5 w-6 bg-blue-900 transition-all duration-300"></span>
                    <span class="hamburger-line block h-0.5 w-6 bg-blue-900 transition-all duration-300"></span>
                    <span class="hamburger-line block h-0.5 w-6 bg-blue-900 transition-all duration-300"></span>
                </button>
            </div>
            <!--Desplegable-->
            <div id="menu-movil" class="hidden md:hidden bg-white border-t border-slate-100 px-6 py-4 flex flex-col gap-4 text-sm font-semibold uppercase tracking-wide text-gray-700">
                <a href="/TFC_DAW/index.php" class="hover:text-blue-800 transition">Inicio</a>
                <a href="/TFC_DAW/public/index.php" class="hover:text-blue-800 transition">Restaurantes</a>
                <a href="/TFC_DAW/tiendas.php" class="hover:text-blue-800 transition">Tiendas</a>
                <a href="/TFC_DAW/gimnasio.php" class="hover:text-blue-800 transition">Gimnasio</a>
                <a href="/TFC_DAW/aparcamiento.php" class="hover:text-blue-800 transition">Aparcamiento</a>
                <a href="/TFC_DAW/novedades.php" class="hover:text-blue-800 transition">Novedades</a>

                <?php if (isset($_SESSION['usuario'])): ?>
                    <span class="text-blue-800 font-bold"><?= htmlspecialchars($_SESSION['usuario']) ?></span>
                    <a href="/TFC_DAW/controllers/ReservaController.php?action=mis_reservas" class="hover:text-blue-800 transition">Mis reservas</a>
                    <?php if ($_SESSION['rol'] === 'admin'): ?>
                        <a href="/TFC_DAW/admin/index.php"
                            class="bg-blue-800 text-white px-4 py-2 rounded text-center hover:bg-blue-900 transition">
                            Admin
                        </a>
                    <?php endif; ?>
                    <a href="/TFC_DAW/controllers/AuthController.php?action=logout"
                        class="border border-blue-800 text-blue-800 px-4 py-2 rounded text-center hover:bg-blue-50 transition">
                        Salir
                    </a>
                <?php else: ?>
                    <a href="/TFC_DAW/views/auth/login.php"
                        class="border border-blue-800 text-blue-800 px-4 py-2 rounded text-center hover:bg-blue-50 transition">
                        Acceder
                    </a>
                    <a href="/TFC_DAW/views/auth/registro.php"
                        class="bg-blue-800 text-white px-4 py-2 rounded text-center hover:bg-blue-900 transition">
                        Registrarse
                    </a>
                <?php endif; ?>
            </div>
        </nav>
        <main class="flex-1 max-w-6xl mx-auto w-full px-4 py-8">