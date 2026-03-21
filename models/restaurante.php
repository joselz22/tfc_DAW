<?php
require_once __DIR__ . '/../config/database.php';

class Restaurante {
    public static function obtenerTodos() {
        global $conn;
        $sql = "SELECT * FROM restaurantes";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function crear($nombre, $descripcion, $ubicacion, $horario) {
        global $conn;
        $sql = "INSERT INTO restaurantes (nombre, descripcion, ubicacion, horario)
                VALUES (:nombre, :descripcion, :ubicacion, :horario)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':horario', $horario);
        return $stmt->execute();
    }
}
