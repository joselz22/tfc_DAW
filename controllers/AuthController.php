<?php
session_start();
require_once __DIR__ . '/../models/Usuario.php';

$action = $_GET['action'] ?? '';

if ($action === 'login') {
    $email    = $_POST['email'];
    $password = $_POST['password'];

    $usuario = Usuario::obtenerPorEmail($email);

    if ($usuario && password_verify($password, $usuario['contraseña'])) {
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['rol']     = $usuario['rol'];
        $_SESSION['id']      = $usuario['id_usuario'];

        // Redirigir a donde quería ir o al inicio según rol
        if (isset($_SESSION['redirect_after_login'])) {
            $redirect = $_SESSION['redirect_after_login'];
            unset($_SESSION['redirect_after_login']);
            header("Location: $redirect");
        } elseif ($usuario['rol'] === 'admin') {
            header("Location: /TFC_DAW/admin/index.php");
        } else {
            header("Location: /TFC_DAW/index.php");
        }
        exit;
    }
} elseif ($action === 'registro') {
    $nombre   = $_POST['nombre'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($password !== $confirm) {
        $_SESSION['error_registro'] = "Las contraseñas no coinciden.";
        header("Location: /TFC_DAW/views/auth/registro.php");
        exit;
    }

    if (strlen($password) < 6) {
        $_SESSION['error_registro'] = "La contraseña debe tener al menos 6 caracteres.";
        header("Location: /TFC_DAW/views/auth/registro.php");
        exit;
    }

    $resultado = Usuario::registrar($nombre, $email, $password);

    if ($resultado) {
        $_SESSION['exito_registro'] = "Cuenta creada correctamente. Ya puedes iniciar sesión.";
        header("Location: /TFC_DAW/views/auth/login.php");
        exit;
    } else {
        $_SESSION['error_registro'] = "El email ya está registrado.";
        header("Location: /TFC_DAW/views/auth/registro.php");
        exit;
    }
} elseif ($action === 'logout') {
    session_destroy();
    header("Location: /TFC_DAW/index.php");
    exit;
}
