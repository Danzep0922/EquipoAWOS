<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //
public $fillable = [
    'nombre',
    'primer_apellido',
    'segundo_apellido',
    'numero_celular',
    'correo_electronico',
    'contraseña',
];

}
