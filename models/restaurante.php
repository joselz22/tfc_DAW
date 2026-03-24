<?php
require_once __DIR__ . '/../config/database.php';

class Restaurante {
    public static function obtenerTodos() {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM restaurantes");
        $stmt->execute();
        return $stmt->fetchAll();
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
    public static function obtenerPorId($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM restaurantes WHERE id_restaurante = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function actualizar($id, $nombre, $descripcion, $ubicacion, $horario) {
        global $conn;
        $sql = "UPDATE restaurantes SET nombre=:nombre, descripcion=:descripcion,
                ubicacion=:ubicacion, horario=:horario
                WHERE id_restaurante=:id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':descripcion', $descripcion);
        $stmt->bindParam(':ubicacion', $ubicacion);
        $stmt->bindParam(':horario', $horario);
        return $stmt->execute();
    }
    public static function eliminar($id) {
        global $conn;
        $stmt = $conn->prepare("DELETE FROM restaurantes WHERE id_restaurante = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}