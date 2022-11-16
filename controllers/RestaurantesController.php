<?php

namespace Controllers;

use MVC\Router;
use Model\Restaurante;
use Intervention\Image\ImageManagerStatic as Image;

class RestaurantesController
{
    public static function index(Router $router)
    {
        $restaurantes = Restaurante::all();

        if (!is_admin()) {
            header('Location: /login');
        }

        $router->render('admin/restaurantes/index', [
            'titulo' => 'Restaurantes / Sucursales',
            'restaurantes' => $restaurantes,
        ]);
    }
    public static function crear(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        }
        $alertas = [];
        $restaurante = new Restaurante();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header('Location: /login');
            }
            // leer imagen
            if (!empty($_FILES['imagen']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/restaurantes';

                // Crear la carpeta si no existe
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0777, true);
                }
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])
                    ->fit(800, 800)
                    ->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])
                    ->fit(800, 800)
                    ->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;
            }

            $_POST['redes'] = json_encode(
                $_POST['redes'],
                JSON_UNESCAPED_SLASHES
            );

            $restaurante->sincronizar($_POST);

            //validar
            $alertas = $restaurante->validar();

            // Guardar el registro
            if (empty($alertas)) {
                // Guardar las alertas
                $imagen_png->save(
                    $carpeta_imagenes . '/' . $nombre_imagen . '.png'
                );
                $imagen_webp->save(
                    $carpeta_imagenes . '/' . $nombre_imagen . '.webp'
                );

                // Guardar en la base de datos
                $resultado = $restaurante->guardar();

                if ($resultado) {
                    header('Location: /admin/restaurantes');
                }
            }
        }

        $router->render('admin/restaurantes/crear', [
            'titulo' => 'Registrar Restaurante',
            'alertas' => $alertas,
            'restaurante' => $restaurante,
            'redes' => json_decode($restaurante->redes),
        ]);
    }

    public static function editar(Router $router)
    {
        if (!is_admin()) {
            header('Location: /login');
        }
        $alertas = [];
        //validar ID
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);

        if (!$id) {
            header('Location: /admin/restaurantes');
        }

        // Obtener el restaurante a editar
        $restaurante = Restaurante::find($id);

        if (!$restaurante) {
            header('Location: /admin/restaurantes');
        }

        $restaurante->imagen_actual = $restaurante->imagen;

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!is_admin()) {
                header('Location: /login');
            }

            if (!empty($_FILES['imagen']['tmp_name'])) {
                $carpeta_imagenes = '../public/img/restaurantes';

                // Crear la carpeta si no existe
                if (!is_dir($carpeta_imagenes)) {
                    mkdir($carpeta_imagenes, 0777, true);
                }
                $imagen_png = Image::make($_FILES['imagen']['tmp_name'])
                    ->fit(800, 800)
                    ->encode('png', 80);
                $imagen_webp = Image::make($_FILES['imagen']['tmp_name'])
                    ->fit(800, 800)
                    ->encode('webp', 80);

                $nombre_imagen = md5(uniqid(rand(), true));

                $_POST['imagen'] = $nombre_imagen;
            } else {
                $_POST['imagen'] = $restaurante->imagen_actual;
            }

            $_POST['redes'] = json_encode(
                $_POST['redes'],
                JSON_UNESCAPED_SLASHES
            );
            $restaurante->sincronizar($_POST);

            $alertas = $restaurante->validar();

            if (empty($alertas)) {
                if (isset($nombre_imagen)) {
                    $imagen_png->save(
                        $carpeta_imagenes . '/' . $nombre_imagen . '.png'
                    );
                    $imagen_webp->save(
                        $carpeta_imagenes . '/' . $nombre_imagen . '.webp'
                    );
                }

                $resultado = $restaurante->guardar();

                if ($resultado) {
                    header('Location: /admin/restaurantes');
                }
            }
        }

        $router->render('admin/restaurantes/editar', [
            'titulo' => 'Actualizar Restaurante',
            'alertas' => $alertas,
            'restaurante' => $restaurante,
            'redes' => json_decode($restaurante->redes),
        ]);
    }

    public static function eliminar()
    {
        if (!is_admin()) {
            header('Location: /login');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $restaurante = Restaurante::find($id);
            if (!isset($restaurante)) {
                header('Location: /admin/restaurantes');
            }

            $resultado = $restaurante->eliminar();

            if ($resultado) {
                header('Location: /admin/restaurantes');
            }
            debuguear($restaurante);
        }
    }
}
