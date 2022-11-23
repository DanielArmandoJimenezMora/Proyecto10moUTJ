<?php

namespace Controllers;

use Model\Dia;
use Model\Hora;
use MVC\Router;
use Model\Evento;
use Model\Categoria;
use Model\Restaurante;

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
        $eventos = Evento::ordenar('hora_id', 'ASC');

        $eventoF = [];
        foreach ($eventos as $evento) {
            $evento->categoria = Categoria::find($evento->categoria_id);
            $evento->dia = Dia::find($evento->dia_id);
            $evento->hora = Hora::find($evento->hora_id);
            $evento->restaurante = Restaurante::find($evento->restaurante_id);
            $eventoF[] = $evento;
        }

        $router->render('paginas/restaurantes', [
            'titulo' => 'Restaurantes',
            'eventos' => $eventoF,
        ]);
    }
}
