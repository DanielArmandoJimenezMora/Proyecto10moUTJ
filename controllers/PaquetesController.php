<?php

namespace Controllers;

use MVC\Router;

class PaquetesController
{
    public static function index(Router $router)
    {
        $router->render('admin/paquetes/index', [
            'titulo' => 'Paquetes',
        ]);
    }
}
