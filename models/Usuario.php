<?php
require_once __DIR__ . '/../config/database.php';

class Usuario {

    public static function registrar($nombre, $email, $password) {
        global $conn;
        if (self::emailExiste($email)) return false;
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $sql  = "INSERT INTO usuarios (nombre, email, contraseña, rol)
                 VALUES (:nombre, :email, :password, 'usuario')";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $hash);
        return $stmt->execute();
    }

    public static function obtenerPorEmail($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function emailExiste($email) {
        global $conn;
        $stmt = $conn->prepare("SELECT COUNT(*) FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
}