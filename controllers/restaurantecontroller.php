<?php
require_once __DIR__ . '/../models/Restaurante.php';
class RestauranteController {
    public function index() {
        $restaurantes = Restaurante::obtenerTodos();
        require __DIR__ . '/../views/restaurantes/index.php';
    }
    public function crear() {
        require __DIR__ . '/../views/restaurantes/crear.php';
    }
    public function guardar() {
        $nombre      = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ubicacion   = $_POST['ubicacion'];
        $horario     = $_POST['horario'];
        Restaurante::crear($nombre, $descripcion, $ubicacion, $horario);
        header("Location: /TFC_DAW/public/index.php");
        exit;
    }
    public function editar() {
        $id = $_GET['id'];
        $restaurante = Restaurante::obtenerPorId($id);
        require __DIR__ . '/../views/restaurantes/editar.php';
    }
    public function actualizar() {
        $id          = $_POST['id'];
        $nombre      = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $ubicacion   = $_POST['ubicacion'];
        $horario     = $_POST['horario'];
        Restaurante::actualizar($id, $nombre, $descripcion, $ubicacion, $horario);
        header("Location: /TFC_DAW/public/index.php");
        exit;
    }
    public function eliminar() {
        $id = $_GET['id'];
        Restaurante::eliminar($id);
        header("Location: /TFC_DAW/public/index.php");
        exit;
    }
}