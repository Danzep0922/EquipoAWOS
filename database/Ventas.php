<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    //
    public $fillable = [
        'idcliente',
        'idinmueble',
        'tipo_inmueble',
        'total_de_venta',
        'forma_de_pago'
    ];
}
