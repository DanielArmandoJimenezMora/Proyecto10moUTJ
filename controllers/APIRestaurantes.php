<?php

namespace Controllers;

use Model\Restaurante;

class APIRestaurantes
{
    public static function index()
    {
        $restaurantes = Restaurante::all();
        echo json_encode($restaurantes);
    }
    public static function restaurante()
    {
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id || $id < 1) {
            echo json_encode([]);
            return;
        }

        $restaurante = Restaurante::find($id);
        echo json_encode($restaurante, JSON_UNESCAPED_SLASHES);
    }
}
