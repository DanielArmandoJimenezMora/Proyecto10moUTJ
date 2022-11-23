<?php

namespace Controllers;
use MVC\Router;

class PaginasController
{
    public static function index(Router $router)
    {
        $router->render('paginas/index', [
            'titulo' => 'Inicio',
        ]);
    }
    public static function evento(Router $router)
    {
        $router->render('paginas/ticketreserve', [
            'titulo' => 'Ticket Reserve',
        ]);
    }
    public static function paquetes(Router $router)
    {
        $router->render('paginas/paquetes', [
            'titulo' => 'Paquetes cena de año nuevo',
        ]);
    }
    public static function restaurantes(Router $router)
    {
        $router->render('paginas/paquetes', [
            'titulo' => 'Restaurantes',
        ]);
    }
}
