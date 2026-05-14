<?php
session_start();
require_once __DIR__ . '/../models/Reserva.php';
require_once __DIR__ . '/../models/Restaurante.php';

$action = $_GET['action'] ?? '';

if (!isset($_SESSION['id'])) {
    $_SESSION['redirect_after_login'] = "/TFC_DAW/controllers/ReservaController.php?action=crear&id=" . ($_GET['id'] ?? '');
    $_SESSION['aviso_login'] = "Debes iniciar sesión para hacer una reserva.";
    header("Location: /TFC_DAW/views/auth/login.php");
    exit;
}

if ($action === 'crear') {
    $id_restaurante = $_GET['id'] ?? null;
    $restaurante = $id_restaurante ? Restaurante::obtenerPorId($id_restaurante) : null;
    require __DIR__ . '/../views/reservas/crear.php';
} elseif ($action === 'guardar') {
    $id_usuario     = $_SESSION['id'];
    $id_restaurante = $_POST['id_restaurante'];
    $fecha          = $_POST['fecha'];
    $hora           = $_POST['hora'];
    $num_personas   = $_POST['num_personas'];

    if (empty($fecha) || empty($hora) || empty($num_personas)) {
        $_SESSION['error_reserva'] = "Todos los campos son obligatorios.";
        header("Location: /TFC_DAW/controllers/ReservaController.php?action=crear&id=$id_restaurante");
        exit;
    }

    if (!Reserva::disponible($id_restaurante, $fecha, $hora)) {
        $_SESSION['error_reserva'] = "Esa fecha y hora ya no están disponibles. Por favor elige otra.";
        header("Location: /TFC_DAW/controllers/ReservaController.php?action=crear&id=$id_restaurante");
        exit;
    }

    Reserva::crear($id_usuario, $id_restaurante, $fecha, $hora, $num_personas);
    $_SESSION['exito_reserva'] = "¡Reserva realizada con éxito!";
    header("Location: /TFC_DAW/controllers/ReservaController.php?action=mis_reservas");
    exit;
} elseif ($action === 'mis_reservas') {
    $reservas = Reserva::obtenerPorUsuario($_SESSION['id']);
    require __DIR__ . '/../views/reservas/mis_reservas.php';
} elseif ($action === 'cancelar') {
    $id_reserva = $_GET['id'];
    Reserva::cancelar($id_reserva, $_SESSION['id']);
    header("Location: /TFC_DAW/controllers/ReservaController.php?action=mis_reservas");
    exit;
}
