<?php
require_once __DIR__ . '/../config/database.php';

class Reserva {

    public static function crear($id_usuario, $id_restaurante, $fecha, $hora, $num_personas) {
        global $conn;
        $sql = "INSERT INTO reservas (id_usuario, id_restaurante, fecha, hora, num_personas)
                VALUES (:id_usuario, :id_restaurante, :fecha, :hora, :num_personas)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->bindParam(':id_restaurante', $id_restaurante);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':hora', $hora);
        $stmt->bindParam(':num_personas', $num_personas);
        return $stmt->execute();
    }

    public static function obtenerPorUsuario($id_usuario) {
        global $conn;
        $sql = "SELECT r.*, res.nombre AS nombre_restaurante, res.ubicacion
                FROM reservas r
                JOIN restaurantes res ON r.id_restaurante = res.id_restaurante
                WHERE r.id_usuario = :id_usuario
                ORDER BY r.fecha DESC, r.hora DESC";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_usuario', $id_usuario);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function cancelar($id_reserva, $id_usuario) {
        global $conn;
        $sql = "UPDATE reservas SET estado = 'cancelada'
                WHERE id_reserva = :id_reserva AND id_usuario = :id_usuario";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_reserva', $id_reserva);
        $stmt->bindParam(':id_usuario', $id_usuario);
        return $stmt->execute();
    }

    public static function disponible($id_restaurante, $fecha, $hora) {
        global $conn;
        $sql = "SELECT COUNT(*) FROM reservas
                WHERE id_restaurante = :id_restaurante
                AND fecha = :fecha
                AND hora = :hora
                AND estado = 'activa'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id_restaurante', $id_restaurante);
        $stmt->bindParam(':fecha', $fecha);
        $stmt->bindParam(':hora', $hora);
        $stmt->execute();
        return $stmt->fetchColumn() == 0;
    }
}