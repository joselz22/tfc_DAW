<?php
    require_once __DIR__ . '/../models/restaurante.php';

    class restaurantecontroller{
        public function index(){
            $restaurantes = Restaurante::obtenerTodos();
            require __DIR__ . '/../views/restaurantes/index.php';
        }
        public function crear() {
    require __DIR__ . '/../views/restaurantes/crear.php';
}

        public function guardar() {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $ubicacion = $_POST['ubicacion'];
            $horario = $_POST['horario'];
        Restaurante::crear($nombre, $descripcion, $ubicacion, $horario);
        header("Location: ../public/index.php");
    exit;
}
}
    