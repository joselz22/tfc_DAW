<?php
require_once __DIR__ . '/../controllers/restaurantecontroller.php';

$controller = new restaurantecontroller();

$action = $_GET['action'] ?? 'index';

if ($action === 'crear') {
    $controller->crear();
} elseif ($action === 'guardar') {
    $controller->guardar();
} else {
    $controller->index();
}

