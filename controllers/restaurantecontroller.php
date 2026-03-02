<?php
    require_once __DIR__ . '/../models/restaurante.php';

    class restaurantecontroller{
        public function index(){
            $restaurantes = Restaurante::obtenerTodos();
            require __DIR__ . '/../views/restaurantes/index.php';
        }
    }