<?php
require_once __DIR__ . '/../models/Restaurante.php';

$restaurantes = Restaurante::obtenerTodos();
require __DIR__ . '/../views/restaurantes/index.php';