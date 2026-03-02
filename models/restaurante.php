<?php
    require_once __DIR__ . '/../config/database.php';

    class Restaurante {
        public static function obtenerTodos(){
            global $conn;
            $sql = "SELECT * FROM restaurantes";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }