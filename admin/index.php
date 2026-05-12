<?php
session_start();

if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') {
    header("Location: /TFC_DAW/index.php");
    exit;
}

require_once __DIR__ . '/../controllers/RestauranteController.php';

$controller = new RestauranteController();
$action = $_GET['action'] ?? 'index';

if ($action === 'crear') {
    $controller->crear();
} elseif ($action === 'guardar') {
    $controller->guardar();
} elseif ($action === 'editar') {
    $controller->editar();
} elseif ($action === 'actualizar') {
    $controller->actualizar();
} elseif ($action === 'eliminar') {
    $controller->eliminar();
} else {
    $controller->index();
}