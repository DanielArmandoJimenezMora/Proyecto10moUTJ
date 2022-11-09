<?php

namespace Model;

class Restaurante extends ActiveRecord
{
    protected static $tabla = 'restaurantes';
    protected static $columnasDB = [
        'id',
        'nombre',
        'sucursal',
        'domicilio',
        'imagen',
        'tags',
        'redes',
    ];

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->sucursal = $args['sucursal'] ?? '';
        $this->domicilio = $args['domicilio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->tags = $args['tags'] ?? '';
        $this->redes = $args['redes'] ?? '';
    }

    public function validar()
    {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if (!$this->sucursal) {
            self::$alertas['error'][] = 'La sucursal es Obligatoria';
        }
        if (!$this->domicilio) {
            self::$alertas['error'][] = 'El Campo domicilio es Obligatorio';
        }
        if (!$this->imagen) {
            self::$alertas['error'][] = 'El Campo imagen es Obligatorio';
        }
        if (!$this->tags) {
            self::$alertas['error'][] =
                'El Campo especialidades es obligatorio';
        }

        return self::$alertas;
    }
}
