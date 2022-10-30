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
}
