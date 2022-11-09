<?php

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\AuthController;
use Controllers\DashboardController;
use Controllers\RestaurantesController;
use Controllers\EventosController;
use Controllers\PaquetesController;
use Controllers\RegistradosController;

$router = new Router();

// Login
$router->get('/login', [AuthController::class, 'login']);
$router->post('/login', [AuthController::class, 'login']);
$router->post('/logout', [AuthController::class, 'logout']);

// Crear Cuenta
$router->get('/registro', [AuthController::class, 'registro']);
$router->post('/registro', [AuthController::class, 'registro']);

// Formulario de olvide mi password
$router->get('/olvide', [AuthController::class, 'olvide']);
$router->post('/olvide', [AuthController::class, 'olvide']);

// Colocar el nuevo password
$router->get('/reestablecer', [AuthController::class, 'reestablecer']);
$router->post('/reestablecer', [AuthController::class, 'reestablecer']);

// Confirmación de Cuenta
$router->get('/mensaje', [AuthController::class, 'mensaje']);
$router->get('/confirmar-cuenta', [AuthController::class, 'confirmar']);

//area de administracion
$router->get('/admin/dashboard', [DashboardController::class, 'index']);

$router->get('/admin/restaurantes', [RestaurantesController::class, 'index']);
$router->get('/admin/restaurantes/crear', [
    RestaurantesController::class,
    'crear',
]);
$router->post('/admin/restaurantes/crear', [
    RestaurantesController::class,
    'crear',
]);

$router->get('/admin/eventos', [EventosController::class, 'index']);

$router->get('/admin/registrados', [RegistradosController::class, 'index']);

$router->get('/admin/paquetes', [PaquetesController::class, 'index']);

$router->comprobarRutas();
