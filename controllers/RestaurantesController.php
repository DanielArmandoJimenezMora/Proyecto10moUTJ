<?php

namespace Controllers;

use MVC\Router;

class RestaurantesController
{
    public static function index(Router $router)
    {
        $router->render('admin/restaurantes/index', [
            'titulo' => 'Restaurantes / Sucursales',
        ]);
    }
    public static function crear(Router $router)
    {
        $alertas = [];

        $router->render('admin/restaurantes/crear', [
            'titulo' => 'Registrar Restaurante',
            'alertas' => $alertas,
        ]);
    }
}
