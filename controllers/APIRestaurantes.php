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
}
