<?php
$host     = 'localhost';
$dbname   = 'centro_comercial';
$usuario  = 'root';
$password = '';

try {
    $conn = new PDO(
        "mysql:host=$host;port=3307;dbname=$dbname;charset=utf8mb4",
        $usuario,
        $password
    );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}